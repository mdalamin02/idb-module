<?php
$arr = array("jamal","kamal","Noman","Hasan","Ali","Moni","Rebeca");

$arr2 = array("Tanvir","Sagor");

array_splice($arr, 1,0, $arr2);

print_r($arr);
?>
