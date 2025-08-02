<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Calculator</title>
</head>
<body>
    <h2>Factorial Calculator</h2>
    <form method="POST" action="">
        <label for="number">Enter a number:</label>
        <input type="number" name="number" min="0" placeholder="Enter a positive number" required>
        <button type="submit" name="submit">Calculate Factorial</button>
    </form>

    <?php
    if (isset($_POST['submit']) && isset($_POST['number'])) 
        {
        $number = $_POST['number'];
        
        function factorial($n) 
        {
            if ($n <= 1) 
            {
                return 1;
            }
            $result = 1;
            for ($i = 2; $i <= $n; $i++) 
            {
                $result *= $i;
            }
            return $result;
        }
        
        if ($number >= 0) 
        {
            $result = factorial($number);
            echo "<h3>Result: {$number}! = {$result}</h3>";
        } else 
        {
            echo "<p style='color: red;'>Please enter a positive number!</p>";
        }
    }
    
    ?>
</body>
</html>