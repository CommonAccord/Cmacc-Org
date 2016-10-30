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

echo file_get_contents($path.$dir, FILE_USE_INCLUDE_PATH);


echo '  </textarea><br>
        <input class="btn btn-info" type="submit" name="submit" value="Save">
        <input type="hidden" name="file" value="'.$dir.'">
        <input type="hidden" name="action" value="source">
        </form>';

?>
</div>

</div>




</div></div>

</div>
