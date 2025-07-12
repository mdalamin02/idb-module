<?php

class MyClass
{
    public $name;
    private $pin;

    public function showInfo( )
        {
            echo "Pincode is:".$this->pin."name is :".$this->name;
        }
   public function setPin($myPin)
   {
    $this->pin= $myPin;
   }
}

$emp1 = new MyClass();
$emp1->name= "Md Al-Amin";
echo"<br>";
$emp1->setPin(1001);
$emp1->showInfo();



?>