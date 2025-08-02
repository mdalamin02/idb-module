<?php

$countries = array(
    "Bangladesh" => "Dhaka",
    "Pakistan" => "Islamabad", 
    "India" => "Delhi",
    "Iran" => "Tehran",
    "Bahrain" => "Manama"
);



echo "<table border='0'>";
echo "<tr><th>Country Name</th><th>Capital</th></tr>";
foreach($countries  as $country => $capital) {
    echo "<tr><td>$country</td><td>$capital</td></tr>";
}
echo "</table>";

?>