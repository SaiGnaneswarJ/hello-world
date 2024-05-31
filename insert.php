<?php

ini_set('display_errors',1);
require_once ('database.php');

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

     $name = $_POST['name'];
     $email = $_POST['email'];
     $contact = $_POST['contact'];
     $age = $_POST['age'];
     $dob = $_POST['dob'];

     $check = "SELECT * FROM `daily` where `email` = '$email'";
     $result = $conn->query($check);

     if($result->num_rows > 0)
     {
        echo 'Email already exists.....enter the correct email';
        echo "<br><br>";
        echo '<a href="form.php">
        <button>BACK</button>
        </a>';
     }

     else{
        $sql = "INSERT INTO `daily`(`name`,`email`, `contact`,`age`,`dob`) VALUES ('$name','$email','$contact','$age','$dob')";

        if($conn->query($sql) === TRUE)
        {
            echo 'record entered successfully';
            echo "<br><br>";
            echo '<a href="getdata.php">
                    <button>VIEW DATA</button>
                 </a>';
        }
        else{
            echo " record not entered";
        }
     }
}

?>