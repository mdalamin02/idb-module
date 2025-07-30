<?php
error_reporting(0);

$mysqli = new mysqli("localhost", "root", "", "course_management");

if ($mysqli->connect_errno) {
    echo "Failed to connect to database server:" . $conn->connect_error;
}

$sqli = "SELECT * FROM cities ORDER BY cityname";
$result = $mysqli->query($sqli);

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $uname = $_POST['uname'];
    $email = $_POST['email'];
    $twitter = $_POST['twitter'];
    $web = $_POST['web'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $checkbox = $_POST['hobbies'];
    $sex = $_POST['sex'];

    $errmsg = "";

    $chk = "";

    foreach ($checkbox as $chk1) {
        $chk .= $chk1 . ",";
    }

    if (empty($fname) || empty($lname) || empty($uname) || empty($email)) {
        $errmsg .= "<span style='color:red;'>You Must Enter these Fields Values";
    } else {
        $sql = "INSERT INTO authors(first_name, last_name, username, email, twitter, url, city, country, hobbies, sex) VALUES ('$fname', '$lname', '$uname', '$email','$twitter','$web','$city','$country','$chk','$sex')";
    }

    if ($mysqli->query($sql)) {
        echo "<div style='background-color: darkblue; color: red; width: 100%; height: 50px; line-height: 50px;'>Author Registered Successfully</div>";

        header('refresh: 5');
    } else {
        echo "<div style='background-color: red; color: white; width: 100%; height: 50px; line-height: 50px;'>Failed to Register, Try Again.</div>";
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Author Registration Form</title>
    <style type="text/css">
        input[type='text'] {
            display: inline;
            background: #fffff0;
        }

        .inline {
            display: inline-block;
        }

        label {
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h2>Register as an Author</h2>
    <p>Please fill up all the following fields to register as author</p>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <label>First Name:</label><br>
        <input type="text" name="fname">
        <?php if (isset($errmsg)) echo $errmsg; ?>
        <p>
            <label>Last Name</label><br>
            <input type="text" name="lname">
            <?php if (isset($errmsg)) echo $errmsg; ?>
        </p>

        <p>
            <label>Username:</label><br>
            <input type="text" name="uname">
            <?php if (isset($errmsg)) echo $errmsg; ?>
        </p>

        <p>
            <label>Email:</label><br>
            <input type="email" name="email">
            <?php if (isset($errmsg)) echo $errmsg; ?>
        </p>

        <p>
            <label>Twitter Address:</label><br>
            <input type="text" name="twitter">
        </p>

        <p>
            <label>Web Address:</label><br>
            <input type="url" name="web">
        </p>

        <p>
            <label>Country:</label><br>
            <input type="text" name="country">
        </p>

        <p>
            <label>City:</label><br>
            <select name="city">
                <option value="">----select city----</option>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['cityname'] . '">' . $row['cityname'] . '</option>';
                    }
                } else {
                    echo '<option value="">City Not Found</option>';
                }

                ?>
            </select>
        </p>

        <p>
            <label>Select Your Hobbies</label><br>
            <input type="checkbox" name="hobbies[]" value="surfing">Net Browsing
            <input type="checkbox" name="hobbies[]" value="reading">Reading Books
            <input type="checkbox" name="hobbies[]" value="blogging">Blogging
            <input type="checkbox" name="hobbies[]" value="movies">Watch Movies
        </p>

        <p>
            <label>Gender:</label><br>
            <input type="radio" name="sex" value="1" class="inline">Male
            <input type="radio" name="sex" value="2" class="inline">Female
        </p>

        <p>
            <input type="submit" name="submit" value="Save" class="inline">
            <input type="reset" name="cancel" value="Cancel" class="inline">
        </p>
    </form>

</body>

</html>