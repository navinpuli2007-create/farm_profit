<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "farm_profit";

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

echo "Database Connected Successfully!";

?>