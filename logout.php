<?php
session_start();
unset($_SESSION["stuid"]);
echo "<center><h3>Redirecting to homepage......</h3></center>";
header("location:index.php");
?>
