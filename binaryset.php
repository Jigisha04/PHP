<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Binary Search</title>
</head>
<body>
    <h2>Binary Search Implementation</h2>
    <form method="post" action="">
        <label for="arr">Enter a comma-separated array:</label><br>
        <input type="text" id="arr" name="arr" required><br><br>

        <label for="tar">Enter the target number:</label><br>
        <input type="number" id="tar" name="tar" required><br><br>

        <input type="submit" value="Search">
    </form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Split and sort the input array
    $arr = explode(",", $_POST["arr"]);
    $arr = array_map('intval', $arr); // Convert array elements to integers
    sort($arr); // Sort the array in ascending order
    
    $target = intval($_POST["tar"]); // Convert target to an integer
    $low = 0;
    $high = count($arr) - 1;
    $found = false;

    // Binary search algorithm
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        if ($arr[$mid] == $target) {
            $found = true;
            break;
        } elseif ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }

    // Output the result
    if ($found) {
        echo "<p>Target $target found at index $mid in the sorted array.</p>";
    } else {
        echo "<p>Target $target not found in the array.</p>";
    }
}
?>

</body>
</html>
