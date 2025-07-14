<?php

class A
{
	public function showA()
	{
		echo "From A<br>";
	}
}

class B
{
	public function showB()
	{
		echo "From B<br>";
	}
}

class C extends A, B
{
	public function showC()
	{
		echo "From C <br>";
	}
}
?>