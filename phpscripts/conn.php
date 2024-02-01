<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "web.project";


$conn = mysqli_connect($host, $user, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>