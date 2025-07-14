<?php
class Customers
{
	public $name;
	public $age;

	private $acctNumber;
	private $balance;

	protected $dept;

	public function setAccountNumber($acctNumber) //Setter
	{
		$this->acctNumber = $acctNumber;
	}

	public function showInfo() //Getter
	{
		echo "Customer Name Is:".$this->name."and age is:".$this->age."Account Number Is".$this->acctNumber;
	}
}

class cus1 extends Customers
{
	function setDept($dept) //setter
	{
		echo $this->dept = $dept;
	}
}

$p1 = new Customers;
$p1->name = "Mr. Abdul Karim<br>";
$p1->age = 45;
$p1->showInfo();

echo "<br>";

$p2 = new cus1;
$p2->setAccountNumber(1001);
echo "<br>";
$p2->name = "Mr.Ahmed<br>";
$p2->age = 30;
$p2->showInfo();
$p2->setDept("savings");
?>