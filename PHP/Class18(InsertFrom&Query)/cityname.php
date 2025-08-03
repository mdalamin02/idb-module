<?php
$mysqli = new mysqli("localhost", "root", "", "course_management");

if ($mysqli->connect_errno) {
    echo "Failed to connect to database server:" . $mysqli->connect_error;
}

$sqli = "SELECT * FROM cities ORDER BY cityname";
$result = $mysqli->query($sqli);
?>

<form method="POST" action="">
    <select name="city">
        <option value="">----Select City----</option>
        <?php
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . $row['cityname'] . '">' . $row['cityname'] . '</option>';
            }
        } else {
            echo '<option value="">No Cities Found</option>';
        }
        ?>
    </select>

    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>

<?php
if (isset($_POST['submit'])) {
    $selectedCity = $_POST['city'];
    if (!empty($selectedCity)) {
        echo "<p>You selected: <strong>" . $selectedCity . "</strong></p>";
    } else {
        echo "<p style='color:red;'>Please select a city!</p>";
    }
}
?>