<?php

$htmlHead = `perl $lib_path/parser-head.pl $path/$dir`;

if (strlen($htmlHead) > 5){ 

  echo $htmlHead;
}

 else {
   echo "<!DOCTYPE html><head><link  href='Doc/G/Z/CSS/Print.css' rel='stylesheet' /></head><body>";
 }


$lib_path = LIB_PATH;

#testing python - so far, no good.
# $document = `python3 vendor/cmacc-app/view/py_render/parser-print.py G/Agt-Form-CmA/US/0.md Doc Model.Root` ;


# Adding ability to pass a starting Key to the rendering

if (strlen($keyName) < 2) { 
  $keyName = "Model.Root";
}

$document = `perl $lib_path/parser.pl $path/$dir $keyName `;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 

//kludge to let html headers have formatting.

$document=str_replace("(Curly-)","{",$document);

$document=str_replace("(-Curly)","}",$document);

 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
