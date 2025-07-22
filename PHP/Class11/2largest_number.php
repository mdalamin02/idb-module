<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find the Largest Numbern </title>
</head>
<body>
    <form action="" method="post">
        Enter Numbers:
        <input type="text" name="numbers">
        <input type="submit" value="Show Largest" name="sumit">
    </form>
</body>
</html>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    $numbers = $_POST["numbers"];
    $numArray = array_map("trim", explode(",", $numbers));
    $numArray = array_filter($numArray, "is_numeric");

    if (!empty($numArray))
    {
        $largest = $numArray[0];

        foreach ($numArray as $num) 
        {
            if ($num > $largest) {
                $largest = $num;
            }
        }
        echo "The largest number is:".$largest;
    }
    else{
        "Please enter the valid number";
    }
}

?>