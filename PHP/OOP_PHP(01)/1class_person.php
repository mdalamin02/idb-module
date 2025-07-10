<?php

class Person
{
    public $name;
    public $weight;
    public $age;
    public $sex;
    public $profession;

    public function __construct()
    {
        $this->age = 7;
        $this->weight = 25;
        $this->profession = "student";
    }



    public function __destruct()
    {
        echo $this-> name."is cooking food<br>";
    }

    public function__function cook()
    {
        echo $this-> name."is cooing food<br>"
    }
    public function__function eat()
    {
        echo $this-> name."is eating".$food."with".$calorie."calorie"."<br>";
    }
    public function eat($food, $calorie)
    {
        echo $this->name."is eating".$food."with".$calorie."calorie"."<br>";
        $this->weight += ($calorie/1000);
    }

    public function sleep()
    {
        echo $this->name."is sleeping <br>";
    }
}

?>
