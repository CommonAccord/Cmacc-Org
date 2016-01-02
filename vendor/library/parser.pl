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
			
			if($what =~ s/^\?//) { 
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
       my $spanvalue = "<span title='" . $ox . "' id='" . $ox . "' >". $value . "</span>";
       $$field =~ s/\{\Q$ex\E\}/$spanvalue/gg if $value;
     }
      }


my $output  = parse($ARGV[0], "Model.Root");
print $output;

#clean up the temporary files (remote fetching)
`rm $_` for values %remote;
