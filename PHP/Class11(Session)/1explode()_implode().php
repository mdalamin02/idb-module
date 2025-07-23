<?php

//implode()-Convert array to string
//explode()-Convert string to array
//array_map()-It applies a certain normal function/callback into the elements of an array.

$array = array("Jamal","Kamal","Hasan","Joney","Lablu");

echo (implode("-", $array));

echo "<br>";

$str = "1,2,3,4,5";
$arr = explode(",", $str);

foreach($arr as $i)
{
	echo $i."<br>";
}

function double($num)
{
	return $num * 2;
}

$numbers = [1,2,3,4,5,6];

$doublenumber = array_map("double", $numbers);

print_r($doublenumber);
?>

