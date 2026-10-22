<head>
<meta name="google-site-verification" content="pW9kknEzvWYfcrDUhD2gffPzvVGNEPzrviRkpDQLqys" />
</head>
<body style="margin:40;padding:0">

<?php

$lib_path = LIB_PATH;

$dir=LANDING_MD;

# Adding ability to pass a starting Key to the rendering

if (strlen($keyName) < 2) { 
  $keyName = "r00t";
}

$document = shell_exec("perl $lib_path/parser.pl " . escapeshellarg("$path/$dir") . " " . escapeshellarg($keyName));


if (strlen($document) > 1){ 
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
