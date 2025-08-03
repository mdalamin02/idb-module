<?php

echo md5("araman777");//32 bit encryption thats why is not safe for encrypting sensitive data;

echo "<br>";

if(is_numeric(587))
{
	echo "This is a number";
}

else
{
	echo "This is not a number";
}

echo "<br>";

echo number_format(2500.15654,1);

echo "<br>";

echo sqrt(100);

echo "<br>";

echo pi();

echo "<br>";

$password = "secret";

$hashed = password_hash($password, PASSWORD_DEFAULT);
echo $hashed;
?>