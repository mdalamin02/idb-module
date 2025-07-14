<?php

class Admin
{
	public function giveTasks()
	{
		echo "Giving tasks to employees";
	}
}

class Employees extends Admin
{
	public function performntasks()
	{
		echo "Emplyees done the assigned tasks";
		parent::giveTasks();
	}
}

$karim = new Employees();
$karim->performntasks();

?>