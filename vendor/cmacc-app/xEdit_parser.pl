#!/usr/bin/perl -wl

# Copied from parse.pl
# User: QuynhND

use warnings;
use strict;

my %remote;
my $remote_cnt = 0;

my $path = "./Doc/";
my $orig;

sub parse { 
    my ($file, $root, $part) = @_; 
    my $f; 
        ref($file) eq "GLOB" ? $f = $file : open $f, $file or die $!;
    $orig = $f unless $orig;

    my $content = parse_root($f, $root, $part);

    if ($content) {
        expand_fields($f, \$content, $part);
        return($content)
    }

    return;
}


sub parse_root {

    my ($f, $field, $oldpart) = @_;
    my $root;

    #GET Variable after =
    seek($f, 0, 0);
    while(<$f>) {
        if (($root) = $_ =~ /^\Q$field\E\s*=\s*(.*?)$/){
            return $root;
        }
    }

    seek($f, 0, 0);
    while(<$f>) {
        my ($part, $what, $newfield);
        if ((($part, $what) = $_ =~ /^([^=]*)=\[(.+?)\]/) and ($field =~ /^\Q$part\E/ )) {
            if ($part && ($field =~ /^\Q$part\E(.+?)$/)) { $newfield = $1;}

            $part = $oldpart.$part if $oldpart;

            if ($what =~ s/^\?//) {
                if (!$remote{$path.$what}) {
                    $remote_cnt++;
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

    my ($f, $field, $part) = @_; 
    foreach($$field =~ /\{([^}]+)\}/g) {
        my $ex = $_;
        my $ox = $part ? $part.$ex : $ex;

        my $value = parse($orig, $ox);
        my $spanvalue = "<span title=\"".$ox."\" id=\"".$ox."\" >".$value."</span>";
        $$field =~ s/\{\Q$ex\E\}/$spanvalue/gg if $value;
    }
}
 
my $output = parse($ARGV[0], "Model.Root");
print $output;

#clean up the temporary files (remote fetching)
`rm $_` for values %remote;
