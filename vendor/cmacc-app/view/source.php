
<?php


include("header.php");


include("$lib_path/view-tabs.php");

echo "<div class='container'><table class='TFtable'>";
foreach($contents as $n) {
        list($k, $v) = array_pad( explode ("=", $n, 2), 2, null);
       
	//for remote files via http
        if(preg_match('/\[http(.+?)\]/', $v, $matches)) {
	  // to allow comments in the target field.
	 	  list($v1, $v2) = array_pad( explode ("///", $v, 2), 2, null);
	  //	to trim off the brackets  $v1=substr($v1, 1, -1);
	  $v = "<a href=http$matches[1]>$v1</a></td><td>$v2";
        }
	//for folders (navigation)

	else if(preg_match('/\[(.+?)\\/]/', $v, $matches)) {
                $v = "<a href=?" . VIEW . "=list&" . FILENAME . "=$matches[1]/>$v</a>";
              	}

	//for local file links "[G/...]"

        else if(preg_match('/^\[(.+?)\]/', $v, $matches)) {
          // to allow comments in the target field.
	  list($v1, $v2) = array_pad( explode ("///", $v, 2), 2, null);
# formatting the value side of the table cell. Pick one of the following:
    #conventional:
        $v = "<a href=?" . VIEW . "=s&" . FILENAME . "=$matches[1]>$v1</a></td><td>$v2";
    # in a frame:
	# $v = "<iframe src=?v=sourceonly&f=$matches[1] style='height:300px;width:1000px' title='Iframe Example'></iframe>";

        }
        else

# In the VALUE, each {parameter} is a hyperlink to the parameter's content:
        #  From GitHub Copilot:  The regex {[^}]+} matches any text that starts with { and ends with }.  The + means one or more characters.  The [^}]+ means any character other than }.  The first capture group is the text between the curly braces.
        #  But the rest is HazardJ's duct tape.

        # This gives us the {parameter} {parameter}, two times, so can build the href link.
        $v = preg_replace('{{[^}]+}', 'q1q${0}x2x${0}</a>', $v);
        # We need to be able to evaluate the content of the PHP variables, which didn't work inside the str_replace.
        $href = "{<a href=?" . VIEW . "=d&" . FILENAME . "=$dir&" . KEYNAME . "=" ;
        $v = str_replace('q1q{', $href, $v);
        $v = str_replace('x2x{', ' class=missing >' , $v ) ;
        # This is the end of HazardJ's duct tape.
 
#Now the KEY:
        echo "<tr id=$k>" ;
        # enabling hyperlinks from the key.  
                # If ends in a period "." then assume it is a prefix *=(e.g. key=[node]) make it "key.r00t" to render the default content of [node]. 
                # Else just use the key.
        # The key ends in a "." and therefore we render the default content of the target object (r00t)
        if((substr($k, -1)==".") && (!preg_match('/\s/', $k))){
       	        $klink="<a class='expand' href=?" . VIEW . "=d&" . FILENAME . "=$dir&" . KEYNAME . "=$k" . "r00t >$k</a>" ;
        }
        # The key does not end in "." so we render the key.
        # We will make each key into a hyperlink to the key's content. But if the key has a space in it, then we don't want to make it a hyperlink.
        else if(preg_match('/\s/', $k)){
       	        $klink= $k  ;
        }
        
        # The key does not have a space in it (a browser URL mishandles spaces), so we render the key with a hyperlink to the key's content.
        else {
       	 $klink="<a href=?" . VIEW . "=d&" . FILENAME . "=$dir&" . KEYNAME . "=$k class='definedterm'>$k</a>" ;
        }

       if(((strlen($k)>0) || (strlen($v)>0))) { 
#                if(isset($v)) { 

                echo "
                <td class='table-key-source' >$klink</td><td width='1px' ></td><td class='table-value-source'>$v</td>"; }
#        else { echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; }
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
