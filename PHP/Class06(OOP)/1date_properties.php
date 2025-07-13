<?php

// date(format, timestamp) --> y-m-d, H:i:s



echo date("Y-m-d");
echo "<br>";

echo date("d/m/Y");
echo "<br>";

echo date("l, F j,Y");
echo "<br>";

echo date("h:i:s a");
echo "<br>";

echo date("H:i:s");
echo "<br>";

$day = date("l", strtotime("2025-07-13"));
echo "July 12, 2025 falls on: $day";
echo "<br>";

echo "Year:".date("Y")."<br>";

echo "Month:".date("F")."<br>";

echo "Day:".date("d")."<br>";

echo "<br>";


$future_date= strtotime("+7 days");
echo "Date after 7 days:".date("Y-m-d", $future_date);

echo "<br>";

echo "Current Timestamp:".time()."<br>";
echo "Convert Date:".date("Y-m-d h:i:s", 1752401339);
echo "<br>";

$date = new DateTime();
$date-> modify("+2 Years");
echo "Next Month:".$date->format("Y-m-d"); 
?>

