<?php

$n= -10;
try 
{
    if ($n <= 0) {
        throw new Exception("Number is invalid");
        
    }
    else
    {
        echo "Number is valid";
    }
} 
catch (Exception $e) 
{
    echo $e->getMessage();
}

?>