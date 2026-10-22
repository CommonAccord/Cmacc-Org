<?php



$lib_path = LIB_PATH;
$document = shell_exec("perl $lib_path/parser-kvs.pl " . escapeshellarg("$path/$dir"));

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
