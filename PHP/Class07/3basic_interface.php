<!-- Contract -----/> Method declare no implementation -->

<?php

interface webApp
{
    public function login($email, $password);
    public function register($email,$username, $password);
    public function logout();
}

class MyClass implements webApp
{
    public function login ($email, $password)
    {
        echo "Logged IN  user with "." ".$email."<br>";
    }

    public function register ($email, $username,$password)
    {
        echo "User registeration successfull with: "." ".$email." "." and username: "." ".$username."<br>";
    }

    public function logout()
    {
        echo "User log out";
    }
}
$webapp = new MyClass();
$webapp->register("alamin@gmail.com","alamin","ahmed4889");
$webapp->login("alamin@gmail.com","ahmed4889");

$webapp->logout();
?>