<?php
// Function to perform calculation
function calculate($num1, $num2, $operation)
{
    // Check for non-numeric inputs
    if (!is_numeric($num1) || !is_numeric($num2)) {
        throw new Exception("Invalid input. Please enter valid numbers.");
    }

    switch ($operation) {
        case 'add':
            return $num1 + $num2;
        case 'subtract':
            return $num1 - $num2;
        case 'multiply':
            return $num1 * $num2;
        case 'divide':
            // Handle division by zero
            if ($num2 == 0) {
                throw new Exception("Division by zero is not allowed.");
            }
            return $num1 / $num2;
        default:
            throw new Exception("Invalid operation.");
    }
}

// Check if the form has been submitted
if (isset($_POST['num1']) && isset($_POST['num2']) && isset($_POST['operation'])) {
    try {
        // Retrieve form values
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];

        // Call the calculate function
        $result = calculate($num1, $num2, $operation);

        // Display the result if no exceptions were thrown
        echo "The result of the calculation is: " . $result;
    } catch (Exception $e) {
        // Display error message
        echo "Error: " . $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>
    <form method="post" action="calculator.php">
        <label for="num1">First Number:</label>
        <input type="text" name="num1" required><br>

        <label for="num2">Second Number:</label>
        <input type="text" name="num2" required><br>

        <label for="operation">Operation:</label>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>
