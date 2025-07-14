<?php

class MyMath
{
    public static $pi = 3.1415;

    public static function areaOfCircle($r)
    {
    	return self::$pi * $r * $r;
    }
}

echo MyMath::areaOfCircle(5);
?>