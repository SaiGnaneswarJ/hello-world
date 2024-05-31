<html>
<head>
    <title>DETAILS</title>
</head>
<style>
    .error {
        color:red;
    }
</style>
<body>
<?php

$nameErr = $emailErr = $contactErr = $ageErr = "";
$name = $email = $contact = $age = "";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST["name"]))
    {
        $nameErr = "Name is Required";
    }
    else{
        $name = input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
            $nameErr = "Only letters are allowed";
        }
    }

    if(empty($_POST["email"]))
    {
        $emailErr = "Email is Required";
    }
    else{
        $email = input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
          }
    }
    
    if(empty($_POST["contact"]))
    {
        $contactErr = "mobile no is Required";
    }
    else{
        $contact = input($_POST["contact"]);
        if (!preg_match("/^\d{10}$/",$contact)) {
            $contactErr = "invalid mobile no";
        }
    }

    if(empty($_POST["age"]))
    {
        $ageErr = "age is Required";
    }
    else{
        $age = input($_POST["age"]);
        if (!preg_match("/^[1-9]\d*$/",$age)) {
            $ageErr = "numeric values only";
        }
    }

}

function input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>
<h2>FORM VALIDATION</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <label>NAME</label>:
        <input type="text" name='name' placeholder = 'Name' > 
        <span class="error"><?php echo $nameErr;?></span>
        <br><br>
        <label>EMAIL</label>:
        <input type="text" name='email' placeholder = 'Email' > 
        <span class="error"><?php echo $emailErr;?></span>
        <br><br>
        <label>CONTACT</label>:
        <input type="tel" name='contact' placeholder = 'contact' > 
        <span class="error"><?php echo $contactErr;?></span>
        <br><br>
        <label>AGE</label>:
        <input type="int" name='age' placeholder = 'Age' > 
        <span class="error"><?php echo $ageErr;?></span>
        <br><br>
        <input type="submit" name = 'submit' value='submit'>
</form>
<?php

echo "<h2>DETAILS</h2>";
echo "<br>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $contact;
echo "<br>";
echo $age;

?>
</body>
</html>

