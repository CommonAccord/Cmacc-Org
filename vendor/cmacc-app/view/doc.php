<?php

$cssdoc = 'Doc/G/Z/CSS/Doc.css';

$cssspecial = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($cssspecial) > 5){ 
  $cssdoc = $cssspecial ;
  }

echo "<!DOCTYPE html><head><title>$dir</title><link  href='$cssdoc' rel='stylesheet' /> <link rel='icon' href='vendor/png/CmA-Square.png'></head><body>";

include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;


$document = `perl $lib_path/parser.pl $path/$dir $keyName $wrapName`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{Render.Metadata}", "(" . $dir . "#" . $keyName . " on " . date('Y-m-d') . ")" ,$document);

$document=str_replace("{","<span class='missing'>{",$document);

$document=str_replace("}","}</span>",$document);

  echo $document;
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; }
else {
   echo "Nothing to Show";

}
?>
