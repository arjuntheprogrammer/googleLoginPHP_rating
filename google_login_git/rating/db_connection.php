
<?php
// $servername = "mysql.hostinger.in";
// $username = "u806612059_arjun";
// $password = "Qwerty123!";

$servername = "localhost";
$username = "arjun";
$password = "Qwerty123!";


// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>