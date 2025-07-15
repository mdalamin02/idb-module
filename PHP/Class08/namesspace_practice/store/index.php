<?php

require "src\model\Customer.php";

use store\src\model;

$customer = new model\Customer("Kalam");
echo $customer->getName();

?>