<?php


if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $name = $_POST["fname"];

    if (empty($name)) {
        echo "You must enter your name";
    } else {
        echo "Thank you $name";
    }
} else {
    echo "No value posted";
}
