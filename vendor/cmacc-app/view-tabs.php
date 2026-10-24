<?php

echo "<b><a href=i.php><img src='" . ASSETS_PATH . "/CmA-Square.png' height=20>/</a></a></b>";

echo "<a href=i.php?v=l&f=>Docs</a>/<a href=$_SERVER[PHP_SELF]?v=l&f=$rootdir[dirname]/>$rootdir[dirname]</a>/<b>$filenameX</b> &k=$keyName 
<br></h4>" ;

echo " &emsp; Source views: ";

echo "<a href=i.php?v=s&f=$dir>". SOURCE_TAB_MESSAGE."</a> ";

echo "<a href=i.php?v=j&f=$dir>". "JSON(ish)" ."</a> ";

echo " on ";

if (URLFORDOCSINREPO) {
  echo "<a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) . ">GitHub</a> ";
}

# Open in VSCode: folder of the local checkout; CMACC_VSCODE_ROOT overrides it (empty hides the link)

$_vscodeRoot = getenv('CMACC_VSCODE_ROOT') !== false ? getenv('CMACC_VSCODE_ROOT') : '/Users/jgh/Documents/GitHub/CommonAccord-Org';
if ($_vscodeRoot) {
  echo  "<a href='vscode://file/" . $_vscodeRoot . "/Doc/$dir'>(VSCode)</a> ";
}

# echo "<a href=" . URLFORREPO . "/search?utf8=✓&q=" . $dir . ">~PageRank </a>  &emsp; ";

echo " &emsp; Doc views: ";

echo "<b><a href=i.php?v=d&f=$dir&k=$keyName>". DOC_TAB_MESSAGE ."</a></b> ";

# echo "(&k=$keyName): ";

echo "<a href=i.php?v=v&f=$dir&k=$keyName>Visual</a> ";

echo "<a href=i.php?v=p&f=$dir&k=$keyName>Print</a> ";

# echo "<a href=i.php?v=edit&f=$dir>".EDIT_TAB_MESSAGE."</a> ";

# echo "<a href=i.php?v=openedit&f=$dir>". COMPLETE_TAB_MESSAGE."</a> ";

echo "Technical: " ;

echo "<a href=i.php?v=o&f=$dir&k=$keyName>". "OpenParameters" ."</a> ";

echo "<a href=i.php?v=x&f=$dir&k=$keyName>Xray</a> ";

# Compare = GitHub code search across the configured repo; only for GitHub repos.
$_repoSlug = preg_match('~^https://github\.com/([^/]+/[^/]+?)/?$~', URLFORREPO, $_m) ? $_m[1] : '';
if ($_repoSlug) {
  $_compareFolder = basename(pathinfo($dir, PATHINFO_DIRNAME));
  $_compareUrl = "https://github.com/search?q=repo%3A" . rawurlencode($_repoSlug) . "+path%3A%22%2F" . rawurlencode($_compareFolder) . "%2F%22&type=code";
  echo "<a class='select' href='$_compareUrl'>Compare:/" . $_compareFolder . "/</a> ";
}

# echo "<a href=i.php?v=kvs&f=$dir> KVs</a> ";


?>
