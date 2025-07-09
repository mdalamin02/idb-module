<?php

$wallet_balance = 5000;

function getBalance()
{
    global $wallet_balance;
    return  $wallet_balance;
}

function deposite($amount)
{
    global $wallet_balance ;

    if ($amount >0)
    {
        $wallet_balance -= $amount;
        echo "Deposited: $amount | New Balance: $wallet_balance\n";
    }
    else 
    {
        echo "Invalid Deposited Amount";
    }
}

function hassuffienctbalance($amount)
{
    global $wallet_balance;
    return $wallet_balance > $amount;

}
function withdraw($amount)
{

    global $wallet_balance;

    
    if($amount>0){

    

    if(hassuffienctbalance($amount)){

        $wallet_balance -= $amount;
        echo "Withdrawn: $amount | Remaining Balance: $wallet_balance\n";   
    }
     else
    {
        echo "Insufficient Balance! | Available Amount: $wallet_balance";
    }
    else
    {
       echo "Invalid Balance!"
    }
}
   
}

echo "Available Balance: getBalance()";
getBalance(500);
?>