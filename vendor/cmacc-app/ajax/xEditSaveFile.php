<?php
/**
 * Ajax save file changes
 * User: QuynhND
 */
$path = ROOT . '/Doc/';

//$redTexts = (isset($_POST['redTexts'])) ? $_POST['redTexts'] : [];
//$greenTexts = (isset($_POST['greenTexts'])) ? $_POST['greenTexts'] : [];

$normalTexts = (isset($_POST['normalTexts'])) ? $_POST['normalTexts'] : [];

if (isset($_POST['fileName']) && isset($_POST['rootFileName'])) {

    $rootFileName = $path . $_POST['rootFileName'];
    $fileName = (substr($_POST['fileName'], -3) != ".md") ? $_POST['fileName'] . ".md" : $_POST['fileName'];
    $fileName = (strpos($fileName, "/") === FALSE) ? dirname($dir) . "/" . $fileName : $fileName;
    $fileName = $path . $fileName;
    $content = "";

    if (file_exists($fileName)) {

        if (is_writeable($fileName)) {
            // WRITE EXISTING
            $keyAttr = [];
            foreach ($normalTexts as $k => $v) {
                $keyAttr[] = $k;
                $content .= "$k=$v\n\n";
            }
            $contents = file_get_contents($fileName, FILE_USE_INCLUDE_PATH);
            foreach (explode("\n\n", $contents) as $n) {
                list($oK, $oV) = array_pad(explode("=", $n, 2), 2, NULL);
                if (strlen($oK) > 0) {
                    if (!in_array($oK, $keyAttr)) {
                        $keyAttr[] = $oK;
                        $content .= "$oK=$oV\n\n";
                    }
                } elseif (strlen(trim($oV)) > 0) {
                    $content .= "$oK=$oV\n\n";
                }
            }
            $fp = fopen($fileName, "w");

            fwrite($fp, $content);
            fclose($fp);

        } else {
            printError("ERROR: File $dir is not write able.");

        }
    } else {
        // CREATE FILE
        $fp = fopen($fileName, "w") or die("Unable to open file!");
        foreach ($normalTexts as $k => $v) {
            $content .= "$k=$v\n\n";
        }
        $content .= "=[" . $_POST['rootFileName'] . "]";
        fwrite($fp, $content);
        fclose($fp);
    }
}

function printError($string) {
    print "<span style='color: red'>$string</style>";
}
