<?php
error_reporting(~E_WARNING);
mysqli_report(MYSQLI_REPORT_OFF);
$mysqli = new mysqli("localhost","root", "","course_management");

if ($mysqli->connect_errno) 
{
    echo "Failed to connect to the server: (".$mysql->connect_errno.")".$mysql->connect_error;
    exit;
}

$sql = "SELECT name, email, mobile_number, address, gender FROM students";

if ($stmt = $mysqli->prepare($sql)) 
{
    $stmt->execute();
    $stmt->bind_result($name, $email, $mobile_number, $address, $gender);

    while ($stmt->fetch()) 
    {
        echo "$name, $email , $mobile_number, $address, $gender<br>";
    }
    $stmt->close();
}
else
{
    echo "Statement Error:".$mysqli->error;
}
$mysqli->close();
?>