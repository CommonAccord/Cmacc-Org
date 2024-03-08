<?php

echo "<b><a href=i.php><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=i.php?v=l&f=>Docs</a>/<a href=$_SERVER[PHP_SELF]?v=l&f=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b> 
<br></h4>";

echo " &emsp; Source views: ";

echo "<a href=i.php?v=s&f=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=i.php?v=j&f=$dir>". "JSON(ish)" ."</a> ";

echo " on ";

echo "<a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) . ">GitHub</a> ";

# Open in VSCode

echo  "<a href='vscode://file//Users/jgh/Documents/GitHub/CommonAccord-Org/Doc/$dir'>(VSCode)</a> ";

# echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

echo " &emsp; Doc views: ";

echo "<b><a href=i.php?v=d&f=$dir&k=$keyName>". DOC_TAB_MESSAGE ."</a></b> ";

echo "(&k=$keyName): ";

echo "<a href=i.php?v=v&f=$dir&k=$keyName>Visual</a> ";

echo "<a href=i.php?v=p&f=$dir&k=$keyName>Print</a> ";

# echo "<a href=i.php?v=edit&f=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=i.php?v=openedit&f=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "Technical: " ;

echo "<a href=i.php?v=m&f=$dir&k=$keyName>". "OpenParameters" ."</a> ";

echo "<a href=i.php?v=x&f=$dir&k=$keyName>Xray</a> ";

# echo "<a href=i.php?v=kvs&f=$dir> KVs</a> ";


?>
