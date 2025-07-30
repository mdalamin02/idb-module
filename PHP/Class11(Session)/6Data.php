<?php

$jsonFile = "5Data.json";

$converFile = file_get_contents($jsonFile);

header("Content-Type:application/json; charset=utf-8");

echo $converFile;

