<?php


$data = 0;

while($data < 10)
{
    $data = $data +1;
    echo $data."<br>";

}

echo "<br><br>";


$i = 0;
do{
   echo $i ;
   $i++;
}
while($i <= 10);

echo "<br><br>";

$k = 6;
do{
    echo $k;
    $k--;
}
while($k > 0);

echo "<br><br>";

$n = 0;
$sum = 0;
do{
    $sum = $sum + $n;
    $n++;
}
while($n <= 10);
echo "the sum of 1 to 10 :".$sum;

echo "<br><br>";

$s = 0;
do{
    echo $s;
    $s = $s + 2;
}
while($s <= 10);

echo "<br><br>";
echo "<br><br>";


$even = "";
$odd = "";
$x = 0;

do{
    if($x%2==0)
    {
        $even = $even."".$x;
    }
    else
    {
        $odd = $odd."".$x;
    }
    $x++;
}
while($x <= 20);

echo "The even number : ".$even;
echo "<br><br>";
echo "The odd number :".$odd;


echo "<br><br>";
echo "<br><br>";


//sorting the array using do while loop.

$arr = array("govindh","ramya","tejesh","arun");
do{
    arsort($arr);
    print_r($arr);
    break;
}
while($arr <= max($arr));


































?>