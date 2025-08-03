<?php

$products = array("iphone"=>"8.5","Samsing Galaxy"=>"6.0","OnePlus"=>"7.8","htc"=>"6.2","Nokia"=>"5.5");

foreach($products as $key => $val)
{
	echo $key.", Rating=".$val;
	echo "<br>";
}

?>