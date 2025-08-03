<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Same page form Data</title>
</head>

<body>

    <form action="" method="post">

        User Name: <br>
        <input type="text" name="fname" value="Enter"><br>


        Books in Collection: <br>
        <select name="books[]" size="5" multiple>
            <option>Web Application Development</option>
            <option>Linux Networking Development</option>
            <option>XML</option>
            <option>Laravel 8</option>
            <option>MERN Stack</option>
            <option>CCN</option>
        </select><br>

        Comment: <br>
        <textarea name="comment" cols="8" rows="6"></textarea>
        <input type="submit" name="submit" value="Send">
    </form>

</body>

</html>


<?php

if ($_POST) {

    print "<p> Welcome: <b> $_POST[fname]</b> </p>";
    print "Here is you comment: <i> $_POST[comment] </i>";

    print "<ol>";

    foreach ($_POST["books"] as $book) {
        print "<li> $book </li>";
    }
    print "</ol>";
}

