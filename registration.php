<!DOCTYPE html>
<html lang="en">
<head>
<title>Registration details</title>
</head>
<body>
<form method="POST" action="">
<label for="num1">Name:</label>
<input type="text" name="num1" id="num1" required>
<br><br>
<label for="num2">Registration number:</label>
<input type="text" name="num2" id="num2" required>
<br><br>
<input type="submit" name="submit" value="Add numbers">

<?php
if($_SERVER ["REQUEST_METHOD"]=="POST"){
  $name = $_POST["num1"];
  $registration = $_POST["num2"];
  echo "The sname of student is ", $name;
  echo "and the registration number is ", $registration;
}
?>
</form>
</body>



