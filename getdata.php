<?php

ini_set('display_errors',1);

require_once ('database.php');

echo "<br><br>";


$sql = "SELECT * FROM daily ";
$result = $conn->query($sql);

if($result->num_rows > 0)
{
    while($data = $result->fetch_assoc()){
        echo 'ID :'.$data['id'].'---NAME :'.$data['name'].'---EMAIL :'.$data['email'].'---CONTACT :'.$data['contact'].'---AGE :'.$data['age'].'---DOB :'.$data['dob'].'---CHECKIN :'.$data['checkin']."<br><br>";
    }
}
else{
    echo 'data is not present';
}

?>

