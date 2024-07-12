
<?php


include("header.php");


include("$lib_path/view-tabs.php");

echo "<div><table class='TFtable'>";
foreach($contents as $n) {

# split the line into key, value, and comment.
        list($k, $vc) = array_pad( explode ("=", $n, 2), 2, null);
        list($v, $c) = array_pad( explode ("//", $vc, 2), 2, null);
       
	//for remote files via http
        if(preg_match('/\[http(.+?)\]/', $v, $matches)) {
	  $vlink = "<a href=http$matches[1]>$v</a> $v2";
        }
	//for local folders (navigation) [G/.../]
	else if(preg_match('/\[(.+?)\\/]/', $v, $matches)) {
                $vlink = "<a href=?v=list&f=$matches[1]/>$v</a>";
              	}

	//for local file links "[G/...]"
        else if(preg_match('/^\[(.+?)\]/', $v, $matches)) {
# formatting the value side of the table cell. Pick one of the following:
    #conventional:
       $vlink = "<a href=?v=s&f=$matches[1]>$v</a>";
  
        }
        else{

        # This gives us the {parameter} {parameter}, two times, so can build the href link.
        $v = preg_replace('{{[^}]+}', 'q1q${0}x2x${0}</a>', $v);
        # We need to be able to evaluate the content of the PHP variables, which didn't work inside the str_replace.
        $href = "{<a href=?v=d&f=$dir&k=" ;
        $v = str_replace('q1q{', $href, $v);
        $vlink = str_replace('x2x{', ' class=variable >' , $v ) ;
        # This is the end of HazardJ's duct tape.
        }
#Now the KEY:
        echo "<tr id=$k>" ;
        # enabling hyperlinks from the key.  
                # If ends in a period "." then assume it is a prefix *=(e.g. key=[node]) make it "key.r00t" to render the default content of [node]. 
                # Else just use the key.
       # the key has a space in it, so we don't want to make it a hyperlink.
       if(preg_match('/\s/', $k)){
        $klink=$k ;}

        # The key ends in a "." and therefore we render the default content of the target object (r00t)
        else if((substr($k, -1)==".")){
       	        $klink="<a class='expand' href=?v=d&f=$dir&k=$k" . "r00t >$k</a>" ;
        }
        # The key ends in ":" so we render the key.
        # We will make each key into a hyperlink to the key's content. But if the key has a space in it, then we don't want to make it a hyperlink.
        else if((substr($k, -1)==":")){
       	        $klink= $k  ;
        }
        
        # The key does not have a space in it (a browser URL mishandles spaces), so we render the key with a hyperlink to the key's content.
        else {
     	 $klink="<a href=?v=d&f=$dir&k=$k class='definedterm'>$k</a>" ;
        }

       if(((strlen($k)>0) || (strlen($v)>0))) { 
#                if(isset($v)) { 
echo "<td class='table-key-source' >$klink</td><td width='20px' align='center' valign='top'> = </td><td class='table-value-source'>$vlink $c</td>"; }
        echo "</tr>";

}

?>
</table>

</div>


</div>




</div></div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<span id="COMMENT: to make the page continue so that deep links can go to items low on the page"></span>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</div>
