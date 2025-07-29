<?php

try 
{
    $pdo = new PDO("mysql:host=localhost;dbname=course_management", "root","");  
    $statement = $pdo->fetch(PDO::FETCH_ASSOC);
    echo ($row["name"]);
} 
catch (PDOException $e) 
{
    echo "Error establishing database connection:".$e->getMessage()."<br>";
};

?>