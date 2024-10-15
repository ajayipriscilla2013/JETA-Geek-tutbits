<?php
// Include the database connection file
include 'connect.php';

if ($conn) {
    echo "Connection successful!";
} else {
    echo "Connection failed!";
}
?>
