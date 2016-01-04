<?php

echo "<a href=index.php?action=list&file=><img src='" . ASSETS_PATH . "/arrowup.png' height=25></a><a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b><br></h4>";

echo "<a href=index.php?action=source&file=" .$dir.">". SOURCE_TAB_MESSAGE."</a> &emsp; ";

echo "<a href=index.php?action=edit&file=" .$dir.">".EDIT_TAB_MESSAGE."</a> &emsp; ";

echo "<a href=index.php?action=openedit&file=" .$dir.">". COMPLETE_TAB_MESSAGE."</a> &emsp; ";

echo "<b><a href=index.php?action=doc&file=" .$dir.">". DOC_TAB_MESSAGE
."</a></b> &emsp; ";

echo "<a href=index.php?action=print&file=" .$dir.">".PRINT_TAB_MESSAGE."</a> &emsp; ";

echo "<a href=" . URLFORDOCSINREPO . $dir.">GitHub</a> &emsp; ";

echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" .$dir. ">Used By</a>";

?>
