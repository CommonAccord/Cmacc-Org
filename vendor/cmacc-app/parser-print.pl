#!/usr/bin/perl -wl

# CommonAccord - bringing the world to agreement
# Written in 2014 by Primavera De Filippi To the extent possible under law, the author(s) have dedicated all copyright and related and neighboring rights to this software to the public domain worldwide. This software is distributed without any warranty.
# You should have received a copy of the CC0 Public Domain Dedication along with this software. If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.


# PERFORMANCE NOTES (this version)
# The original re-opened and re-scanned (twice) the relevant files for EVERY
# {field} lookup. This version changes only HOW lookups are done, not WHAT
# they return: each file is read once and indexed (%index), parse() results are memoized (%memo), and a
# field that includes itself is cut off instead of recursing until the server
# runs out of memory (%active). Remote includes use a timeout, a per-process
# temp name, and no shell.

use warnings;
use strict;

my %remote;
my $remote_cnt = 0;

my $path = "./Doc/";
my $orig;

my %index;    # file => { lines => [...], assign => {key => [lines]}, links => [[part,what],...] }
my %active;   # "file\0field\0part" currently being resolved (cycle detection)
my %memo;     # "file\0field\0part" => resolved content (undef if unresolved)
my $cuts = 0; # number of cycles cut so far

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

	my($file,$root,$part) = @_;

	$orig = $file unless defined $orig;

	my $key = join("\0", $file, $root, defined $part ? $part : '');
	return $memo{$key} if exists $memo{$key};
	if ($active{$key}) { $cuts++; return; }   # self-referencing field: leave it unresolved

	my $idx = load_file($file);
	my $cuts_before = $cuts;
	$active{$key} = 1;

	my $result;
	my $content = parse_root($idx, $root, $part);
	if($content) { expand_fields(\$content, $part); $result = $content; }

	delete $active{$key};

	# Don't cache anything whose value depended on a cycle having been cut.
	$memo{$key} = $result if $cuts == $cuts_before;

	return $result;
}

sub parse_root {

	my ($idx, $field, $oldpart) = @_; my $root;

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
					my $tmp = "$path/tmp$$" . "_$remote_cnt.cmacc";
					# list form: no shell, so a hostile URL can't inject commands; hard timeout
					system("curl", "-s", "--max-time", "20", "-o", $tmp, "--url", $what);
					# a failed fetch leaves an empty file (as before) rather than a missing one
					if (open(my $t, ">>", $tmp)) { close($t); }
					$remote{$path.$what} = $tmp;
				}
				$root = parse($remote{$path.$what}, $newfield || $field, $part);
			}
			# Look locally for a file
			else {
				$root = parse($path.$what, $newfield || $field, $part);
			}
			return $root if $root;
		}
	}
	return $root;

}

sub expand_fields  {

	my($field,$part) = @_;

	foreach( $$field =~ /\{([^}]+)\}/g ) {
		my $ex = $_;
		my $ox = $part ? $part . $ex : $ex;
    if ( substr($ox,-2) eq "!!") {
      $ox = substr($ox,0,-2)}

		my $value = parse($orig, $ox);
		$$field =~ s/\{\Q$ex\E\}/$value/gg if $value;
	}
}

# Now with key option as $ARGV[1]

my $output = eval { parse($ARGV[0], $ARGV[1]) };

if ($@) { print $@; } else { print( $output // "" ); }

#clean up the temporary files (remote fetching)
unlink values %remote;
