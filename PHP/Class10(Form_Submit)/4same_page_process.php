<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Form Process</title>
</head>
<body>
    <form method="POST" action="">

    User Name: <br>
    <input type="text" name="user" >

    Books in Collection: <br> 
    
    <select name="books[]" size="2" multiple>

    <option >Web Application</option>
    <option >Linux Networking Development</option>
    <option >XML</option>
    <option >Laravel 8</option>
    <option >MERN Stact</option>
    <option >Windows 2018 Server</option>

    </select><br>

Comment: <br>
<textarea name="comment" id=""></textarea>
<input type="submit" name="submit" value="Send">
    </form>
</body>
</html>

<?php

if ($_POST)
{
   
    print "<p> $_POST[user] </p>";
    print "<p> $_POST[comment] </p>";

     print "<ol>";
    foreach ($_POST['books'] as $book) 
    {
        
       print "<li> $book</li>"; 
    }
         print "<ol>";


}

?>