<?php

$conn= new mysqli('localhost', 'root', '', "course_management");

if ($conn->connect_errno)
{
    echo "Falied to connect to database server:".$conn->connect_error;
}

$sql = "INSERT INTO students (id, name, email, mobile_number, address, gender, date_of_birth, email_verified_at) VALUES ('', 'Jamil', 'jamil@gmial.com', '01732317079', 'jigatola', 'male', '1991-06-16',0)";


if (!$conn->query($sql)) 
{
    echo "Error inserting data";
}

else
{
    echo "Successfully inserted";
}
?>