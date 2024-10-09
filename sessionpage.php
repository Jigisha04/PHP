<?php
session_start();
$_SESSION["username"]="abc";
$_SESSION["userid"]="1";
$_SESSION["userage"]="20";
?>
<html>
<body>
  <?php
  echo "Session variable is set";
?>
<a href="ab.php">Go to second page</a>
</body>
</html>