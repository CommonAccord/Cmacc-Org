#!/usr/bin/perl -wl

# CommonAccord - bringing the world to agreement
# Written in 2014 by Primavera De Filippi To the extent possible under law, the author(s) have dedicated all copyright and related and neighboring rights to this software to the public domain worldwide. This software is distributed without any warranty.
# You should have received a copy of the CC0 Public Domain Dedication along with this software. If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.


use warnings;
use strict;

my %remote;
my $remote_cnt = 0;

my $path = "./Doc/";
my $orig;
my $defterm;
  
sub parse {
	
	my($file,$root,$part) = @_; my $f;


	ref($file) eq "GLOB" ? $f = $file : open $f, $file or die $!;
	$orig = $f unless $orig;
	
	my $content = parse_root($f, $root, $part);
	if($content) { expand_fields($f, \$content, $part); return($content) }

	return;
}


sub parse_root { 
	
	my ($f, $field, $oldpart) = @_; my $root;


	seek($f, 0, 0);
	while(<$f>) {
		return $root if ($root) = $_ =~ /^\Q$field\E\s*=\s*(.*?)$/;
	}
	
	
	seek($f, 0, 0);
	while(<$f>) {
		my($part,$what, $newfield);
#		if( (($part, $what) = $_ =~ /^([^=]*)=\[(.+?)\]/) and ($field =~ s/^\Q$part\E//) ) {
		if( (($part, $what) = $_ =~ /^([^=]*)=\[(.+?)\]/) and ($field =~ /^\Q$part\E/ )) {
			if ( $part && ($field =~ /^\Q$part\E(.+?)$/) ){ $newfield = $1;}
			
			$part = $oldpart . $part if $oldpart;
			
		if($what =~ s/^http//) { 
				$what = 'http' . $what;
					if(! $remote{$path.$what}) {  $remote_cnt++;
					`curl '$what' > '$path/tmp$remote_cnt.cmacc'`;
					$remote{$path.$what} = "$path/tmp$remote_cnt.cmacc";
				}
				$root = parse($remote{$path.$what}, $newfield || $field, $part);
			}
			else {
				$root = parse($path.$what, $newfield || $field, $part);
			}
			return $root if $root;
		}
	}
	return $root;

} 

sub expand_fields  {

	my($f,$field,$part) = @_;

	foreach( $$field =~ /\{([^}]+)\}/g ) {
		my $ex = $_;
		my $ox = $part ? $part . $ex : $ex;
		my $value = parse($orig, $ox);
		$$field =~ s/\{\Q$ex\E\}/$value/gg if $value;
	}
} 



# Now with key option as $ARGV[1]

my $output  = parse($ARGV[0], $ARGV[1]);

# print $output;

# XXX FIX ME XXX This is horrible - but  I'm just dead tired  :(
my %seen; my @arr = $output=~/\{([^}]+)\}/g;
@arr = grep { ! $seen{$_}++ } @arr;


foreach ( @arr ) {

#Change print substr($_, 0) to print substr($_, 0, 5) to remove the "DefT." prefix.
if (substr($_, 0, 5) eq "DefT.") {	
	print substr($_, 0) . "={_". substr($_ , 5) . "}\n";	
}

elsif (substr($_, 0, 1) eq "_") {	
		print substr($_, 1) . "=<a class='definedterm' href='{!!!}DefT." . substr($_, 1) . "'>". substr($_ , 1) . "</a>\n";
}

elsif(substr($_, -5 ) eq ".Xnum") {
	print "$_=<a class='xref' href='{!!!}" . substr($_, 0, -5) . ".sec'>" . substr($_, 0, -5)."</a>\n";	
		}

else { print $_ . "=\n"; }
} 

#clean up the temporary files (remote fetching)
`rm $_` for values %remote;
