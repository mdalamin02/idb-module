<?php
$priceOfBeef = 500;

$decision = ($priceOfBeef == 300) ? "Buy 3 kg beef" : "Don't buy beef";

echo $decision."<br>";

$foo = 2;

$bar = ($foo == 1) ? "1" : (($foo == 2) ? "2" : "Other Value");

echo $bar
?>