<?php

function addFive($num)
{
	$num+= 5;

}

function addSix(&$num)
{
	$num+= 6;
}

$origNum = 10;

addFive($origNum);//Call by Value
echo "Original Number is $origNum<br>";


addSix($origNum);//call by Reference
echo "Original Number is $origNum<br>";

echo $origNum;

?>