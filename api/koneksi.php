<?php
$servername = "localhost";
$username = "u151422786_casu";
$password = "Kuning77";
$dbname = "u151422786_casu";

// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "maktam";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>