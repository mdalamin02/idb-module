<?php

class BankAccount
{
	public $accountNumber;
	public $balance;
	
	public function deposit($accountNumber, $amount)//Setter Method 
	{	
		echo "For account Number:$accountNumber"."<br>";

		if($amount > 0)
		{
			echo "The total amount is:".$this->balance += $amount;
			echo "<br>";
		}
	}

	public function withdraw($amount)
	{	
		if($amount <= $this->balance)
		{
			echo "Withdrawn amount is:".$amount."<br>";
			echo "The remaining amount is:".$this->balance -= $amount;
			return true;
		}

		else
		{
			echo "Insufficient Balance"."<br>";
		}
	}
}


$account = new BankAccount();
$account->balance = 100;

$account->deposit(1001,150);
$account->withdraw(200);
echo "<br>";
echo "<br>";
echo "<br>";

$account2 = new BankAccount();

$account2->balance = 500;
$account2->deposit(1002,1000);
$account2->withdraw(750);






?>