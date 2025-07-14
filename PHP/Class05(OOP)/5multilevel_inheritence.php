<?php

class Chairman
{
	public function showChairman()
	{
		echo "I am companys Chairman<br>";
	} 
}

class MD extends Chairman
{
	public function showMd()
	{
		echo "I am companys Managing Director<br>";
	} 
}

class Worker extends MD
{
	public function showWorker()
	{
		echo "I am an Worker<br>";
	} 
}

$obj = new Worker();
$obj->showChairman();
$obj->showMd();
$obj->showWorker();
?>