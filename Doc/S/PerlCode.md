From the old parser-openedit.pl

# select one:
if($ARGV[2] eq "a") {
	print "$_=" foreach @arr;
} 
elsif($ARGV[2] eq "b") {
	print "$_=$_\n" foreach @arr;
	}
elsif($ARGV[2] eq "d") {
	print substr($_, 1) . "=<a class='definedterm' href='{!!!}DefT." . substr($_, 1) . "'>". substr($_ , 1) . "</a>\n" foreach @arr;
	}
#ToDo: test this ????
elsif($ARGV[2] eq "t") {
	print substr($_, 5). "=\{_" . substr($_, 5) ."\}\n" foreach @arr;
	}
elsif($ARGV[2] eq "tli") {
	print "<li>\{Def." . substr($_, 5) .".sec\}</li>" foreach @arr;
	}

elsif($ARGV[2] eq "tbase") {
	print  substr($_, 0, -7) .".=[G/Z/Base]" foreach @arr;
	}

elsif($ARGV[2] eq "x") {
	print "$_=<a class='xref' href='{!!!}" . substr($_, 0, -5) . ".sec'>" . substr($_, 0, -5)."</a>\n" foreach @arr;	
		}

else {
	print "$_=" foreach @arr;
