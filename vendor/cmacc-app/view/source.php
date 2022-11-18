
<?php


include("header.php");


include("$lib_path/view-tabs.php");

echo "<div class='container'>___<hr><table class='TFtable';>";
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
                $v = "<a href=?action=list&file=$matches[1]/>$v</a>";
              	}

	//for local file links "[G/...]"

        else if(preg_match('/\[(.+?)\]/', $v, $matches)) {
          // to allow comments in the target field.
	  list($v1, $v2) = array_pad( explode ("///", $v, 2), 2, null);

	  $v = "<a href=?action=source&file=$matches[1]>$v1</a></td><td>$v2";
        }
        else

#  From GitHub Copilot:  The regex {[^}]+} matches any text that starts with { and ends with }.  The + means one or more characters.  The [^}]+ means any character other than }.  The first capture group is the text between the curly braces.
#  But the rest is HazardJ's duct tape.
# This makes each {parameter} have a hyperlink to the parameter's content.

# This gives us the {parameter} {parameter}, two times, so we can build the href link.
$v = preg_replace('{{[^}]+}', 'q1q${0}x2x${0}</a>', $v);
# We need to be able to evaluate the content of the PHP variables, which didn't work inside the str_replace.
 $href = "{<a href=?action=doc&file=$dir&key=" ;
        $v = str_replace('q1q{', $href, $v);
        $v = str_replace('x2x{', ' class=expand >' , $v ) ;
    
        echo "<tr id=$k>" ;
        # enabling hyperlinks from the key.  If "foo." then make it "foo.Model.Rool", else just use the key.
        # The key ends in a "." and therefore we render the default content of the target object (Model.Root)
        if((substr($k, -1)==".")){
       	        $klink="<a href=?action=doc&file=$dir&key=$k" . "Model.Root >$k</a>" ;
        }
        # The key does not end in "." so we render the key.
       else {        
        $klink="<a href=?action=doc&file=$dir&key=$k class='definedterm'>$k</a>" ;
       }
        if(isset($v)) { 
                echo "<th height='10' width='300' style='text-align:right'>$klink</th><td width='20'></td><td>$v</td>"; }
        else { echo "<th height='10' style='text-align:right'></th><td width='20'></td><td>$k</td>"; }
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
