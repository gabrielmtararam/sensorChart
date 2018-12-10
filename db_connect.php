<?php
$servername = "mysql642.umbler.com";
$username = "mysqlplayground";
$password = "ek8*)kR4CsD";
$dbname = "vvplayground";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
