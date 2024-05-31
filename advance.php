<?php

echo "<h2>INCLUDE STATEMENT</h2>";

include "formvalidation.php";

echo "<h2>DATE AND TIME FUNCTIONS</h2>";

echo date('y-m-d');
echo "<br>";
echo date('Y');
echo "<br>";
echo date('M');
echo "<br>";
echo date('D');
echo "<br>";
echo date('Y-M-D  h:i:sa');
echo "<br>";
echo date('H:i:sa');
echo "<br>";
$str = strtotime("05:30pm january 04 2024");
echo date('y-m-d h:i:sa',$str);
echo "<br>";
$x = strtotime("next tuesday");
echo date('y-m-d',$x);
echo "<br>";
$y = strtotime('+2 years');
echo date('Y-M-D',$y);
echo "<br>";




?>