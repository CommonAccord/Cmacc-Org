<?php
	$file = $_REQUEST['file'];
	$lib_path = LIB_PATH;
        echo `perl $lib_path/tree-parse.pl $file 2&>1`;
?>
