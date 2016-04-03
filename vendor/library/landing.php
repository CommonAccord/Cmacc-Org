<head>
<meta name="google-site-verification" content="pW9kknEzvWYfcrDUhD2gffPzvVGNEPzrviRkpDQLqys" />
</head>
<body style="margin:40;padding:0">

<?php

$lib_path = LIB_PATH;

$dir=LANDING_MD;

$document = `perl $lib_path/parser.pl $path/$dir`;

$minDocLength = 1;

if (strlen($document) > $minDocLength){ 
 
  echo $document;}
 else {
   echo "Nothing to Show";


}
?>
