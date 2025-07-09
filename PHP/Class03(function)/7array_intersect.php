<?php


$student = array (
        array(
        "name"=>"Asif",
        "id" => "120554",
        "subject" => "JAVA"
        ),
        array(
        "name"=>"Aslam",
        "id" => "120412",
        "subject" => "C#"
        ),
        array(
        "name"=>"Rahab",
        "id" => "120742",
        "subject" => "Oracle"
        )
    ) ;


    foreach ($student as $value)
    {
        foreach ($value as $key => $val)
        {
            print "$key:$val <br>";
        }
        print "<br>";
    };
    ?>