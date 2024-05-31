<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h3>SESSION START AND  SETTING THE SESSION VARIABLES</h3>
<?php
// Set session variables
$_SESSION["myname"] = "Gnaneswar";
$_SESSION["usermail"] = "Gnaneswar@gmail.com";


echo "Session variables are set.";


?>

</body>
</html>