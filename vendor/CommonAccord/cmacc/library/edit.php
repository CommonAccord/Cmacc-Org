<body style="margin:20;padding:0">

<?php

ini_set("allow_url_include", true);
#include("header.php");


/*require('./vendor/autoload.php'); */
ini_set("allow_url_include", true);

$lib_path = LIB_PATH;

include("$lib_path/view-tabs.php");

//This displays the path, current file name, and provides the edit and show options //


?>
</div>



<div id="tab-source">

<!--table formatting for the document -->

</div>

<div id="tab-edit">

<?php
echo "<form action=$_SERVER[PHP_SELF] method='post'>
        <textarea id='textedit' ". TEXT_EDIT_WINDOW_SIZE." name='newcontent' style='".TEXT_EDIT_AREA_STYLE."'>";

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
