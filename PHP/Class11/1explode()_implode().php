<?php

//implode()- Convert array to strting
//explode() - Convert string to array

$array = array("Jamal", "Hamid", "Raheba", "Hasan");

echo (implode("=", $array));
echo "<br>";

$str = "1,2,3,4,5";
$arr = explode(",", $str);

foreach ($arr as $value) {
    echo $value."<br>";
}

function double($num)
{
    return $num*2;
}
$numbers = [1,2,3,4,5,6];
$doubleNum = array_map("double",$numbers );

print_r($doubleNum);

?>