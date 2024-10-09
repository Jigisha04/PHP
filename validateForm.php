<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>
</head>
<body>
    <h2>Student Registration Form</h2>
    <form method="POST" action="">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>
        <br><br>
        <label for="registration_number">Registration Number:</label>
        <input type="text" name="registration_number" id="registration_number" required>
        <br><br>
        <input type="submit" name="submit" value="Register">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $registration = trim($_POST["registration_number"]);
    $error = "";

    // Validation for name (only letters and white space)
    if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
        $error .= "Only letters and white space allowed in the name.<br>";
    }

    // Validation for registration number (only digits)
    if (!preg_match("/^[0-9]*$/", $registration)) {
        $error .= "Registration number should contain only digits.<br>";
    }

    if (empty($error)) {
        echo "<p>The name of the student is <strong>" . htmlspecialchars($name) . "</strong><br>";
        echo "and the registration number is <strong>" . htmlspecialchars($registration) . "</strong></p>";
    } else {
        echo "<br><span style='color:red;'>$error</span>";
    }
}
?>
</body>
</html>
<!-- create a form for shopping cart - which Calculate the total amount of the product based on the discount.
If the total price above Rs. 500 - 5% discount
If the total price above Rs. 1000 - 10% discount
If the total price above Rs. 2500 - 20% discount -->