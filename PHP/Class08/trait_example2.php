<?php

    trait Subcriber
    {
         function subcriberLogin()
        {
            echo "Your are Logged as Subcriber <br>";
        }
    }

    trait Contributor
    {
         function  contributorLogin()
        {
          echo "Your are Logged as Contributor <br>";  
        }
    }

    trait  Author 
    {
         function authorLogin()
        {
            echo "Your are Logged as Author <br>";
        }
    }

    trait Administrator
    {
        function administratorLogin()
        {
            echo "Your are Logged as Administrator <br>";
        }
    }
    

    Class AllUser
    {
        use Subcriber,Contributor,Author, Administrator;

        public function run()
        {
            $this->subcriberLogin();
            $this->contributorLogin();
            $this->authorLogin();
            $this->administratorLogin();
            echo "All user are logged in!";
        }
    }
    $obj1 =new AllUser;
    $Obj1->run();
?>