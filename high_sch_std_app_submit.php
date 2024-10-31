<?php
//session_start();
include_once('connect.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $required_fields = [
        'first_name', 'last_name', 'student_email', 'phone_number', 
        'current_academic_status', 'sec_edu_level', 'current_class', 
        'academic_discipline', 'school_name', 'subjects_registered', 
        'address', 'state', 'city', 'zipcode', 'preferred_communication', 
        'parent_full_name', 'parent_email', 'parent_phone_number', 
        'user_reason', 'user_comment'
    ];

    $missing_fields = array_filter($required_fields, function($field) {
        return empty($_POST[$field]);
    });

   
    if (empty($missing_fields)) {
      
        $email = $_POST['student_email'];

        // Check if the email already exists
        $stmt = $con->prepare("SELECT * FROM high_sch_std_app_form WHERE student_email = ?");
        $stmt->execute([$email]);
      //  $subjects_registered = json_encode($_POST['subjects_registered']);


        if ($stmt->rowCount() == 0) {
            // Prepare the insert statement
            $insert_stmt = $con->prepare("
                INSERT INTO high_sch_std_app_form (
                    first_name, last_name, student_email, phone_number, 
                    current_academic_status, sec_edu_level, current_class, 
                    academic_discipline, school_name, subjects_registered, 
                    address, state, city, zipcode, preferred_communication, 
                    parent_full_name, parent_email, parent_phone_number, 
                    user_reason, user_comment
                ) VALUES (
                    ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?
                )
            ");

           // Execute the insert statement
            $inputcount = $insert_stmt->execute([
                $_POST['first_name'], 
                $_POST['last_name'], 
                $_POST['student_email'], 
                $_POST['phone_number'], 
                $_POST['current_academic_status'],
                $_POST['sec_edu_level'],
                $_POST['current_class'],
                $_POST['academic_discipline'],
                $_POST['school_name'],
                $_POST['subjects_registered'],
                $_POST['address'], 
                $_POST['state'], 
                $_POST['city'], 
                $_POST['zipcode'], 
                $_POST['preferred_communication'], 
                $_POST['parent_full_name'], 
                $_POST['parent_email'], 
                $_POST['parent_phone_number'], 
                $_POST['user_reason'], 
                $_POST['user_comment'],
            ]);

            if ($inputcount > 0) {
                $_SESSION['uname']=$email;
                
    if (isset($_POST['subjects_registered'])) {
        $selectedSubjects = $_POST['subjects_registered'];
        // $selectedSubjects will be an array containing the selected values
        foreach ($selectedSubjects as $subject) {
           // echo "Selected subject ID: " . $subject . "<br>";
            $insert_subj = $con->prepare("
                INSERT INTO std_subject_details ( username, subject) Values (?,?)
                ");
              $subjcount = $insert_subj->execute([
                $email,
                $subject
              ]);
            // Here you can save the subject selections to the database or handle as needed
        }
    } else {
        echo "No subjects selected.";
    }
    if ($subjcount) {
        
                echo "<script>
                        alert('Thank You, Your data was successfully submitted');
                        window.location.href = 'high_sch_std_reg_payment.php';
                    </script>"; 
    }
    else{
        echo "<script>
                   alert('Subject Data not saved');
              </script>";

    }
    

            
            }
        } else {
            
             echo "<script>
                        alert('Data already exists');
                        window.location.href = 'https://tutbits.net/';
                   </script>";
         }
    } else {
        echo "<script>
                alert('Please fill in all required fields:  " . implode(', ', $missing_fields) . "');
                window.location.href = 'https://tutbits.net/';
            </script>";
    }
}
?>
