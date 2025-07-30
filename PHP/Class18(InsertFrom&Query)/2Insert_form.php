<?php

error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "course_management");

if ($mysqli->connect_errno) 
{
    echo "Failed to connect to database server:".$mysqli->connect_error;
}

$sqli = "SELECT * FROM cities ORDER BY cityname";
$result = $mysqli->query($sqli);

if (isset($_POST["submit"])) 
{
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $twitter = $_POST['twitter'];
    $web = $_POST['web'];
    $country= $_POST['country'];
    $checkbox= $_POST['hobbies'];
    $sex= $_POST['sex'];

    $errmsg ='';

    $chk = '';

    foreach ($checkbox as $chk1) 
        
    {
        $chk.=$chk1.",";
    }

    if (empty($fname) || empty($lname) || empty($uname) || empty($email)   ) 
    {
        $errmsg .= "<span style ='color:red;'> You must enter these field";
    }

    else
    {
        $sql = "INSERT INTO authors( first_name, last_name, username, email, twitter, url, city, country, hobbies, sex) VALUES ('$fname', '$lname', '$uname', '$email', '$twitter', '$web', '$city', '$country', '$chk','$sex')";
    }

    if ($mysqli->query($sql)) 
    {
        echo "<div style='background-color:darkblue; color:red;width:100%;'></div>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Registration Form</title>
    <style>
        input[type='text']
        {

            display:inline;
            background:#ffff0;

        }
    </style>
</head>
<body>
    <h2>Register as an Author </h2>
    <p>Please fill up all the following fields to register as author</p>

    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <label >First Name:</label><br>
        <input type="text" name="fname">

        <p>
            <label >Last Name:</label><br>
            <input type="text" name="lname">
        </p>

        <p>
            <label >User Name:</label><br>
            <input type="text" name="uname">
        </p>
        <p>
            <label >Enail:</label><br>
            <input type="text" name="email">
        </p>
        <p>
            <label >Web Address:</label><br>
            <input type="text" name="web">
        </p>
        
        <p>
            <label >Country:</label><br>
            <input type="text" name="country">
        </p>
        <p>
            <label >City:</label><br>
            <input type="text" name="city">
        </p>
        <p>
            <label >Select Your Hobbies:</label><br>
            <input type="checkbox" name="hobbies" value="surfing">Net Browsing
            <input type="checkbox" name="hobbies" value="reading">Reading Book
            <input type="checkbox" name="hobbies" value="blogging">Blogging
            <input type="checkbox" name="hobbies" value="movies">Watching Waz
        </p>

        <p>
            <label >Gender:</label>
            <input type="radio" name="sex" value="1" class="inline">Male
            <input type="radio" name="sex" value="2" class="inline">Female
        </p>

        <p>
            <input type="submit" value="Submit" class="inline">
            <input type="reset" value="Cancel" class="inline">

        </p>
    </form>
</body>
</html>