<?php

ini_set('display_errors',1);



echo readfile("data.txt");

echo "<br><br>";
$filename = "data.txt";
$file = fopen("data.txt","r");
//fread file
echo fread($file,filesize("data.txt"));
fclose($file);
echo "<br>";
echo "<h3>File Size</h3>";
// file size
$filesize = filesize( $filename );
echo ( "File size : $filesize bytes" );

echo "<br><br>";

// $f = fopen("newdata.txt",'w');
// fwrite($f,"Good morning to everey one");
// fclose($f);



$status=unlink('newdata.txt');    
if($status){  
echo "File deleted successfully";    
}else{  
echo "Sorry!";    
}  






?>
