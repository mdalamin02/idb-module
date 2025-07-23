<?php
date_default_timezone_set("Asia/Dhaka");
session_start();
$_SESSION['username'] = "kamal";

printf("Your username is %s.", $_SESSION['username']);

unset($_SESSION['username']);

printf("Your username is %s.", $_SESSION['username']);

echo "<br>";

echo "your session identification number is:" .session_id();

?>

<?php
echo "<br>";

$_SESSION['mysession'] = "araman";

$_SESSION['loggedon'] = date('Y-m-d h:i:s');

$sessioninc = session_encode();

echo $sessioninc;
?>