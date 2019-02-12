<?php
/*require('./Code/autoload.php'); */
ini_set("allow_url_include", true);
include("header.php");

?>

<div class="row " >
<div class="container">
<div class = "col-lg-12"  >

<?php

if(! ($dir == './')) {
        $rootdir = pathinfo($dir);
         
       $docpath = $rootdir['dirname'];
       if ($docpath == "."){
               $docpath = "";
       }

        echo "<div id='updir'><h3 class='sc subtitle'><a href=index.php><img src='" . ASSETS_PATH . "/CmA-Square.png' height=25></a>";
        echo "<a href=index.php?action=list&file=>Docs</a>/";
        echo "<a href=$_SERVER[PHP_SELF]?action=list&file=".$rootdir['dirname']."/>" . $docpath."</a>/".$rootdir['filename']."</h3><br>";

echo "<center><a href=" . URLFORDOCSINREPO . $dir.">Github</a> &emsp;</div>";

} 

$files = scandir($path.$dir);
# playing whackamole with bot that overwrites "list.html".
if (file_exists($path.$dir . 'listintro.html'))
 {
  echo "<div>"; 
  include $path.$dir . 'listintro.html';
 }  
 else
 {

if(file_exists($path.$dir . 'list.html')) {
  echo "<div>"; 
   include $path.$dir . 'list.html';
# removing the edit button, because a bot is hitting /G/list.html
# echo "<br><a href='index.php?action=edit&file=$dir" ;
# echo "list.html'>(Edit)</a></div>";
    }
 }

echo '<div class="listings">';
echo "<div id='content-list'>";
foreach($files as $f) {
        if(is_dir($path.$dir.$f)) {
                if( !( ($f == '.') || ($f == '..') || ($f == '.git')) ) {

                        echo "<br><a href=$_SERVER[PHP_SELF]?action=list&file=$dir$f/ id='$f' title='$f'><img height=20 src='" . ASSETS_PATH . "/folder.png'> $f</a>";
                }
        }
        else {
                if( !( ($f == 'list.html') || ($f == 'listintro.html') || ($f == 'README.md') || preg_match('/^\./', $f) ) ) {
                        echo "<br><a href=$_SERVER[PHP_SELF]?action=source&file=$dir$f id='$f' title='$f'><img height=20 src='" . ASSETS_PATH . "/play.png'> $f</a>";
                }
        }
}
echo "</div></div>";

if(file_exists($path.$dir . 'README.md')) {

echo "<div>";

$readme= file_get_contents($path.$dir . 'README.md');

$readme = str_replace(array("\n\r\n\r", "\n\n", "\r\r"), '<br>', $readme);

echo "<table><tr><td valign='top'><b>README.md:</b></td><td> &emsp; </td><td>$readme </td></tr></table></div>";

}

?>


