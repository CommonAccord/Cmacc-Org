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

        echo "<div id='updir'><h3 class='sc subtitle'><a href=index.php><img src='png/CmA-Square.png' height=25></a>";
        echo "<a href=" . INDEXNAME . "?" . VIEW . "=l&" . FILENAME . "=>Docs</a>/";
        echo "<a href=$_SERVER[PHP_SELF]?" . VIEW ."=l&" . FILENAME ."=".$rootdir['dirname']."/>" . $docpath."</a>/".$rootdir['filename']."</h3><br>";

echo "<center><a href=" . URLFORDOCSINREPO . substr($dir, URLFORDOCSINREPOOFFSET) .">Github</a> &emsp;</div>";
//substr($dir, URLFORDOCSINREPOOFFSET)
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
# echo "<br><a href='index.php?v=e&f=$dir" ;
# echo "list.html'>(Edit)</a></div>";
    }
 }

echo '<div class="listings">';
echo "<div id='content-list'>";
foreach($files as $f) {
        if(is_dir($path.$dir.$f)) {
                if( !( ($f == '.') || ($f == '..') || ($f == '.git')) ) {

                        echo "<br><a href=$_SERVER[PHP_SELF]?" . VIEW ."=l&" . FILENAME ."=$dir$f/ id='$f' title='$f'><img height=20 src='png/folder.png'> $f</a>";
                }
        }
        else {
                if( !( ($f == 'list.html') || ($f == 'listintro.html') || preg_match('/^\./', $f) ) ) {
                        echo "<br><a href=$_SERVER[PHP_SELF]?" . VIEW . "=s&" . FILENAME . "=$dir$f id='$f' title='$f'><img height=20 src='png/play.png'> $f</a>";
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


