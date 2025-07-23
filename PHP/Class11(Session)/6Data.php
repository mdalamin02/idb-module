<?php

$filename = "Data.json";

$data = file_get_contents($filename);

header('Content-Type:application/json; charset=utf-8');

echo $data;
?>