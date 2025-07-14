<?php
require "3SavingAccount.php";

$account = new SavingAccount();

// Set PIN for the account
$account->setPin(1234);

// Normal operations as before
$account->deposit(1000);
$account->setInterestRate(0.05);
$account->addInterest();
$account->checkPin(1212);
echo "Account Balance with Interest rate is: " . $account->getBalance() . "<br>";

$account->calcAnualFee();


echo "<br>";
// Example of PIN verification
if ($account->checkPin(1234)) {
    echo "PIN is correct!<br>";
} else {
    echo "PIN is incorrect!<br>";
}

// Wrong PIN test
echo "Testing wrong PIN: ";
if ($account->checkPin(5678)) {
    echo "PIN is correct!<br>";
} else {
    echo "PIN is incorrect!<br>";
}