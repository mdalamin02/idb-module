<?php

$wallet_balance = 5000;

function getBalance()
{
	global $wallet_balance;
	return $wallet_balance;
}

function deposit($amount)
{
	global $wallet_balance;

	if($amount > 0)
	{
		$wallet_balance += $amount;
		echo "Deposited: $amount | New Balance: $wallet_balance\n";
	}
	else
	{
		echo "Invalid Deposit Amount";
	}
}

function hassufficientbalance($amount)
{
	global $wallet_balance;
	return $wallet_balance > $amount;
}

function withdraw($amount)
{
	global $wallet_balance;

	if($amount > 0)
	{
		if(hassufficientbalance($amount))
		{	
			$wallet_balance -= $amount;
			echo "Withdrawn: $amount | Remaining Balance: $wallet_balance\n";
		}

		else
		{
			echo "Insufficient Balance! Available amount is: $wallet_balance";
		}
	}

	else
	{
		echo "Invalid Amount\n";
	}
}

echo "Current Balance:" .getBalance()."\n";

deposit(2000);
withdraw(3500);
withdraw(1500);
//withdraw(6000);

?>