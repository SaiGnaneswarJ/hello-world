<?php

echo "JSON ENCODE AND DECODE";
echo "<br><br>";
echo "JSON ENCODE";
echo "<br>";
$arr = array("guru","prakash","ramesh","adithya");

echo json_encode($arr);


echo "<br><br>";

$a1=array("a"=>"gowtham","b"=>"Naveen","c"=>"rajesh","d"=>"krishna");

echo json_encode($a1);

echo "<br><br>";

echo "JSON DECODE";
echo "<br>";

$j = '{"a":"gowtham","b":"Naveen","c":"rajesh","d":"krishna"}';

var_dump(json_decode($j));

echo "<br><br>";

$k = '{"a":"gowtham","b":"Naveen","c":"rajesh","d":"krishna"}';

$res = json_decode($k);

var_dump($res);
echo "<br>";
echo $res->a;
echo "<br>";
echo $res->b;

echo "<br>";
echo "<br>";

foreach($res as $key => $value)
{
    echo $key."=>".$value."<br>";
}




















?>