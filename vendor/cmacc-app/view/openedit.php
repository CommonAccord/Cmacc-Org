<body style="margin:20;padding:0">
<?php

include("header.php");

include("$lib_path/view-tabs.php");

?>


<div id="tab-source">

<!--table formatting for the document -->

</div>

<div id="tab-edit">

<?php

# Adding ability to pass a starting Key to the rendering

if (strlen($keyName) < 2) { 
        $keyName = "r00t";
      }
      
      if (strlen($openForm) < 1) { 
        $openForm = "a";
      }

$document = `perl $lib_path/parser-openedit.pl $path/$dir $keyName $openForm`;

echo "<form v=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' cols=120 rows=30 name='newcontent' style='font-size: 16px; padding:10px;'>";


echo "//=Open parameters as of Datestamp:Timestamp (" . date("Y/m/d") . ":" . time() . "):\n\n";

echo $document;

echo "//=Prior existing parameters:\n\n";

echo file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);


echo '  </textarea><br>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
        <input type="hidden" name="f" value="'.$dir.'">
        <input type="hidden" name="v" value="source">
Note: if you are on the public site, feel free to experiment.  Your changes are temporary and will be discarded when the site next updates from the Github repo.
        </form>';


?>
</div>

</div>




</div></div>

</div>