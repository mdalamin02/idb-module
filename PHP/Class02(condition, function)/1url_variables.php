<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $cat = "Products";
      $subcat = "Cloths";
      $srch = "Shirts";
      $next = 10;

      echo "<a href='2url_values.php?choice=search&cat=$cat&subcat=$subcat&srch=$srch&page=$next'> Click Here</a>"
    ?>
</body>
</html>