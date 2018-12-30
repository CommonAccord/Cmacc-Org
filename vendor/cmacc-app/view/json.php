<?php
include("header.php");

include("$lib_path/view-tabs.php");

?>


<h4>JSON source view - <a href="https://github.com/adonalsium/common_accord/blob/dev/README.md">see technical description from Brown DISP ReadMe</a>:</h4>

<?php 
# First the Data k/v's.  :

$text="{<ul type='none'><li>\"data\" { <ul type='none'><li>";

foreach($contents as $n) {
  list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {

}


elseif(isset($v)) { 
$vhtml =  htmlspecialchars(json_encode($v));
$vhtml = str_replace('\/', '/', $vhtml);
$vhtml = str_replace('{', '", "', $vhtml);
$vhtml = str_replace('}', '", "', $vhtml);
$text= $text .  "\"$k\" : $vhtml ,<br><br>"; 
}
  else { 
}
}
$text = $text . "ENDDATA";
$text = str_replace(",<br><br>ENDDATA", "<br>}</ul>\"edges\" : [<ul type='none'><li>", $text);


# Then the links (edges):

foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "\"<a href=$_SERVER[PHP_SELF]?action=json&file=$matches[1]>$matches[1]</a>\"" ;
     $text = $text . "[ \"$k\" : $vlink ] , "; 
   }
   else{ 
     $vlink = "\"\" : \"<a href=$_SERVER[PHP_SELF]?action=json&file=$matches[1]>$matches[1]</a>\""; 
     $text = $text . "[ $vlink ] , "; 
   }
}


}
# $text = str_replace(", <br><th height='10' style='text-align:right'></th><td width='20'></td><td></td>}", "<br><th height='10' style='text-align:right'></th><td width='20'></td><td></td>}</ul>", $text);

$text = $text . "QEND";
$text = str_replace(', QEND', '<br>]</ul></ul>}', $text);

echo $text
?>
