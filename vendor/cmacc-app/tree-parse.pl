#!/usr/bin/perl -wl

# CommonAccord - bringing the world to agreement
# Written in 2014 by Primavera De Filippi To the extent possible under law, the author(s) have dedicated all copyright and related and neighboring rights to this software to the public domain worldwide. This software is distributed without any warranty.
# You should have received a copy of the CC0 Public Domain Dedication along with this software. If not, see <http://creativecommons.org/publicdomain/zero/1.0/>.


use warnings;
use strict;

my $path = "./Doc/";

my %imports;

sub tree_parse {

	my ($file) = @_; my $f; open $f,  $file or die "error opening ($file):  $!\n";

	$imports{$file} = [];

	while(<$f>) {
	
		my($one, $two);
		
		 if( ( ($one,$two) = $_ =~m/^([^=]*)=\[(.+?)\]/ ) ) {

                        push @{ $imports{$file} }, $path . $two;

                        tree_parse($path. $two);
		}
	}
	
}


tree_parse($ARGV[0]);

print " [ \n";
foreach my $k (keys(%imports)) {
	print ' { "name": "'.$k.'", "imports": ['; 
	print '"'. $_ .'",' foreach @{ $imports{$k} };
	print '] },';
}
print " ] \n";
