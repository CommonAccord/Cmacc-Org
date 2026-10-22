<?php
	$file = $_REQUEST['file'];
	$lib_path = LIB_PATH;
        echo shell_exec("perl $lib_path/tree-parse.pl " . escapeshellarg($file) . " " . "2>&1");
?>
