<?php 

$cards = array("jh", "js", "jc", "jd", "qh", "qs", "qc", "qd", "kh");

$hands = array_chunk($cards, 4);
echo $hands 
?>