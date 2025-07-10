<?php

function employees ($value , $key, $p)
{
    echo "<pre>";
    echo "$key $p $value";
    echo "</pre>";
}

$emp = ["Jweal", "Arfi", "Kamal", "Hasan", "Boni", "Kader", "Jalal"];

array_walk($emp, "employees", "has the name");

?>