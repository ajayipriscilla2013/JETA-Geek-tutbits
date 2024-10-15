<?php
// Include the database connection file
include_once('connect.php');

if (isset($_POST)) {
    // Check if all required fields are filled
    if (!empty($_POST['tutor_first_name']) && !empty($_POST['tutor_last_name']) && !empty($_POST['tutor_email']) && 
        !empty($_POST['tutor_phone']) && !empty($_POST['tutor_address']) && !empty($_POST['tutor_city']) && 
        !empty($_POST['tutor_state']) && !empty($_POST['tutor_zipcode']) && isset($_POST['preferred_communication']) && 
        !empty($_POST['tutor_qualification']) && !empty($_POST['tutor_specialization']) && !empty($_POST['tutor_university']) && 
        !empty($_POST['tutor_experience']) && !empty($_POST['tutor_courses']) && !empty($_POST['tutor_expertise']) && 
        !empty($_POST['tutor_schedule'])) {

        // Prepare the SQL statement to check for existing email address
        $strsql = "SELECT * FROM tutor_app_form WHERE email_address = :email";
        $stmt = $con->prepare($strsql);
        $stmt->bindParam(':email', $_POST['tutor_email']);
        $stmt->execute();

        if ($stmt->rowCount() == 0) {
            // Insert data if no matching email is found
            $strsql = "INSERT INTO tutor_app_form 
                (first_name, last_name, email_address, phone_number, address, city, state, zipcode, preferred_method_of_communication, 
                 highest_qualification, area_of_specialization, university_or_institution_attended, years_of_tutoring_experience, 
                 list_courses_competently, level_of_expertise, availability) 
                VALUES (:first_name, :last_name, :email, :phone, :address, :city, :state, :zipcode, :preferred_communication, 
                        :qualification, :specialization, :university, :experience, :courses, :expertise, :schedule)";

            $stmt = $con->prepare($strsql);

            // Bind all parameters to prevent SQL injection
            $stmt->bindParam(':first_name', $_POST['tutor_first_name']);
            $stmt->bindParam(':last_name', $_POST['tutor_last_name']);
            $stmt->bindParam(':email', $_POST['tutor_email']);
            $stmt->bindParam(':phone', $_POST['tutor_phone']);
            $stmt->bindParam(':address', $_POST['tutor_address']);
            $stmt->bindParam(':city', $_POST['tutor_city']);
            $stmt->bindParam(':state', $_POST['tutor_state']);
            $stmt->bindParam(':zipcode', $_POST['tutor_zipcode']);
            $stmt->bindParam(':preferred_communication', $_POST['preferred_communication']);
            $stmt->bindParam(':qualification', $_POST['tutor_qualification']);
            $stmt->bindParam(':specialization', $_POST['tutor_specialization']);
            $stmt->bindParam(':university', $_POST['tutor_university']);
            $stmt->bindParam(':experience', $_POST['tutor_experience']);
            $stmt->bindParam(':courses', $_POST['tutor_courses']);
            $stmt->bindParam(':expertise', $_POST['tutor_expertise']);
            $stmt->bindParam(':schedule', $_POST['tutor_schedule']);

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




<!-- <?php
// Include the database connection file
// include_once('connect.php');
// ini_set('display_errors', 1);
// error_reporting(E_ALL);

// // Only process the form if it has been submitted
// if ($_SERVER['REQUEST_METHOD'] == 'POST') {

//     // Retrieve and sanitize form data
//     $tutor_name = isset($_POST['user_first_name']) ? $_POST['user_first_name'] : '';
//     $tutor_id= isset($_POST['tutor_id']) ? $_POST['tutor_id'] : '';
//     $email_address = isset($_POST['email_address']) ? $_POST['email_address'] : '';
//     $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
//     $address = isset($_POST['address']) ? $_POST['address'] : '';
//     $city = isset($_POST['city']) ? $_POST['city'] : '';
//     $state = isset($_POST['state']) ? $_POST['state'] : '';
//     $zipcode = isset($_POST['zipcode']) ? $_POST['zipcode'] : '';
//     $preferred_method_of_communication = isset($_POST['preferred_method_of_communication']) ? $_POST['preferred_method_of_communication'] : '';
//     $highest_qualification = isset($_POST['highest_qualification']) ? $_POST['highest_qualification'] : '';
//     $area_of_specialization = isset($_POST['area_of_specialization']) ? $_POST['area_of_specialization'] : '';
//     $university_or_institution_attended = isset($_POST['university_or_institution_attended']) ? $_POST['university_or_institution_attended'] : '';
//     $years_of_tutoring_experience = isset($_POST['years_of_tutoring_experience']) ? $_POST['years_of_tutoring_experience'] : '';
//     $list_courses_competently = isset($_POST['list_courses_competently']) ? $_POST['list_courses_competently'] : '';
//     $level_of_expertise = isset($_POST['level_of_expertise']) ? $_POST['level_of_expertise'] : '';
//     $availability = isset($_POST['availability']) ? $_POST['availability'] : '';

//     // Build the SQL query string with placeholders
//     $strsql = "INSERT INTO `tutor_app_form` 
//                 (`first_name`, `last_name`, `email_address`, `phone_number`, `address`, `city`, `state`, `zipcode`, `preferred_method_of_communication`, `highest_qualification`, `area_of_specialization`, `university_or_institution_attended`, `years_of_tutoring_experience`, `list_courses_competently`, `level_of_expertise`, `availability`) 
//                 VALUES 
//                 (:first_name, :last_name, :email_address, :phone_number, :address, :city, :state, :zipcode, :preferred_method_of_communication, :highest_qualification, :area_of_specialization, :university_or_institution_attended, :years_of_tutoring_experience, :list_courses_competently, :level_of_expertise, :availability)";

//     // Prepare the statement
//     try {
//         $stmt = $con->prepare($strsql);

//         // Bind parameters to prevent SQL injection
//         $stmt->bindParam(':first_name', $first_name);
//         $stmt->bindParam(':last_name', $last_name);
//         $stmt->bindParam(':email_address', $email_address);
//         $stmt->bindParam(':phone_number', $phone_number);
//         $stmt->bindParam(':address', $address);
//         $stmt->bindParam(':city', $city);
//         $stmt->bindParam(':state', $state);
//         $stmt->bindParam(':zipcode', $zipcode);
//         $stmt->bindParam(':preferred_method_of_communication', $preferred_method_of_communication);
//         $stmt->bindParam(':highest_qualification', $highest_qualification);
//         $stmt->bindParam(':area_of_specialization', $area_of_specialization);
//         $stmt->bindParam(':university_or_institution_attended', $university_or_institution_attended);
//         $stmt->bindParam(':years_of_tutoring_experience', $years_of_tutoring_experience);
//         $stmt->bindParam(':list_courses_competently', $list_courses_competently);
//         $stmt->bindParam(':level_of_expertise', $level_of_expertise);
//         $stmt->bindParam(':availability', $availability);

//         // Execute the query
//         if ($stmt->execute()) {
//             // Redirect only if data is successfully inserted
//             echo "<script>
//                     alert('Thank You, Your data was successfully submitted');
//                     window.location.href = 'https://tutbits.net/';
//                  </script>";
//         } else {
//             echo "<script>
//                     alert('Data failed to insert');
//                     window.location.href = 'https://tutbits.net/';
//                  </script>";
//         }
//     } catch (PDOException $e) {
//         echo 'Error: ' . $e->getMessage();
//         echo 'Code: ' . $e->getCode();
//         exit; // Add exit to stop the script and show the error
//     }
    
//     // Close the database connection
//     $con = null; // Close connection if using PDO
// }
// $firstname = $_POST['tutor_first_name'];
    // echo $firstname;
    // echo "<br/>";
    // print_r($_POST);
    //  if(isset($_POST)){
    //   if($_POST['tutor_first_name'] != '' && $_POST['tutor_last_name'] != '' && $_POST['tutor_email'] != '' && $_POST['tutor_phone'] != '' && $_POST['tutor_address'] != '' && $_POST['tutor_city'] != '' && $_POST['tutor_state'] != '' && $_POST['tutor_zipcode'] != '' && $_POST['preferred_communication'] != '' && $_POST['tutor_qualification'] != '' && $_POST['tutor_specialization'] != '' && $_POST['tutor_university'] != '' && $_POST['tutor_experience'] != '' && $_POST['tutor_courses'] != '' && $_POST['tutor_expertise'] != '' && $_POST['tutor_schedule'] != '' ){
    //        $strsql = "select * from tutor_app_form where email_address = '".$_POST['tutor_email']."'";
    //        $stmt = $con->query($strsql);
    //        echo $strsql;
    //        if($stmt->rowCount()==0){
    //             $strsql = "INSERT INTO `tutor_app_form` (`first_name`,`last_name`,`email_address`,`phone_number`,`address`,`city`,`state`,`zipcode`,`preferred_method_of_communication`,`highest_qualification`,`area_of_specialization`,`university_or_institution_attended`,`years_of_tutoring_experience`,`list_courses_competently`,`level_of_expertise`,`availability`) 
    //             VALUES (NULL, '". $_POST['tutor_first_name']."', '". $_POST['tutor_last_name']."', '". $_POST['tutor_email']."', '". $_POST['tutor_phone']."', '". $_POST['tutor_address']."', '". $_POST['tutor_city']."', '". $_POST['tutor_state']."', '". $_POST['tutor_zipcode']."', '". $_POST['preferred_communication']."', '". $_POST['tutor_qualification']."', '". $_POST['tutor_specialization']."', '". $_POST['tutor_university']."', '". $_POST['tutor_experience']."', '". $_POST['tutor_courses']."', '". $_POST['tutor_expertise']."', '". $_POST['tutor_schedule']."');";
    //             $stmt = $con->query($strsql);
    //             $inputcount = $stmt->rowCount();
    //             if($inputcount > 0){
    //                 echo "<script>
    //                         alert('Thank You, Your data was successfully submitted');
    //                         window.location.href = 'https://tutbits.net/';
    //                     </script>";
    //             }
    //        }
    //        else{
    //         echo "<script>
    //                     alert('Data already exists');
    //                     window.location.href = 'https://tutbits.net/';
    //                     </script>";
    //        }
    //     }
    //  }
?> -->


