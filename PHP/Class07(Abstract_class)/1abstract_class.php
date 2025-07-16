<?php

/*    abstract class Base 
    {
        abstract function printdata();

        function pr()
        {
            echo "Base Class";
        }
              
    }
    class Child extends Base
    {
        function printdata()
        {
            echo "Child class";
        }
    }

    $obj = new Child();
    $obj->printdata(); */


abstract class ParentClass
{
    function __construct()
    {
        echo "This is construct from parent" . "<br>";
    }
    abstract function parentFunc();
}

class ChildClass extends ParentClass
{
    function __construct()
    {
        parent::__construct();
        echo "This construct from childClass" . "<br>";
    }

    function parentFunc()
    {
        echo "Called Parent function from child class";
    }
}

$obj1 = new ChildClass;
$obj1->parentFunc();
