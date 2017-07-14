<?php
/**
 * Ajax update file changes
 * User: QuynhND
 */
$path = ROOT . '/Doc/';


if (isset($_POST['fileName']) && isset($_POST['data'])) {

    $data = $_POST['data'];
    $fileName = (substr($_POST['fileName'], -3) != ".md") ? $_POST['fileName'] . ".md" : $_POST['fileName'];
    $fileName = (strpos($fileName, "/") === FALSE) ? dirname($dir) . "/" . $fileName : $fileName;
    $fileName = $path . $fileName;
    $content = "";

    if (file_exists($fileName) && is_writeable($fileName)) {
        $data .= "\n\n" . file_get_contents($fileName, FILE_USE_INCLUDE_PATH);
        $fp = fopen($fileName, "w");

        fwrite($fp, $data);
        fclose($fp);
        echo "success";
    } else {
        printError("ERROR: File $dir is not write able.");

    }

}

function printError($string) {
    print "<span style='color: red'>$string</style>";
}
