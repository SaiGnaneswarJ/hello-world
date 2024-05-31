<?php

$names=array("good"=>"comp","bad"=>"not");
print_r(array_change_key_case($names,CASE_UPPER));

echo "<br><br>";

$arr = array("good","morning","to","all","myguests");
print_r(array_chunk($arr,1));

echo "<br><br>";

$task = [
    ["name" => "gowtham","email"=> "gowtham@gmail.com"],
    ["name" => "Naveen","email"=> "naveen@gmail.com"],
    ["name" => "rajesh","email"=> "rajesh@gmail.com"],
    ["name" => "krishna","email"=> "krishna@gmail.com"]
];

$email = array_column($task,'email');
print_r($email);

echo "<br><br>";

$name = array("gowtham","Naveen");
$mobile = array("8959874857","9874568989");
print_r(array_combine($name,$mobile));

echo "<br><br>";

print_r(array_count_values($arr));

echo "<br><br>";

$a1=array("a"=>"gowtham","b"=>"Naveen","c"=>"rajesh","d"=>"krishna");
$a2=array("m"=>"gowtham","b"=>"Naveen","c"=>"rajesh");

print_r(array_diff($a1,$a2));

echo "<br><br>";

print_r(array_diff_assoc($a1,$a2));

echo "<br><br>";

print_r(array_diff_key($a1,$a2));

echo "<br><br>";


function myfunction($a,$b)
{
if ($a===$b)
  {
  return 0;
  }
  return ($a>$b)?1:-1;
}

print_r(array_diff_uassoc($a1,$a2,"myfunction"));

echo "<br><br>";


print_r(array_fill(4,1,"harsha"));
echo "<br>";
print_r($a1);

echo "<br><br>";

$keys = array("1","2","3");
$a = array_fill_keys($keys,"Gnaneswar");
print_r($a);

echo "<br><br>";
$dom = array(2,5,4,7,8,9);
print_r(array_filter($dom));

echo "<br><br>";
print_r(array_flip($a1));

echo "<br><br>";
print_r(array_intersect($a1,$a2));

echo "<br><br>";
print_r(array_intersect_assoc($a1,$a2));

echo "<br><br>";

$detail = array("naveen" => "25");

if(array_key_exists("naveen",$detail))
{
  echo "key value is present";
}
else{
  echo "null";
}


echo "<br><br>";

print_r(array_keys($detail));
echo "<br><br>";

function present($sum)
{

  if($sum == 3)
  {
    return "present";
  }
  return $sum;

}

$x = array(1,2,3,4);
print_r(array_map("present",$x));

echo "<br><br>";

print_r(array_merge($a1,$a2));

echo "<br><br>";

print_r(array_merge_recursive($a1,$a2));

echo "<br><br>";

$i = array("somu","anjali","barath");
$i1 = array(5,1,5);

array_multisort($i);
array_multisort($i1);
print_r($i);
echo "<br>";
print_r($i1);


echo "<br><br>";

print_r(array_pad($i,4,"kumar"));

echo "<br><br>";
array_pop($i);
print_r($i);


echo "<br><br>";
echo(array_product($i1));

echo "<br><br>";

array_push($i,"red","blue");
print_r($i);

echo "<br><br>";

print_r(array_rand($i1));


echo "<br><br>";

function reduce($X,$Y)
{
    return $X."-".$Y;
}
print_r(array_reduce($i,"reduce"));

echo "<br><br>";

print_r(array_replace($i,$i1));

echo "<br><br>";

print_r(array_replace_recursive($i1,$i));

echo "<br><br>";

print_r(array_reverse($i));

















?>