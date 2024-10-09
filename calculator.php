<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP Calculator</title>
</head>
<body>
    <form method="POST" action="">
        <label for="num1">Enter num1:</label>
        <input type="text" name="num1" id="num1" required>
        <br><br>

        <label for="num2">Enter num2:</label>
        <input type="text" name="num2" id="num2" required>
        <br><br>

        <label for="operation">Choose operation:</label>
        <select name="operation" id="operation" required>
            <option value="add">Addition</option>
            <option value="subtract">Subtraction</option>
            <option value="multiply">Multiplication</option>
            <option value="divide">Division</option>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Calculate">

        <?php
        $error = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operation = $_POST["operation"];

            if (!is_numeric($num1) || !is_numeric($num2)) {
                $error = "Both inputs must be valid numbers.";
            } else {
                $num1 = floatval($num1);
                $num2 = floatval($num2);

                switch ($operation) {
                    case "add":
                        $result = $num1 + $num2;
                        echo "<br>The result of adding $num1 and $num2 is $result";
                        break;
                    case "subtract":
                        $result = $num1 - $num2;
                        echo "<br>The result of subtracting $num2 from $num1 is $result";
                        break;
                    case "multiply":
                        $result = $num1 * $num2;
                        echo "<br>The result of multiplying $num1 and $num2 is $result";
                        break;
                    case "divide":
                        if ($num2 != 0) {
                            $result = $num1 / $num2;
                            echo "<br>The result of dividing $num1 by $num2 is $result";
                        } else {
                            echo "<br>Division by zero is not allowed.";
                        }
                        break;
                    default:
                        $error = "Invalid operation selected.";
                        break;
                }
            }
        }

        if (!empty($error)) {
            echo "<br><span style='color:red;'>$error</span>";
        }
        ?>
    </form>
</body>
</html>




