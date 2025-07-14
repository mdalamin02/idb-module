<?php

    abstract class PaymentGateway
    {
        protected $amount;

        public function __construct($amount)
        {
            $this->amount = $amount;
        }

        abstract public function processPayment();

        public function paymentSuccess()
        {
            return "Payment of {$this->amount} BDT is successfull";
        }
    }


    class BkashPayment extends PaymentGateway
    {
        public function processPayment()
        {
            return "Proceesing bKash payment of {$this->amount} BDT...";
        } 
    }
    class NagarPayment extends PaymentGateway
    {
        public function processPayment()
        {
            return "Proceesing Nagad payment of {$this->amount} BDT...";
        } 
    }
    class RocketPayment extends PaymentGateway
    {
        public function processPayment()
        {
            return "Proceesing Rocket payment of {$this->amount} BDT...";
        } 
    }



    $bkash = new BkashPayment(1000);
    echo $bkash->processPayment()."<br>";
    echo $bkash->paymentSuccess()."<br>";
?>