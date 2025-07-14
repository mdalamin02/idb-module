<?php

function salesTax($price, $tax)
{
    function conversion ($dollar, $coversionRate=120)
    {
        return $dollar * $coversionRate;
    }

    $total = $price +($price*$tax);
    echo "Total price in $: $total Cost in BDT is: " . conversion($total);


}


salesTax(25, .75);

?>