<?php
class Customers
{
    
    public $name;
    public $age;

    private $accNumber;
    private $balance;

    protected $dept;

    public function setAccountNumber($accNumber)//setter method
    {
        $this->accNumber= $accNumber;
    }

    public function showInfo()
    {
        echo "Customer Name is:".$this->name."and age is:".$this->age."Account Number is".$this->accNumber;
    }
}

class cust1 extends Customers
{
    function setDept ($dept)
    {
        echo $this->dept = $dept;
    }
}

$p1 = new Customers;
$p1->name = "Mr. Karim<br>";
$p1->age= 45;
$p1->showInfo();

echo "<br>";

$p2= new cust1;
$p2->setAccountNumber(1001);
echo "<br>";
$p2->name= "Mr. Ahmed<br>";
$p2->age=40;
$p2->showInfo();
$p2->setDept("Savings");

?>
