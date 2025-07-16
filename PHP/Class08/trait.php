<?php

/* trait Message
{

    abstract public function holdingNumber($nmb);

    public function callFromTrait()
    {
        echo "This is a parent call message";
    }
}


class Child
{
    use Message;

    public function holdingNumber($nmb)
    {
        echo "This is a child call with:" . $nmb . "<br>";
    }
}

$obj = new Child;
$obj->holdingNumber("Parent Call");
$obj->callFromTrait(); */

trait Logger
{
    public function  log($message)
    {
        echo "[Log]:" . $message . "<br>";
    }
}

trait Timestamp
{
    public function getTimeStamp()
    {
        return Date("Y-m-d h:i:s");
    }
}

class User
{
    use Logger, Timestamp;
    public function message()
    {
        $this->log("User created at:" . $this->getTimeStamp());
    }
}

$obj1 = new User;
$obj1->message();
