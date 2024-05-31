<?php

echo "<h2>STRING FUNCTIONS</h2>";
echo "ADDCSLASHES FUNCTION";
echo "<br>";
$str = "welcome i'm gnaneswar\n";
echo addcslashes($str,"g");
echo "<br>";
echo addcslashes($str,"g..r");
echo "<br><br>";
echo "ADDSLASHES FUNCTION";
echo "<br>";
$data = "hello everyone 'i'm' gnaneswar";
echo addslashes($data);
echo "<br><br>";
echo "Bin2Hex Function";
echo "<br>";
echo bin2hex($str);
echo "<br><br>";
echo "CHOP FUNCTION";
echo "<br>";
echo chop($str);
echo "<br><br>";
echo "Chr FUNCTION";
echo "<br>";
echo chr(72);
echo "<br><br>";
echo "CHUNKSPLIT FUNCTION";
echo "<br>";
echo chunk_split($str,5,"-");
echo "<br><br>";
echo "convert uuencode function";
echo "<br>";
echo convert_uuencode($str);
echo "<br>";
$y = "6=V5L8V]M92!I)VT@9VYA;F5S=V%R@`` `";
echo convert_uudecode($y);
echo "<br>";
echo count_chars($str,3);
echo "<br>";
$z = crc32("Good morning");
echo "$z";
echo "<br>";
print_r(explode("/",$str));
echo "<br>";
print_r(get_html_translation_table());
echo "<br>";
echo "hex2bin function";
echo "<br>";
echo hex2bin("77656c636f6d652069276d20676e616e65737761720a");
echo "<br>";
echo htmlentities($str,ENT_QUOTES);
echo "<br>";
$arr = array("good","morning","to","all","myguests");
echo implode("-",$arr);
echo "<br>";
echo join($arr);
echo "<br>";
echo lcfirst($str);
echo "<br>";
echo ucfirst($str);
echo "<br>";
echo ucwords($str);
echo "<br>";
echo strtolower($str);
echo "<br>";
echo strtoupper($str);
echo "<br>";
$prac = "my position \n\nis trainee";
echo ltrim($prac,"my");
echo "<br>";



$array1 = array("0" => "red","1"=>"green");
$aaray2 = array("0"=>"blue", "1"=>"white");

echo $array1[0];
echo "<br><br>";
var_dump($array1);


echo "<br><br>";

foreach($array1 as $d => $e)
{
   if($e == "red")
   {
      echo "Gnaneswar";  
   }

}

echo "<br><br>";


?>


