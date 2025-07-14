<?php

$cards = array("jh","js","jd","jc","qh","qs","qd","qc","kh","ks","kd","kc","ah","as","ad");

$hands = array_chunk($cards, 4);

echo "<pre>";
print_r($hands);
echo "</pre>";

?>