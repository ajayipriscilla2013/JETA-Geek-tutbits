<?php
// Include the database connection file
include_once('connect.php');

if (isset($_POST)) {
    // Check if all required fields are filled
    if (!empty($_POST['user_first_name']) && !empty($_POST['tutor_id']) && !empty($_POST['students_name']) && 
        !empty($_POST['students_id']) && !empty($_POST['students_course_title']) && !empty($_POST['students_course_code']) && 
        !empty($_POST['date_of_session']) && !empty($_POST['start_time']) && isset($_POST['end_time']) && 
        !empty($_POST['session_type']) && !empty($_POST['location_platform']) && !empty($_POST['topics_covered']) && 
        !empty($_POST['challenges_faced']) && !empty($_POST['additional_notes']) && !empty($_POST['date_of_next_session']) && 
        !empty($_POST['topics_to_be_covered_next']) && !empty($_POST['students_view']) && !empty($_POST['students_feedback'])) {

        //Prepare the SQL statement to check for existing email address
        //  $strsql = "SELECT * FROM tutorship_log_form WHERE email_address = :email";
        //  $stmt = $con->prepare($strsql);
        // $stmt->bindParam(':email', $_POST['tutor_email']);
        //  $stmt->execute();

        // if ($stmt->rowCount() == 0) {
            // Insert data into tutorship log form
            $strsql = INSERT INTO `tutorship_log_form` (`user_first_name`, `tutor_id`, `students_name`, `students_id`,
             `students_course_title`, `students_course_code`, `date_of_session`, `start_time`, `end_time`, `session_type`, 
             `location_platform`, `topics_covered`, `challenges_faced`, `additional_notes`, `date_of_next_session`, 
             `topics_to_be_covered_next`,`students_view`, `students_feedback` ) 
                VALUES (:user_first_name, :tutor_id, :students_name, :students_id, :students_course_title, :students_course_code, :date_of_session, :start_time,
                 :end_time,  :session_type, :, :location_platform, :topics_covered, :challenges_faced, :additional_notes, :date_of_next_session, 
                 :topics_to_be_covered_next, :students_view, :students_feedback )";

           
$stmt = $con->prepare($strsql);

// Bind all parameters to prevent SQL injection
$stmt->bindParam(':user_first_name', $_POST['user_first_name']);
$stmt->bindParam(':tutor_id', $_POST['tutor_id']);
$stmt->bindParam(':students_name', $_POST['students_name']);
$stmt->bindParam(':students_id', $_POST['students_id']);
$stmt->bindParam(':students_course_title', $_POST['students_course_title']);
$stmt->bindParam(':students_course_code', $_POST['students_course_code']);
$stmt->bindParam(':date_of_session', $_POST['date_of_session']);
$stmt->bindParam(':start_time', $_POST['start_time']);
$stmt->bindParam(':end_time', $_POST['end_time']);
$stmt->bindParam(':session_type', $_POST['session_type']);
$stmt->bindParam(':location_platform', $_POST['location_platform']);
$stmt->bindParam(':topics_covered', $_POST['topics_covered']);
$stmt->bindParam(':challenges_faced', $_POST['challenges_faced']);
$stmt->bindParam(':additional_notes', $_POST['additional_notes']);
$stmt->bindParam(':date_of_next_session', $_POST['date_of_next_session']);
$stmt->bindParam(':topics_to_be_covered_next', $_POST['topics_to_be_covered_next']);
$stmt->bindParam(':students_view', $_POST['students_view']);
$stmt->bindParam(':students_feedback', $_POST['students_feedback']);

            // Execute the insertion
            if ($stmt->execute()) {
                echo "<script>
                        alert('Thank You, Your data was successfully submitted');
                        window.location.href = 'https://tutbits.net/';
                      </script>";
            } else {
                echo "<script>
                        alert('Data submission failed');
                        window.location.href = 'https://tutbits.net/';
                      </script>";
            }
        } else {
            // Data already exists
            echo "<script>
                    alert('Data already exists');
                    window.location.href = 'https://tutbits.net/';
                  </script>";
        }
    } else {
        // Missing some fields
        echo "<script>
                alert('Please fill in all the required fields');
                window.location.href = 'https://tutbits.net/';
              </script>";
    }
}
?>