<?php

/*$a = 1;
$b = 2;

function sum()

{
	global $a,$b;
	
	$a = 10;
	$b = 20;
	$c = $a + $b;
	echo $c;
}

sum();*/

//$noOfCalls = 2;
function countCall()
{
	static $noOfCalls = 0;
	$noOfCalls++;
	echo "The function called $noOfCalls times<br>";
}

countCall();
countCall();
countCall();

?>