<?php

//Build Connection String
$mysql = new mysqli("localhost", "root", "", "course_management");

if ($mysql->connect_errno) {
    echo "Failed to connect to the server: (".$mysql->connect_errno.")".$mysql->connect_error;
}

$result = $mysql->query("SELECT * FROM students");
$row = $result->fetch_assoc();

echo ($row["name"])."<br>";
echo ($row["email"]);

?>