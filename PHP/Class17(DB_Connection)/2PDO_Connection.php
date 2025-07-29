<?php

try 
{
    $pdo = new PDO("mysql:host=localhost;dbname=course_management", "root","");  
} 
catch (PDOException $e) 
{
    echo "Error establishing database connection:".$e->getMessage()."<br>";
};


$stmt = $pdo->prepare("SELECT * FROM students");
$stmt->execute();
echo "Number of rows in this table are:".$stmt->rowCount();

?>