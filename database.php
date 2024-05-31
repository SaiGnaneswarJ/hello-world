<?php

ini_set('display_errors',1);

$servername = 'localhost';
$username = 'saignaneswarj';
$password = 'Gnaneswar@2002';
$database = 'Practice';

$conn = mysqli_connect($servername,$username,$password,$database);

$res = mysqli_character_set_name($conn);

print($res);
echo "<br>";

if(!$conn)
{
    die('not connected'.mysql_error());
}
else{
    echo "connected successfully";
}

echo "<br>";

print_r(mysqli_error_list($conn));



















?>