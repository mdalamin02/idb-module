<?php

interface my_print
{
    public function printData();
}

interface select
{
    public function getData();
}


interface MyInterface extends my_print, select
{
    public function addData();
}

class MyClass implements MyInterface
{
    public function printData()
    {
        echo "Called from Print data";
    }
    public function getData()
    {
        echo "Called form Get Data";
    }
    public function addData()
    {
        echo "Called from Add Data";
    }
}

class MyClass2 extends MyClass
{

}

$obj1 = new MyClass2();
$obj1->printData();
echo "<br>";
$obj1->getData();
echo "<br>";
$obj1->addData();


?>