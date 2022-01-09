<?php

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><title>$dir</title><link  href='Doc/G/Z/CSS/Visual.css' rel='stylesheet' /><link rel='icon' href='vendor/png/CmA-Square.png'></head><body>";
 }


include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;

if (strlen($keyName) < 2) { 
  $keyName = "Model.Root";
}

$document = `perl $lib_path/parser.pl $path/$dir $keyName `;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<span class='missing'>{",$document);

$document=str_replace("}","}</span>",$document);

  echo $document;}
 else {
   echo "Nothing to Show";

}
?>
