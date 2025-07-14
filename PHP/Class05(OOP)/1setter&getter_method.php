<?php

class MyClass
{
	public $name;
	private $pin;

	public function showInfo() //Getter Method
	{
		echo "Pincode is:".$this->pin."Name is:".$this->name;

	}

	public function setPin($mypin) //Setter Method
	{
		$this->pin = $mypin;
	}
}

$emp1 = new MyClass();
$emp1->name = "Mr.Rahim";
$emp1->setPin(1001);
$emp1->showInfo();

?>