<?php

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><link  href='Doc/Z/CSS/Doc.css' rel='stylesheet' /></head><body>";
 }


include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;

$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<font color='red'>{",$document);

$document=str_replace("}","}</font>",$document);

//testing the link notion - need to be able to put name of link in the text

$document=str_replace("[","&#91;<a href='$_SERVER[PHP_SELF]?action=nav&file=",$document);

$document=str_replace("]","'>Link&#93;</a>",$document);

  echo $document;}
 else {
   echo "Nothing to Show";

}
?>
