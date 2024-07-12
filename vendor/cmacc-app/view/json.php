<?php
include("header.php");

include("$lib_path/view-tabs.php");

?>


<h4>JSON source view - <a href="https://github.com/CommonAccord/common_accord/tree/dev/README.md">see technical description from Brown DISP ReadMe</a>:</h4>

<?php 

$text="{<ul type='none'><li>\"edges\" : [ <ul type='none'><li>";

# First the links (edges):

foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "\"<a href=$_SERVER[PHP_SELF]?v=j&f=$matches[1]>$matches[1]</a>\"" ;
     $text = $text . "[ \"$k\" : $vlink ] , "; 
   }
   else{ 
     $vlink = "\"\" : \"<a href=$_SERVER[PHP_SELF]?v=j&f=$matches[1]>$matches[1]</a>\""; 
     $text = $text . "[ $vlink ] , "; 
   }
}


}

$text = $text . "ENDEDGES";
$text = str_replace("ENDEDGES", "<br>]</ul>\"data\" {<ul type='none'><li>", $text);




# Then the Data k/v's.  :


foreach($contents as $n) {
  list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {

}

elseif(isset($v)) { 
$vhtml =  htmlspecialchars(json_encode($v));
$vhtml = str_replace('\/', '/', $vhtml);
$vhtml = str_replace('{', '", "<b>', $vhtml);
$vhtml = str_replace('}', '</b>", "', $vhtml);
$text= $text .  "\"$k\" : $vhtml ,<br><br>"; 
}
  else { 
}
}



$text = $text . "QEND";
$text = str_replace('QEND', '<br>}</ul></ul>}', $text);


echo $text
?>
