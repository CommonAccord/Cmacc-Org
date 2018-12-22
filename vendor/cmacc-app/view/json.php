<?php
include("header.php");

include("$lib_path/view-tabs.php");

?>


<h4>JSON source view:</h4>

<?php 

echo "{<ul type='none'><li>\"data\" { <ul type='none'><li>";

foreach($contents as $n) {
  list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {

}


elseif(isset($v)) { 
$vhtml =  htmlspecialchars(json_encode($v));
$vhtml = str_replace('\/', '/', $vhtml);
echo "\"$k\" : $vhtml , <br>"; 
}

  else { 
echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; 
}
  echo "";
}

echo "}</ul>";

echo "\"edges\" : [<ul type='none'><li>";

foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "\"<a href=$_SERVER[PHP_SELF]?action=json&file=$matches[1]>$matches[1]</a>\"" ;
	  echo "[ \"$k\" : $vlink ] , <br>"; 
   }
   else{ 
     $vlink = "\"\" : \"<a href=$_SERVER[PHP_SELF]?action=json&file=$matches[1]>$matches[1]</a>\""; 
     echo "[ $vlink ] , <br>"; 
   }
}


}
echo "]</ul>}";

?>
