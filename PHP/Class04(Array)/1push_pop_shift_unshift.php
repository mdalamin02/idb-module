<?php
$a = ["Job", "Class", "HomeWork", "Prayer"];

array_push($a, "ExtraWork", "Loading");
array_pop($a);
array_shift($a);
array_unshift($a);


echo "<pre>";
print_r($a) ; 
echo "</pre>";

?>