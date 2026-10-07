#!/usr/bin/perl -wl

# CommonAccord - bringing the world to agreement
# Written in 2014 by Primavera De Filippi To the extent possible under law, the author(s) have dedicated all copyright and related and neighboring rights to this software to the public domain worldwide. This software is distributed without any warranty.
# You should have received a copy of the CC0 Public Domain Dedication along with this software. If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.

# PERFORMANCE NOTES (this version)
# The original re-opened and re-scanned (twice) the relevant files for EVERY
# {field} lookup, and re-resolved identical fields over and over. On large
# documents that meant tens of millions of line reads and >100k file opens for
# a single page view. This version changes only HOW lookups are done, not WHAT
# they return:
#   1. Each file is read from disk once and indexed (%index).
#   2. parse() results are memoized (%memo), keyed on everything that can
#      affect the result (file, field, part, depth).
#   3. A field that (directly or indirectly) includes itself is cut off
#      instead of recursing forever (%active) - the original would exhaust
#      memory and crash the server on such a document.
#   4. Remote (http) includes get a timeout, a per-process temp name, and are
#      fetched without going through a shell.

use warnings;
use strict;

my %remote;
my $remote_cnt = 0;

my $path = "./Doc/";
my $orig;

my %index;        # file  => { lines => [...], assign => {key => [lines]}, links => [[part,what],...] }
my %memo;         # "file\0field\0part\0depth" => resolved content (undef if unresolved)
my %active;       # "file\0field\0part" currently being resolved (cycle detection)
my $cuts = 0;     # number of cycles cut so far

# You can do a trace of all files consulted by using the parser-trace.pl file.
# my $filelist = "";

# Read a file once and build the lookup structures parse_root() needs.
sub load_file {

	my ($file) = @_;
	return $index{$file} if $index{$file};

	open(my $f, "<", $file) or die "Missing file: $file\n";

	my (@lines, %assign, @links);
	while (my $line = <$f>) {
		push @lines, $line;
		# candidate "field = value" lines, bucketed by the text before the first '='
		push @{ $assign{$1} }, $line if $line =~ /^([^=]*?)\s*=/;
		# candidate "prefix=[file]" include lines, in file order
		push @links, [$1, $2] if $line =~ /^([^=]*)=\[(.+?)\]/;
	}
	close($f);

	return $index{$file} = { lines => \@lines, assign => \%assign, links => \@links };
}

sub parse {

	my($file,$root,$part,$depth) = @_;
	$depth = 0 unless defined $depth;

	$orig = $file unless defined $orig;

	my $mkey = join("\0", $file, $root, defined $part ? $part : '', $depth);
	return $memo{$mkey} if exists $memo{$mkey};

	my $akey = join("\0", $file, $root, defined $part ? $part : '');
	if ($active{$akey}) { $cuts++; return; }   # self-referencing field: leave it unresolved

	my $idx = load_file($file);
	my $cuts_before = $cuts;
	$active{$akey} = 1;

	my $result;
	my $content = parse_root($idx, $root, $part, $depth);
	if($content) { expand_fields(\$content, $part, $depth); $result = $content; }

	delete $active{$akey};

	# Don't cache anything whose value depended on a cycle having been cut.
	$memo{$mkey} = $result if $cuts == $cuts_before;

	return $result;

}


sub parse_root {

	my ($idx, $field, $oldpart, $depth) = @_;
	$depth = 0 unless defined $depth;
	my $root;

	# 1. Direct assignment "field = value" (first matching line wins).
	if (index($field, '=') < 0) {
		(my $bucket = $field) =~ s/\s+$//;
		foreach my $line (@{ $idx->{assign}{$bucket} || [] }) {
			return $root if ($root) = $line =~ /^\Q$field\E\s*=\s*(.*?)$/;
		}
	} else {
		# field names containing '=' are not bucketed; scan like the original did
		foreach my $line (@{ $idx->{lines} }) {
			return $root if ($root) = $line =~ /^\Q$field\E\s*=\s*(.*?)$/;
		}
	}

	# 2. Follow "prefix=[file]" includes, in file order.
	foreach my $link (@{ $idx->{links} }) {
		my($part, $what) = @$link;
		my $newfield;
		if( index($field, $part) == 0 ) {
			if ( $part && ($field =~ /^\Q$part\E(.+?)$/) ){ $newfield = $1;}

			$part = $oldpart . $part if $oldpart;
			# Follow a URL
			if($what =~ s/^http//) {
				$what = 'http' . $what;
				if(! $remote{$path.$what}) {  $remote_cnt++;
					my $tmp = "$path/tmp$$" . "_$remote_cnt";
					# list form: no shell, so a hostile URL can't inject commands
					system("curl", "-s", "--max-time", "20", "-o", $tmp, $what);
					# a failed fetch leaves an empty file (as before) rather than a missing one
					if (open(my $t, ">>", $tmp)) { close($t); }
					$remote{$path.$what} = $tmp;
				}
				$root = parse($remote{$path.$what}, $newfield || $field, $part, $depth);
			}
			# Look locally for a file
			else {
				$root = parse($path.$what, $newfield || $field, $part, $depth);
			}
 # $filelist =  "<tr><td>" . $part . "</td><td>" . $field. "</td><td>" . $what. "</td></tr>" . $filelist  ; # to make a list of each file visited.

			return $root if $root;
		}
	}

	return $root;

}

sub expand_fields  {

	my($field,$part,$depth) = @_;
	$depth = 0 unless defined $depth;
	my $child_depth = $depth + 1;


	foreach( $$field =~ /\{([^}]+)\}/g ) {
	  my $ex = $_;
	  my $ox = $part ? $part . $ex : $ex;
	  my $value = parse($orig, $ox, undef, $child_depth);

	  if ($value) {
	    if ($value =~ /^\s*<\/test>\s*$/) {
	      # </test> is a sentinel meaning "nothing here" - remove placeholder silently.
	      # (Don't cascade: only leaf </test> values trigger removal, not null returns
	      # from unresolved sub-fields, which would cause parent fields to vanish too.)
	      $$field =~ s/\{\Q$ex\E\}//g;
	    } else {
	      my $spanvalue;
	      if($ox =~ /!!$/) {
	        # Raw value - no span wrapper
	        $spanvalue = $value;
	      } else {
	        # Escape single quotes in field path for HTML attributes
	        (my $ox_esc = $ox) =~ s/'/&#39;/g;
	        $spanvalue = "<span"
	                   . " title='$ox_esc'"
	                   . " id='$ox_esc'"
	                   . " data-depth='$child_depth'"
	                   . " data-cmacc-title='$ox_esc'"
	                   . " class='cmacc-span'"
	                   . "><span class='cmacc-content'>$value</span></span>";
	      }
	      $$field =~ s/\{\Q$ex\E\}/$spanvalue/gg;
	    }
	  }
	  # If !$value (null/undef): leave {field} unsubstituted - original behaviour,
	  # doc.php will flag it as a missing field in red.
	}
      }

# Now with key option as $ARGV[1]

die "Usage: $0 <file> <key>\n" unless defined $ARGV[0] && defined $ARGV[1];

my $output = eval { parse($ARGV[0], $ARGV[1]) };
# "$filelist is list of files visited if line 65 is uncommented"

if ($@) { print $@; } else { print( ($output // "") . "\n\n" ); }

#  print  "<table style='width:100%'><tr><th style='width:10%'>Prefix</th><th style='width:10%'>Key</th><th style='width:80%'>File</th></tr>" . $filelist . "</table>";


#clean up the temporary files (remote fetching)
unlink values %remote;
