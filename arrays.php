<?php

echo "<h2> FUNCTION </h2>";

function details($name){
      
    echo "These are the details present : ".$name;

}

details('Gnaneswar');
echo "<br>";
details('Ravi');

echo "<br><br>";
echo "<h2> ARRAYS </h2>";

echo "<h3> ARRAY </h3>";

$arr = array("krishna","ravi","rajesh","aravindh");

var_dump($arr);

echo "<br><br>";
echo "<h3> INDEXED ARRAYS </h3>";

$arr[4] = "Naveen";
var_dump($arr[1]);
echo "<br>";
var_dump($arr);

echo "<br><br>";
echo "<h3> ASSOCIATIVE ARRAYS </h3>";

$student = array("NAME"=>"HARISH","EMAIL"=>"HARISH@GMAIL.COM","DOB"=>"2000-10-25");
var_dump($student);
echo "<br>";
echo $student["NAME"];

echo "<br><br>";
echo "<h3> MULTIDIMENSIONAL ARRAYS </h3>";

$task = [
    ["gowtham","gowtham@gmail.com"],
    ["Naveen","naveen@gmail.com"],
    ["rajesh","rajesh@gmail.com"],
    ["krishna","krishna@gmail.com"]
];

var_dump($task);
echo "<br><br>";
echo $task[0][0].$task[0][1];
echo "<br>";
echo $task[1][0].$task[1][1];
echo "<br>";
echo $task[2][0].$task[2][1];
echo "<br>";
echo $task[3][0].$task[3][1];

?>