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
    $dir = preg_replace('~[^\w/.,_-]~u', '_', $dir);
    $dir = str_replace('..', '', $dir);
} else {
    $dir = './';
}

//let each view have access to the file path and name

        $rootdir = pathinfo($dir);
        $filenameX = basename($dir);
        $lib_path = LIB_PATH;
        $viewName = $_REQUEST['action'] ;
        $keyName = $_REQUEST['key'] ;

switch ($_REQUEST['action']) {

    case 'list':
        include('./vendor/cmacc-app/view/list.php');
        break;
    
    case 'json':

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
        include("./vendor/cmacc-app/view/json.php");

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

    case 'missing':
        include('./vendor/cmacc-app/view/missing.php');
        break;

    case 'doc':
        include('./vendor/cmacc-app/view/doc.php');
        break;

    case 'xray':
        include('./vendor/cmacc-app/view/xray.php');
        break;

    case 'visual':
        include('./vendor/cmacc-app/view/visual.php');
        break;

    case 'cicero':
        include('./vendor/cmacc-app/view/cicero.php');
        break;
    
    case 'print':
        include('./vendor/cmacc-app/view/print.php');
        break;
    
    case 'missing':
        include('./vendor/cmacc-app/view/missing.php');
        break;
    
    case 'openedit':
            include('./vendor/cmacc-app/view/openedit.php');
            break;
        
    case 'landing':
        include($_REQUEST['action'] . '.php');
        break;
    
    default:
#        include('./vendor/cmacc-app/view/keyname.php');
        echo $_REQUEST['action']. " is not a valid action. Try again.<br>"  ;
       include('./vendor/cmacc-app/view/source.php');
        break;
}

