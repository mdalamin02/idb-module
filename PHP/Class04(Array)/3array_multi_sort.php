<?php
$arr = array(

    array("country"=> "Bangladesh","Capital" => "Dhaka"),
    array("country"=> "India","Capital" => "Delhi"),
    array("country"=> "USA","Capital" => "Washionton DC"),
    array("country"=> "Canada","Capital" => "Autoa")
);
    $capitals = array();

    foreach($arr as $key => $value)
    {
        $capitals[$key] = $value["country"];
    }

    array_multisort($capitals, SORT_DESC, $result);

print_r("Modified arrays are:<br>");
echo "<pre>";
print_r($result);
echo "</pre>";

 
?>