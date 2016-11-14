<?php
$tContent='.';
if(empty($_REQUEST)) {
$tContent='E';
}else{
$tContent=$_REQUEST['clip'];
if(empty($tContent)) $tContent='blank';
}

$tContent = str_replace("/s" , " " , $tContent);
$tContent = str_replace("_//-" , "#" , $tContent);

$file = fopen("tt","w");
echo fwrite($file,$tContent);
fclose($file);
?>
