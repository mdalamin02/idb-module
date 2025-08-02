<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <form action="" method='POST'>
        <input type="number" name="number" value="" placeholder='Enter number'>
        <button type="submit" name="submit">Check</button>
    </form>
    <?php
        if (isset($_POST['submit']) && !empty($_POST['number'])) 
            {
            $number =$_POST['number'];
            
            function isPrime($num)
            {
                if ($num < 2)
                {
                    return false;
                }
                
                if ($num == 2)
                {
                    return true;
                }
                
                if ($num % 2 == 0) 
                {
                    return false;
                }
                
                for ($i = 3; $i <= sqrt($num); $i += 2) 
                {
                    if ($num % $i == 0) 
                    {
                        return false;
                    }
                }
                
                return true;
            }
            
            if (isPrime($number)) 
            {
                echo "<p style='color: green;'>$number is a prime number!</p>";
            } else
            {
                echo "<p style='color: red;'>$number is not a prime number.</p>";
            }
        }
    ?>
</body>
</html>