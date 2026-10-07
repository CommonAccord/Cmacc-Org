
<?php


include("header.php");


include("$lib_path/view-tabs.php");

echo "<div><table class='TFtable'>";
foreach($contents as $n) {

# split the line into key, value, and comment.
        list($k, $vc) = array_pad( explode ("=", $n, 2), 2, null);
        list($v, $c) = array_pad( explode ("///", $vc, 2), 2, null);
       
	//for remote files via http
        if(preg_match('/\[http(.+?)\]/', $v, $matches)) {
	  $vlink = "<a href=http$matches[1]>$v</a> $v2";
        }
	//for local folders (navigation) [G/.../]
	else if(preg_match('/\[(.+?)\\/]/', $v, $matches)) {
                $vlink = "<a href=?v=l&f=$matches[1]/>$v</a>";
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
        $target = (preg_match('/\[([^\]]+)\]/', (string)$v, $tm) && !preg_match('/^http/', $tm[1])) ? $tm[1] : null;
        echo "<tr id=$k>" ;
        # enabling hyperlinks from the key.  
                # If ends in a period "." then assume it is a prefix *=(e.g. key=[node]) make it "key.r00t" to render the default content of [node]. 
                # Else just use the key.
       # the key has a space in it, so we don't want to make it a hyperlink.
       if(preg_match('/\s/', $k)){
        $klink=$k ;}

        # KEY ENDINGS (the vocabulary of this view). The "target" is the first [path] in the value, relative to Doc/.
        #   "."  render the default content of this line: document view (v=d) of key + "r00t"
        #   "-"  go to the target in source view (v=s)
        #   "/"  go to the target in list view (v=l); if the target is a file, its folder is listed
        #   ":"  plain key, no link
        #   anything else: link to the key's content in document view (v=d)
        else if((substr($k, -1)==".")){
       	        $klink="<a class='expand' href=?v=d&f=$dir&k=$k" . "r00t >$k</a>" ;
        }
        else if((substr($k, -1)=="-") && $target !== null){
                $klink="<a class='expand' href=?v=s&f=$target >$k</a>" ;
        }
        else if((substr($k, -1)=="/") && $target !== null){
                $tdir = (substr($target, -1)=="/") ? $target : ((strpos($target, "/")===false) ? "" : dirname($target) . "/");
                $klink="<a class='expand' href=?v=l&f=$tdir >$k</a>" ;
        }
        else if((substr($k, -1)==":")){
       	        $klink= $k  ;
        }
        else if((substr($k, -1)=="-") || (substr($k, -1)=="/")){
                $klink= $k  ;   # no [target] in the value: nothing to link to
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
