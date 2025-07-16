<?php

abstract class CarMils
{
    protected $volume;

    public function setVolume($tankVolume)
    {
        $this->volume = $tankVolume;
    }

    abstract function setTankVolume();
}

class Honda extends CarMils
{
    public function setTankVolume()
    {
        $mils = $this->volume * 30;
        return $mils;
    }
    public function getColor()
    {
        echo "Blue";
    }
}

class CherryBenz extends CarMils
{
    public function setTankVolume()
    {
        $mils = $this->volume;
        return $mils;
    }
}


$car1 = new Honda;

$car1->setVolume(15);
echo $car1->setTankVolume();
$car1->getColor()." ";
echo "<br>";


$car2= new CherryBenz;

$car2->setVolume(23);
echo $car2->setTankVolume();
