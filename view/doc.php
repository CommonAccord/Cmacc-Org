<body style="margin:20;padding:0">
<?php

include("$lib_path/view-tabs.php");

echo "<hr><hr><br>";
?>


<?php

$lib_path = LIB_PATH;

$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<font color='red'>{",$document);

$document=str_replace("}","}</font>",$document);

//kludge to let html headers have formatting. (ToDo - remove as no longer needed bz of header control?)

$document=str_replace("(Curly-)","{",$document);

$document=str_replace("(-Curly)","}",$document);

 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
