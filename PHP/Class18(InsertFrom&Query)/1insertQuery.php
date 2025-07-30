<?php

$conn = new mysqli("localhost", "root", "", "course_management");

if ($conn->connect_errno) 
{
    echo "Failed to connect to database server:".$conn->connect_error;
}

$sql = "INSERT INTO students(id, name, email,mobile_number, address, gender, date_of_birth, email_verified_at) VALUES ('', 'Jamal', 'jamal@gmail.com', '01212121212', 'Jigatola', 'male', '11997-01-10')";

if (!$conn->query($sql)) 
{
    echo "Error insterting data";
}
else {
    echo "Successfully inserted";

}