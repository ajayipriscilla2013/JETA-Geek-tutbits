<?php
include_once('connect.php');

// Check if form data is submitted via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data and sanitize
    $name = $_POST['name'] ?? '';
    $email = $_POST['email'] ?? '';
    $phone_number = $_POST['phone_number'] ?? '';
    $subject = $_POST['subject'] ?? '';
    $message = $_POST['message'] ?? '';

    // Check for duplicate entries (optional)
    $check_stmt = $con->prepare("
        SELECT COUNT(*) FROM contact_messages 
        WHERE email = ? AND message = ?
    ");
    $check_stmt->execute([$email, $message]);
    $exists = $check_stmt->fetchColumn();

    if ($exists) {
        echo "<script>
                alert('Data already exists');
                window.location.href = 'contact.php';
              </script>";
    } else {
        // Insert data into the database
        $insert_stmt = $con->prepare("
            INSERT INTO contact_messages (name, email, phone_number, subject, message)
            VALUES (?, ?, ?, ?, ?)
        ");

        // Execute the insert statement
        $insert_success = $insert_stmt->execute([$name, $email, $phone_number, $subject, $message]);

        if ($insert_success) {
            echo "<script>
                    alert('Message sent successfully! Our support team will contact you shortly');
                    window.location.href = 'https://tutbits.net/';
                  </script>";
        } else {
            echo "Failed to send the message.";
        }
    }
}
?>
