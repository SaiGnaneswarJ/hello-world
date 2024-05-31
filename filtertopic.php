<?php

echo "<h3>Filter list</h3>";
echo "<br>";

foreach(filter_list() as $id => $filter)
{
   echo $filter."--".filter_id($filter)."<br>";
}

echo "<br><br>";
echo"Filter string using filter_var() function";
echo "<br>";
$str = "<h1>GOOD EVENING EVERY ONE</h1>";
$str1 = filter_var($str, FILTER_SANITIZE_STRING);
echo $str1;
echo "<br><br>";
echo "VALIDATE INTEGER";
echo "<br>";
$int = 10;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br><br>";
echo "VALIDATE INTEGER ";
echo "<br>";

$data = 5;
if (filter_var($data, FILTER_VALIDATE_INT) === 0 || !filter_var($data, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
} 
else {
    echo("Integer is not valid");
}

echo "<br><br>";
echo "VALIDATE EMAIL ";
echo "<br>";

$email = "Saignaneswar@gmail.com";
echo $email."<br>";
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("email is valid");
} 
else 
{
    echo("email is not valid"); 
}


























?>