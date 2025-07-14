<?php

/* $a = array ("d"=>"yellow", "a"=>"red", "z"=>"green","x"=>"lemon", "b"=>"lime");

function arrayWalk($key, $value) {
    echo "This key is:<b>$key</b> and the value is <b>$value</b> <br>";
}
array_walk($a, "arrayWalk");

 */


function employees($value, $key, $p)
{
    echo "<pre>";
    echo "$key $p $value";
    echo "</pre>";
}

$emp = ["Jewel", "Arif", "Kamal", "Hasan", "Boni", "Alamin"];

array_walk($emp, "employees", "has the name");
