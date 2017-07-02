<body style="margin:20;padding:0">
<?php
include("header.php");

include("$lib_path/view-tabs.php");

?>


<h4>JAW source view:</h4>Reformats the key/values into the format for the Willem/Axel/Jerre ".cmacc" implementation. Replaces "." in any key name with an underscore "_".<br><br>

<div id="tab-source">

<!--table formatting for the document -->
<!--<table class="TFtable";>-->
<?php 
foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);

if(preg_match('/\[(.+?)\]/', $v, $matches)) {
 
   if(strlen($k) > 0){
     $vlink = "[<a href=$_SERVER[PHP_SELF]?action=jaw&file=$matches[1]>$matches[1]</a>]" ;//don't wrap in link for IPLD view
     $k =rtrim($k, ".");
 	  echo "\$ $k = $vlink<br><br>"; 
   }
   else{ 
     $vlink = "[<a href=$_SERVER[PHP_SELF]?action=jaw&file=$matches[1]>$matches[1]</a>]"; //don't wrap in link for IPLD view
     echo "\$ xx = $vlink<br><br>"; 
   }
}


elseif(isset($v)) { 
	  $vhtml =  htmlspecialchars(json_encode($v));
   $k = str_replace('.', '_', $k);

  $vhtml = str_replace('{', '{{', $vhtml);
  $vhtml = str_replace('}', '}}', $vhtml);
  $vhtml = str_replace('{{_', '{{_.', $vhtml);
  $vhtml = str_replace('\/', '/', $vhtml);
  $vhtml = str_replace('{{q}}', '{{_.q}}', $vhtml);

	  echo "\$ $k = $vhtml;<br><br>"; 
	}

        else { 
	  echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; 
	}
        echo "</tr>";
}


?>
</table>

</div>


</div>




</div></div>

</div>
