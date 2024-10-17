<?php
// Include the database connection file
include_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if all required fields are filled
    if (!empty($_POST['user_first_name']) && !empty($_POST['students_id']) && !empty($_POST['course_title']) && !empty($_POST['course_code']) &&
        !empty($_POST['start_time']) &&  !empty($_POST['end_time']) && !empty($_POST['tutor_name']) && isset($_POST['overall_rating']) && 
        !empty($_POST['self_evaluation_rating']) && !empty($_POST['subject_improvement']) && !empty($_POST['exam_prep']) && 
        !empty($_POST['comments']) && !empty($_POST['submission_date']) )  {

        // Prepare the SQL statement to check for existing Student's ID
        $strsql = "SELECT * FROM std_app_form WHERE students_id = :students_id";
        $stmt = $con->prepare($strsql);
        $stmt->bindParam(':students_id', $_POST['students_id']);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            // Insert data if no matching students_id is found
            $strsql = "INSERT INTO `student_evaluation_form` 
                       (`user_first_name`, `students_id`, `course_title`, `course_code`, `start_time`, `end_time`, 
                        `tutor_name`, `overall_rating`, `self_evaluation_rating`, `subject_improvement`, 
                        `exam_prep`, `comments`, `submission_date`)
                       VALUES 
                       (:user_first_name, :students_id, :course_title, :course_code, :start_time, :end_time, 
                        :tutor_name, :overall_rating, :self_evaluation_rating, :subject_improvement, 
                        :exam_prep, :comments,  :submission_date)";

            $stmt = $con->prepare($strsql);

            // Bind all parameters to prevent SQL injection
            $stmt->bindParam(':user_first_name', $_POST['user_first_name']);
            $stmt->bindParam(':students_id', $_POST['students_id']);
            $stmt->bindParam(':course_title', $_POST['course_title']);
            $stmt->bindParam(':course_code', $_POST['course_code']);
            $stmt->bindParam(':start_time', $_POST['start_time']);
            $stmt->bindParam(':end_time', $_POST['end_time']);
            $stmt->bindParam(':tutor_name', $_POST['tutor_name']);
            $stmt->bindParam(':overall_rating', $_POST['overall_rating']);
            $stmt->bindParam(':self_evaluation_rating', $_POST['self_evaluation_rating']);
            $stmt->bindParam(':subject_improvement', $_POST['subject_improvement']);
            $stmt->bindParam(':exam_prep', $_POST['exam_prep']);
            $stmt->bindParam(':comments', $_POST['comments']);
            $stmt->bindParam(':submission_date', $_POST['submission_date']);
        
            
        

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
