<?php

echo "<h1>STRINGS</h1>";

echo "hello world";

echo "<br><br>";
echo "STRING LENGTH";
echo "<br><br>";

$str = strlen('GOOD MORNING');
ECHO $str;

echo "<br><br>";
ECHO "STRING WORD COUNT";
echo "<br><br>";
$data = ' welcome to the page';
echo str_word_count($data);

echo "<br><br>";
ECHO "STRING POSITION";
echo "<br><br>";
echo strpos($data,'the');
echo "<br><br>";
ECHO "STRING TO UPPER";
echo "<br><br>";

echo strtoupper($data);
echo "<br><br>";
ECHO "STRING TO LOWER";
echo "<br><br>";
echo strtolower($data);
echo "<br><br>";
ECHO "STRING REPLACE";

echo "<br><br>";

echo str_replace('page','store',$data);
echo "<br><br>";

ECHO "STRING REVERSE";
echo "<br><br>";
echo strrev($data);
echo "<br><br>";
ECHO "STRING TRIM";
echo "<br><br>";

echo trim($data);
echo "<br><br>";
echo ltrim($data);
echo "<br><br>";
ECHO "STRING SLICING";
echo "<br><br>";
echo substr($data,8,7);
echo "<br><br>";

ECHO "STRING CONCATINATION";

echo "<br><br>";

$X = 'HAPPY';
$Y = 'NEW YEAR';

ECHO $X.$Y;
























?>