<?php
$a = 1;
$b = 1;

function sum(){
    global $a, $b;
    $a = 10;
    $b =20;
    $c = $a + $b;

    echo $c;
}

sum()
?>