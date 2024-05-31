<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>
<h3>GETTING THE SESSION VARIABLES</h3>
<?php
// Echo session variables that were set on previous page
echo "username for session is " . $_SESSION["myname"] . ".<br>";

echo "username for session is " . $_SESSION["usermail"] . ".";


?>

</body>
</html>
