<?php

include("1class_person.php");

$father = new Person;

$father->name = "Mr.Al-amin";
$father->age = 34;
$father->profession = "Job Holder";

$monter = new Person;

$monter->name = "Ahlia";
$monter->age = 28;
$monter->profession = "House Wife";

$baby = new Person;

$baby->name = "Mr. Baby";

$father->shop();
$monter->cook();
echo $baby->name . "weight" . $baby->weight . "kg\n" . "<br>";
$baby->eat("Burger", 500);
$baby->eat("Chocolate", 500);
echo $baby->name . "now weight" . $baby->weight . "kg\n" . "<br>";
$father->sleep();
$monter->sleep();
$baby->sleep();
