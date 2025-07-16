<?php
include "src\model\Customer.php";

use store\src\model;

$customer = new model\Customer("Alamin");
echo $customer->getName();