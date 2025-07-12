<?php

class BankAccount
{
    public $accountNumber;
    public $balance;

    public function deposite($accountNumber, $amount)
    {
        echo "For account Number: $accountNumber"."<br>";

        if($amount>0)
        {
            echo "The total amount is:".$this->balance+=$amount;
        }
    }

    public function withdraw($amount)
    {
        if($amount<=$this->balance)
        {
            echo "Withdrawn amount is:".$amount."<br>";
            echo "The remaining amount is:".$this->balance -=$amount;
            return false;
        }
        else
        {
            echo "Insufficient Balance"."<br>";
        }
    }
}
$accont1 = new BankAccount();
$accont1->balance= 4889;

$accont1->deposite(1001,1500);
echo "<br>";
$accont1->withdraw(1400);
echo "<br>";
echo "<br>";
echo "<br>";

$accont2 =new BankAccount();


?>