<?php

echo "<b><a href=index.php><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=index.php?" . VIEW . "=list&file=>Docs</a>/<a href=$_SERVER[PHP_SELF]?" . VIEW . "=list&file=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b><br></h4>";


echo " &emsp; Source views: ";

echo "<a href=index.php?" . VIEW . "=source&file=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?" . VIEW . "=json&file=$dir>". "JSON(ish)" ."</a> ";

echo "Document views: ";

echo "<b><a href=index.php?" . VIEW . "=doc&file=$dir>". DOC_TAB_MESSAGE ."</a></b> ";

echo "<a href=index.php?" . VIEW . "=xray&file=$dir>Xray</a> ";

echo "<a href=index.php?" . VIEW . "=visual&file=$dir> Visual</a> ";

echo "<a href=index.php?" . VIEW . "=cicero&file=$dir> Cicero</a> ";

echo "<a href=index.php?" . VIEW . "=print&file=$dir>".PRINT_TAB_MESSAGE."</a> ";

# echo "<a href=index.php?" . VIEW . "=edit&file=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=index.php?" . VIEW . "=openedit&file=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "<a href=index.php?" . VIEW . "=missing&file=$dir>". "OpenParameters" ."</a> ";

# echo "<a href=index.php?" . VIEW . "=kvs&file=$dir> KVs</a> ";

echo "(<a href=index.php?&key=????&file=" .$dir . "&" . VIEW. "=doc>focus on a Key</a>) ";

echo "&emsp; On GitHub: ";

echo "<a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) . ">File</a> ";

echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

?>
