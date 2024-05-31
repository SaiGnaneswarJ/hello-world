<?php

//print the numbers from 0 to 10.

for($i = 0;$i<=10;$i++)
{
    echo $i;
}

echo "<br><br>";

//printing 1 to 10

for($a = 1;$a <= 10;$a++)
{
    if($a < 10)
    {
        echo "$a - ";
    }
    else
    {
        echo $a;
    }
}

echo "<br><br>";

//sum of the numbers

for($m = 1;$m <= 30;$m++)
{
    $sum = $sum + $m;

}
echo $sum;

echo "<br><br>";
// * printing

for($x = 1;$x <= 5 ;$x++)
{
    for($y = 1;$y <= $x;$y++)
    {
        echo "1";
    }
    echo "<br>";
}

echo "<br><br>";

echo "<br><br>";

// sorting the array 

$arr = array("guru","prakash","ramesh","adithya");
arsort($arr);
foreach($arr as $a)
{
    echo $a."<br>";

}

echo "<br><br>";

//getting the array outside the value

$a1=array("a"=>"gowtham","b"=>"Naveen","c"=>"rajesh","d"=>"krishna");
$get = array();
foreach($a1 as $key => $val)
{
     echo $key."-".$val."<br>";
     $get[] = $key;
}

print_r($get);
echo "<br><br>";

$a2 = array(25,6,8,45,7,14,12,2,8);

print_r($a2);
echo "<br>";
asort($a2);
foreach($a2 as $key)
{
     if($key <= max($a2))
     {
        echo $key."/";
     }
}


echo "<br><br>";
echo "<br><br>";
// while loops

$c = 0;
while($c<=10)
{
    $sum1 = $sum1 + $c;
    $c++;
}

echo $sum1;

echo "<br><br>";

$t = 0;

while($t<=10)
{
    $mul = 8 * $t;
    echo " 8 * $t =".$mul;
    $t++;
}

echo "<br><br>";

$count = 0;

while($count < 10)
{
    echo $count."<br>";
    if($count == 6)
    {
        break;
    }
    $count = $count + 1;
}

echo "<br><br>";

$data = 0;

while($data < 10)
{
    if($data == 5)
    {
        $data = $data +1;
        continue;
    }
    echo $data."<br>";
    $data = $data +1;
}


echo "<br><br>";

$s = 1;

do{
    $table = 9 * $s;
    echo "9 * $s = ".$table."<br>";
    $s++;
}
while($s <= 10);


























?>