<?php
echo  $dir . "<br>";

$break = "<br>";

foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "[" . $matches[1] . "]" ;//don't wrap in link for IPLD view
	  echo "$k=$vlink$break"; 
   }
   else{ 
     $vlink = "=[" . $matches[1] . "]"; //don't wrap in link for IPLD view
     echo "$vlink$break"; 
   }
}


elseif(isset($v)) { 
	  $vhtml =  htmlspecialchars(json_encode($v));
	  $vhtml = str_replace('\/', '/', $vhtml);
	  $vhtml =  substr($vhtml,6,-6);
	  
	  echo "$k=$vhtml$break"; 
	}

        else { 
#	  echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; 
	}
#        echo "</tr>";
}

echo "";

?>
