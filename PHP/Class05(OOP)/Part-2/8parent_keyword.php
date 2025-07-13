<?php

class Admin 
{
    public function giveTasks()
    {
        echo "Giving takes to employees";
    }
}

class Employees extends Admin{
    public function performtasks()
    {
        echo "Employees done the assgined tasks";
        parent::giveTasks();
    }
}
$rahib = new Employees();
$rahib->performtasks();
?>