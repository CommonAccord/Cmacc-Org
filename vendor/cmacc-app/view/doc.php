<?php

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><title>$dir</title><link  href='Doc/G/Z/CSS/Doc.css' rel='stylesheet' /> <link rel='icon' href='vendor/png/CmA-Square.png'></head><body>";
 }


include("$lib_path/view-tabs.php");
 
echo "<hr>";

$lib_path = LIB_PATH;


# Adding ability to pass a starting Key to the rendering

if (strlen($keyName) < 2) { 
  $keyName = "Model.Root";
}

$document = `perl $lib_path/parser.pl $path/$dir $keyName `;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

$document=str_replace("{","<span class='missing'>{",$document);

$document=str_replace("}","}</span>",$document);

  echo $document;
  echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>"; }
else {
   echo "Nothing to Show";

}
?>
