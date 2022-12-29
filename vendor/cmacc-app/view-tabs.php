<?php

echo "<b><a href=" . INDEXNAME . "><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=list&" . FILENAME . "=>Docs</a>/<a href=$_SERVER[PHP_SELF]?" . VIEW . "=list&" . FILENAME . "=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b> &nbsp; &nbsp; &nbsp; &nbsp; Key: $keyName
<br></h4>";

echo " &emsp; Source views: ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=source&" . FILENAME . "=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=json&" . FILENAME . "=$dir>". "JSON(ish)" ."</a> ";

echo "Document views: ";

echo "<b><a href=" . INDEXNAME . "?" . VIEW . "=doc&" . FILENAME . "=$dir>". DOC_TAB_MESSAGE ."</a></b> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=xray&" . FILENAME . "=$dir>Xray</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=visual&" . FILENAME . "=$dir> Visual</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=cicero&" . FILENAME . "=$dir> Cicero</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=print&" . FILENAME . "=$dir>".PRINT_TAB_MESSAGE."</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=edit&" . FILENAME . "=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=openedit&" . FILENAME . "=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=missing&" . FILENAME . "=$dir>". "OpenParameters" ."</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=kvs&" . FILENAME . "=$dir> KVs</a> ";

echo "(<a href=" . INDEXNAME . "?" . VIEW. "=doc&" . FILENAME . "=" .$dir .  "&" . KEYNAME . "=????>focus on a Key</a>) ";

echo "&emsp; On GitHub: ";

echo "<a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) . ">File</a> ";

echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

?>
