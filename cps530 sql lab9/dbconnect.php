<?php
$host = "localhost";
$database = "psztwier";
$user = "psztwier";
$password = "acPypett";

$connect = mysqli_connect($host, $user, $password, $database) 
or die(mysqli_error());
echo "<div>Connected to MySQL Database <b>$database</b></div>";






?>
