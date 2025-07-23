<?php

$data = '{
			"name":"jamal",
			"occupation": "Officer"
}';

$a = json_decode($data, true);
header('Content-Type: application/json; charset=utf-8');

echo "{$a["name"]} is a {$a["occupation"]}";

?>