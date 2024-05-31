<?php


echo "<h2>IF-ELSE STATEMENT</h2>";
echo "<br><br>";
echo "<h3>IF STATEMENT</h3>";
echo "<br><br>";
$data = 5;
if($data = 5)
{
  echo "this is the data which is equals to 5";
}
echo "<br><br>";
ECHO "<h3>IF-ELSE STATEMENT</h3>";
echo "<br><br>";
$det = 10;
$get = 50;
if($det > $get)
{
     echo 'the value of date is greater than the vale of get ';
    
}
else{
     echo 'the vale of date is less than the value of get';
}
echo "<br><br>";
echo "<h3>IF-ELSEIF-ELSE</h3>";
echo "<br><br>";
$X = 25;
$Y = 50;
if($X > $Y)
{
    echo "x value is greater than y value";
}
elseif($X < $Y)
{
    echo "x value is less than than y value";
}
else{
    echo "there is no data available";

}

echo "<br><br>";
echo "<H3>SWITCH STATEMENT</H3>";
echo "<br><br>";

$key = "Gnaneswar";

switch($key)
{
    case "Naveen":
        echo "This is my name Naveen for the key value";
        break;
    case "Gnaneswar":
        echo "This is my name Gnaneswar for the key value";
        break;
    default:
        echo "There is no match for the key value";
    
}







?>