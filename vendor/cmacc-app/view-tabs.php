<?php

echo "<b><a href=" . INDEXNAME . "><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=l&" . FILENAME . "=>Docs</a>/<a href=$_SERVER[PHP_SELF]?" . VIEW . "=l&" . FILENAME . "=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b> 
<br></h4>";

echo " &emsp; Source views: ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=s&" . FILENAME . "=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=j&" . FILENAME . "=$dir>". "JSON(ish)" ."</a> ";

echo " on ";

echo "<a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) . ">GitHub</a> ";

# echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

echo " &emsp; Doc views ($keyName): ";

echo "<b><a href=" . INDEXNAME . "?" . VIEW . "=d&" . FILENAME . "=$dir&" . KEYNAME . "=$keyName>". DOC_TAB_MESSAGE ."</a></b> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=v&" . FILENAME . "=$dir&" . KEYNAME . "=$keyName>Visual</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=p&" . FILENAME . "=$dir&" . KEYNAME . "=$keyName>Print</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=edit&" . FILENAME . "=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=openedit&" . FILENAME . "=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "Technical: " ;

echo "<a href=" . INDEXNAME . "?" . VIEW . "=m&" . FILENAME . "=$dir&" . KEYNAME . "=$keyName>". "OpenParameters" ."</a> ";

echo "<a href=" . INDEXNAME . "?" . VIEW . "=x&" . FILENAME . "=$dir&" . KEYNAME . "=$keyName>Xray</a> ";

# echo "<a href=" . INDEXNAME . "?" . VIEW . "=kvs&" . FILENAME . "=$dir> KVs</a> ";


?>
