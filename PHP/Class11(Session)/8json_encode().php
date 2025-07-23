<?php

class Student
{

}

$s1 = new Student();
$s1->id = 101;
$s1->subject = "Math";

header('Content-Type: application/json; charset=utf-8');

$jsonData = json_encode($s1);

echo $jsonData;

?>