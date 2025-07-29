<?php

//Build Connection String
$mysql = new mysqli("localhost", "root", "", "course_management");

if ($mysql->connect_errno) {
    echo "Failed to connect to the server: (".$mysql->connect_errno.")".$mysql->connect_error;
}

$sql = "SELECT * FROM students";

if (!$result = $mysql->query($sql)) 
{
    echo "An unknown error occurred";
}
else
{
    echo "Successfully executed";
}
?>