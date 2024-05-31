<?php

function present($make)
{

  if($make == 6)
  {
    return "my data";
  }
  return $make;

}

$data = array(2,8,6,9,5);
print_r(array_map("present",$data));


echo "<br><br>";


function detail($x)
{
    if($x != 3)
    {
      return "not satisfied";
    }
    print_r($x);
}

$arr = array(1,2,3,4,5);
print_r(array_map("detail",$arr));























?>