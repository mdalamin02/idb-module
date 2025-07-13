<?php

    class BankAccount 
    {
        private $balance;
        public function getBalance()
        {
            return this->$balance;
        }

        public function deposite($amount)
        {
            if($this->balance +=$amount)
                {
                    $this
                } 
        }

        public function isGreterThanOneYear()
        {

        }                          
    }

    class SavingAccount extends BankAccount
    {
        private $interestRate;
        public $givenDate ="2024-08-17";


    }

?>
