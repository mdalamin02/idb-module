<?php

$n = 10;

try 
{
if ($n <= 0)
{
    throw new Exception("Number is not acceptable");
}
else
{
echo "Number is valid of that of my code editor";
}

}
catch (Exception $e)
{

    echo $e->getMessage();

};
