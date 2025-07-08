<?php

  function customFont ($font , $size = 1.5)
  {
    echo "<p style = \" font-family: $font; font-size: {$size}em;\"> Welcome Text!</p>";
  }

  customFont("Arial", 2);
  customFont("Calibri", 3);
  customFont("Times");

?>