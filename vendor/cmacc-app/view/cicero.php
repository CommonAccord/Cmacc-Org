<?php

$htmlHead = shell_exec("perl $lib_path/parser-head.pl " . escapeshellarg("$path/$dir"));

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><title>$dir</title><link  href='Doc/G/Z/CSS/Doc.css' rel='stylesheet' /></head><body>";
 }


include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;


# Adding ability to pass a starting Key to the rendering

if (strlen($keyName) < 2) { 
  $keyName = "r00t";
}

$document = shell_exec("perl $lib_path/parser.pl " . escapeshellarg("$path/$dir") . " " . escapeshellarg($keyName));

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","{{",$document);

$document=str_replace("}","}}",$document);

  echo $document;}
 else {
   echo "Nothing to Show";

}
?>
