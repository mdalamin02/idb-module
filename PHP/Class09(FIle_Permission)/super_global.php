<?php
//Super Global Variables (Super Global Array)

/* 
$_GET[] --> To send or retrieve data from URL 
$_POST[] --> TO submit data through form 
$_PUT[] --> For updating records/data through from submission
$_REQUEST[] --> To check the request type as $_GET[] or $_POST[]
$_SESSION[] --> To store session data (authentication purpose)
$_COKKIE[] --> To save the cokkie value in browser
$_FILES[] --> To handle file upload
$_SERVER[] --> To handle various server information
$_GLOBAL[] --> To access all global variables.
*/

echo $_SERVER["SERVER_NAME"]."<br>";
echo $_SERVER["SCRIPT_NAME"]."<br>";
echo $_SERVER["REMOTE_ADDR"]."<br>";
echo $_SERVER["PHP_SELF"]."<br>";
echo $_SERVER["HTTP_HOST"]."<br>";
echo $_SERVER["HTTP_USER_AGENT"]."<br>";
echo $_SERVER["SERVER_SIGNATURE"]."<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>