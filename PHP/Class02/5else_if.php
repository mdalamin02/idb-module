<?php
 $beefPrice = 300;
 
 if($beefPrice < 100)
    {
        echo "Buy 3kg beef";
    }
    elseif($beefPrice < 200)
    {
        echo "Buy 3kg beef";
    }
    elseif($beefPrice == 300)
    {
        echo "Buy 1kg beef";
    }
    else
    {
        echo "Don't buy beef";
    }
?>