<?php

echo "<h1>LOOPS</h1>";
echo "<br><br>";
ECHO "<H3>WHILE LOOP</H3>";
echo "<br><br>";
$key = 5;
while($key < 20)
{
    echo $key;
    $key++;

}
echo "<br><br>";
echo "USING BREAK IN WHILE LOOP";
echo "<br><br>";

$data = 3;
while($data < 10)
{
    if($data == 8) break;
    echo $data;
    $data++;
}

echo "<br><br>";
echo "<h3>DO-WHILE LOOP</h3>";
echo "<br><br>";

$i = 4;

do {
  echo $i;
  $i++;
} while ($i <= 10);


echo "<br><br>";
echo "<h3>FOR LOOP</h3>";
echo "<br><br>";

for($i=0;$i<=20;$i++)
{
    echo $i;
}


echo "<br><br>";
echo "<h3>FOREACH LOOP</h3>";
echo "<br><br>";

$arr = array("krishna","ravi","rajesh","aravindh");
foreach($arr as $x)
{
    echo $x."<br>";
}




































?>