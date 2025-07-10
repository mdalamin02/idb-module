<?php
$a = array ("d" => "yellow", "a"=>"red", "z"=>"green", "x"=> "lemon", "b"=>"lime");


sort ($a); //normal soft
// rsort($a); //reverse sort
// ksort($a); //keyword based sort
// krsort($a); //keyword reverse sort

// asort($a); //asyncronized sort


foreach ($a as $key => $value)
{
    echo "<pre>";
    echo "$key = $value";
    echo "</pre>";
}

// echo "<pre>";
// print_r($a);
// echo "</pre>";

?>