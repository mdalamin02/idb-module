<?php

include "test1.php";
include "test2.php";


$obj1 = new webpack\post1\MyClass();
$obj1->hello();

$obj2 = new webpack\post2\MyClass();
$obj2->hello();
