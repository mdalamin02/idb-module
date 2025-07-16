<?php

trait Subscriber
{
    function SubscriberLogin()
    {
        echo "You are logged in as Subscriber <br>";
    }
}

trait Contributor
{
    function ContributorLogin()
    {
        echo "You are logged in as Contributor <br>";
    }
}

trait Author
{
    function AuthorLogin()
    {
        echo "You are logged in as Author <br>";
    }
}

trait Administrator
{
    function AdministratorLogin()
    {
        echo "You are logged in as Administrator <br>";
    }
}


class AllUser
{
    use Subscriber, Contributor, Author, Administrator;

    public function Access()
    {
        $this->SubscriberLogin();
        $this->ContributorLogin();
        $this->AuthorLogin();
        $this->AdministratorLogin();

        echo "All user logged in successfully!";
    }
}

$user = new AllUser;
$user->Access();
