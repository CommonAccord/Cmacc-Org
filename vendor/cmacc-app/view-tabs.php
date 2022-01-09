<?php

echo "<b><a href=index.php><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=index.php?action=list&file=>Docs</a>/<a href=$_SERVER[PHP_SELF]?action=list&file=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b><br></h4>";


echo " &emsp; Source views: ";

echo "<a href=index.php?action=source&file=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?action=json&file=$dir>". "JSON(ish)" ."</a> ";

echo "Document views: ";

echo "<b><a href=index.php?action=doc&file=$dir>". DOC_TAB_MESSAGE ."</a></b> ";

echo "<a href=index.php?action=xray&file=$dir>Xray</a> ";

echo "<a href=index.php?action=visual&file=$dir> Visual</a> ";

echo "<a href=index.php?action=cicero&file=$dir> Cicero</a> ";

echo "<a href=index.php?action=print&file=$dir>".PRINT_TAB_MESSAGE."</a> ";

# echo "<a href=index.php?action=edit&file=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=index.php?action=openedit&file=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?action=missing&file=$dir>". "OpenParameters" ."</a> ";

# echo "<a href=index.php?action=kvs&file=$dir> KVs</a> ";

echo "(<a href=index.php?action=" . $_REQUEST['action'] . "&file=" .$dir. "&key=YourKeyHere" . ">focus on a Key</a>) ";

echo "&emsp; On GitHub: ";

echo "<a href=" . URLFORDOCSINREPO . $dir.">File</a> ";

echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

?>
