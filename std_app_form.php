<?php
// Database connection
$servername = "localhost"; // Replace with your database host
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "tutbits"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture form data
$user_first_name = $_POST['user_first_name'];
$students_id = $_POST['students_id'];
$course_title = $_POST['course_title'];
$start_end_time = $_POST['start_end_time'];
$tutor_name = $_POST['tutor_name'];
$subject_improvement = $_POST['subject_improvement'];
$exam_prep = $_POST['exam_prep'];
$comments = $_POST['comments'];

// SQL query to insert data into the 'student_evaluations' table
$sql = "INSERT INTO student_evaluations (user_first_name, students_id, course_title, start_end_time, tutor_name, subject_improvement, exam_prep, comments)
VALUES ('$user_first_name', '$students_id', '$course_title', '$start_end_time', '$tutor_name', '$subject_improvement', '$exam_prep', '$comments')";

// Execute query and check if it was successful
if ($conn->query($sql) === TRUE) {
    echo "Form submitted successfully!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the connection
$conn->close();
?>
