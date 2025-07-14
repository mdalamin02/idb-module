<?php

/* $ram = "Sandisk";
$price = 1500;

function ramPrice(){
    global $ram, $price; //"global" is a keyword, used for call the global value in local scope(Function)
    echo "The cost of $ram is: $price";
}

ramPrice(); */


$numPlus=0;

function countCall()
{
    global $numPlus;
    $numPlus++;
    echo "The function called $numPlus times<br>";
}

countCall();
countCall();
countCall();
?>