<?php
$server = "localhost";
$username = "root";
$password = "root";

$con = mysqli_connect($server, $username, $password);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

?>
