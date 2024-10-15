<?php
$servername = "localhost"; // Usually localhost
$username = "root"; // Your database username
$password = ""; // Your database password
$dbname = "tutbits"; // Your database name

//echo $servername;
try{
    $con = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
}
catch(PDOException $e){
    die("error conecting");
}


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

