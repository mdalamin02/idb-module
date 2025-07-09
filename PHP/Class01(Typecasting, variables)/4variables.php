2<?php

$a = "This is a string";
$b = 5;

echo $b ." ". $a; 

echo "<p>This is a paragraph</p>";

$x = "55String10value";
$y = 25;
$z = $x + $y;
echo $z;

echo "<br>";

$number = 5;
$num = 15+$number;
echo $num = 'twenty';

echo "<br>";

$total = 5;
$count = "10";
$total += $count;//Type Jugglingt
print $total."<br>";
echo gettype($total);

echo "<br>";

$dt = date("F,d,D,Y");
echo $dt;

echo "<br>";

printf("%dMobile phones cost is:$%.2f",100,50.255);

echo "<br>";

$d = array(10,20,"xyz");

echo "<pre>";
echo var_dump($total,$x,$dt,$d);
echo "</pre>";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<form>
		<label>Username:</label><br>
		<input type="text" name="uname"><br>
		<label>Password:</label><br>
		<input type="password" name="pass"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>