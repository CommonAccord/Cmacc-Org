<?php
error_reporting(E_ALL);
$path = ROOT . '/Doc/';
ini_set("allow_url_include", true);

$Text_Edit_Window_Size = 'cols=120 rows=30' ;

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = "landing";
}

if (isset($_REQUEST['file'])) {
    $dir = $_REQUEST['file'];
    $dir = str_replace('..', '', $dir);
} else {
    $dir = './';
}

//let each view have access to the file path and name

        $rootdir = pathinfo($dir);
        $filenameX = basename($dir);
        $lib_path = LIB_PATH;


switch ($_REQUEST['action']) {

   case 'doc':

        include('./vendor/cmacc-app/view/doc.php');
        break;

   case 'xEdit':

        include('./vendor/cmacc-app/view/xEdit.php');
        break;

   case 'xEditSaveFile':
        include('./vendor/cmacc-app/ajax/xEditSaveFile.php');
        break;

   case 'xEditUpdateFile':
        include('./vendor/cmacc-app/ajax/xEditUpdateFile.php');
        break;


   case 'showme1':

        include('./vendor/cmacc-app/view/showme1.php');
        break;

   case 'showme2':

        include('./vendor/cmacc-app/view/showme2.php');
        break;

    case 'edit':

        include('./vendor/cmacc-app/view/edit.php');
        break;


   case 'html':

        include('./vendor/cmacc-app/view/html.php');
        break;

    case 'ipld':

        if (isset($_REQUEST['submit'])) {

            $file_name = $path . $dir;

            if (file_exists($file_name)) {

                if (is_writeable($file_name)) {
                    $fp = fopen($file_name, "w");
                    $data = $_REQUEST['newcontent'];
                    $data = preg_replace('/\r\n/', "\n", $data);
                    $data = trim($data);
                    fwrite($fp, $data);
                    fclose($fp);
                } else {
                    print '<span style="color: red">ERROR: File ' . $dir . ' is not write able.</style>';
                }
            } else {
                print '<span style="color: red">ERROR: File ' . $dir . ' does not exists.</style>';
            }
        }

        $content = file_get_contents($path . $dir, FILE_USE_INCLUDE_PATH);
        $contents = explode("\n", $content);
        $rootdir = pathinfo($dir);
        $filenameX = basename($dir);

        //source.php includes the formatting for the table that displays the components of a document
        include("./vendor/cmacc-app/view/ipld.php");

        break;

case 'jaw':

        include('./vendor/cmacc-app/view/jaw.php');
        break;

    case 'list':

        include('./vendor/cmacc-app/view/list.php');
        break;


   case 'openedit':

        include('./vendor/cmacc-app/view/openedit.php');
        break;


   case 'print':

        include('./vendor/cmacc-app/view/print.php');
        break;



    case 'source':

        if (isset($_REQUEST['submit'])) {

            $file_name = $path . $dir;

            if (file_exists($file_name)) {

                if (is_writeable($file_name)) {
                    $fp = fopen($file_name, "w");
                    $data = $_REQUEST['newcontent'];
                    $data = preg_replace('/\r\n/', "\n", $data);
                    $data = trim($data);
                    fwrite($fp, $data);
                    fclose($fp);
                } else {
                    print '<span style="color: red">ERROR: File ' . $dir . ' is not write able.</style>';
                }
            } else {
                print '<span style="color: red">ERROR: File ' . $dir . ' does not exists.</style>';
            }
        }

        $content = file_get_contents($path . $dir, FILE_USE_INCLUDE_PATH);
        $contents = explode("\n", $content);

        //source.php includes the formatting for the table that displays the components of a document
        include("./vendor/cmacc-app/view/source.php");

        break;


    case 'render':

        if (isset($_REQUEST['submit'])) {
            echo "RENDERING...........<br>";
        } else {
            echo "not rending ... <br>";
        }

        if (isset($_REQUEST['file'])) {
            echo "</div></div>";
        }
        break;

   case 'visual':

        include('./vendor/cmacc-app/view/visual.php');
        break;


    default:
        include($_REQUEST['action'] . '.php');
        break;
}

