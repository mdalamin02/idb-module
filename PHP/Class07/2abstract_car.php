<?php

    abstract class Car 
    {
        
        protected $tankVolume;

        public function setTankVolume($volume)
        {
            $this->tankVolume= $volume;
        }

        abstract public function calcNumMilesonFullTank();
        
    }

    class Honda extends Car
    {
        public function calcNumMilesonFullTank()
        {
            $mils = $this->tankVolume*30;
            return $mils;
        }
    }

    class Toyota extends Car
    {
        public function calcNumMilesonFullTank()
        {
            $mils = $this->tankVolume*33;
            return $mils;
        }
         public function getColor()
    {
        return "Blue";
    }
    }

   
$toyota1 = new Toyota();
$toyota1->setTankVolume(10);
echo $toyota1->calcNumMilesonFullTank()." ";
echo $toyota1->getColor();
echo "<br>";
$honda1 = new Honda();
$honda1->setTankVolume(12);
echo $honda1->calcNumMilesonFullTank()."<br>";
?>