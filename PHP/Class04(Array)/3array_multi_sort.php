<?php
/* 
$arr1 = array("k", "f", "e", "a", "x", "z", "w");
array_multisort($arr1);
 */

 $result = array(

                    array("Country"=>"Bangladesh", "Capital" => "Dhaka"),
                    array("Country"=>"Pakistan", "Capital" => "karachi"),
                    array("Country"=>"Afganistan", "Capital" => "Kabul"),
                    array("Country"=>"Turkey", "Capital" => "Istambul"),
                    );

$capitals = array();


foreach ($result as $key => $value){

    $capitals[$key] = $value["Country"];
}

array_multisort($capitals, SORT_ASC, $result);


echo "<pre>";
print_r($result);
echo "</pre>";
?>