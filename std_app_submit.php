    <?php
    // Include the database connection file
    include_once('connect.php');

    if (isset($_POST)) {
        //print_r($_FILES);
        // Check if all required fields are filled
        if (!empty($_POST['first_name']) && !empty($_POST['last_name']) && !empty($_POST['student_email']) && 
            !empty($_POST['phone_number']) && !empty($_POST['address']) && !empty($_POST['state']) && 
            !empty($_POST['city']) && isset($_POST['prefered_communication']) && 
            !empty($_POST['current_academic_status']) && !empty($_POST['school_name']) && !empty($_POST['faculty']) && 
            !empty($_POST['program_of_study']) && !empty($_POST['year_of_study']) && !empty($_POST['parent_full_name']) && 
            !empty($_POST['parent_email']) && !empty($_POST['parent_phone_number']) && !empty($_POST['coursecode_registered1']) && !empty($_POST['coursedesc_registered1']) && !empty($_POST['user_reason']) && !empty($_POST['user_comment']) )  {
            
                
                if(isset($_FILES['school_calendar'])){
                    $tempname = $_FILES['school_calendar']['tmp_name'];
                    $temptype = $_FILES['school_calendar']['type'];
                    if($temptype == "application/pdf"){
                        $filetype = "pdf";
                    }
                    else{
                        $filetype = ".jpg";
                    }
                    $newfilename = "studentuploads/".$_POST['student_email']."school_calendar.".$filetype;
                    move_uploaded_file($tempname, $newfilename);
                }
            // Prepare the SQL statement to check for existing email address
            $strsql = "SELECT * FROM std_app_form WHERE email_address = :email";
            $stmt = $con->prepare($strsql);
            $stmt->bindParam(':email', $_POST['student_email']);
            $stmt->execute();

            if ($stmt->rowCount() == 0) {
                // Insert data if no matching email is found
                $strsql = "INSERT INTO std_app_form 
                    ( `first_name`, `last_name`, `email_address`, `phone_number`, `address`, `state`, `city`, `zipcode`, `preferred_method_of_communication`, `current_academic_status`, `school_name`, `faculty`, `program_of_study`, 
                    `current_year_of_study`, `parents_full_name`, `parents_email_address`, `parents_phone_number`, `upload_school_calendar`, `reason_for_application`, `write_your_comment`)
                    VALUES (:first_name, :last_name, :email_address, :phone_number, :address, :state, :city, :zipcode, :preferred_method_of_communication, 
                            :current_academic_status, :school_name, :faculty, :program_of_study, :current_year_of_study, :parents_full_name,
                            :parents_email_address, :parents_phone_number, :upload_school_calendar, :reason_for_application, :write_your_comment)";

                $stmt = $con->prepare($strsql);

                // Bind all parameters to prevent SQL injection
                $stmt->bindParam(':first_name', $_POST['first_name']);
                $stmt->bindParam(':last_name', $_POST['last_name']);
                $stmt->bindParam(':email_address', $_POST['student_email']);
                $stmt->bindParam(':phone_number', $_POST['phone_number']);
                $stmt->bindParam(':address', $_POST['address']);
                $stmt->bindParam(':state', $_POST['state']);
                $stmt->bindParam(':city', $_POST['city']);
                $stmt->bindParam(':zipcode', $_POST['zipcode']);
                $stmt->bindParam(':preferred_method_of_communication', $_POST['prefered_communication']);
                $stmt->bindParam(':current_academic_status', $_POST['current_academic_status']);
                $stmt->bindParam(':school_name', $_POST['school_name']);
                $stmt->bindParam(':faculty', $_POST['faculty']);
                $stmt->bindParam(':program_of_study', $_POST['program_of_study']);
                $stmt->bindParam(':current_year_of_study', $_POST['year_of_study']);
                $stmt->bindParam(':parents_full_name', $_POST['parent_full_name']);
                $stmt->bindParam(':parents_email_address', $_POST['parent_email']);
                $stmt->bindParam(':parents_phone_number', $_POST['parent_phone_number']);
                $stmt->bindParam(':upload_school_calendar', $newfilename);
                $stmt->bindParam(':reason_for_application', $_POST['user_reason']);
                $stmt->bindParam(':write_your_comment', $_POST['user_comment']);
                

                // Execute the insertion
                if ($stmt->execute()) {
                    $num = 10;
                    for($i = 1; $i <= $num; $i++){
                        $stmt = null;
                        if(!empty($_POST['coursecode_registered'.$i]) && !empty($_POST['coursedesc_registered'.$i])){
                            $course_compact = '';
                            if(isset($_FILES['course_compact'.$i])){
                                $tempname = $_FILES['course_compact'.$i]['tmp_name'];
                                $temptype = $_FILES['course_compact'.$i]['type'];
                                if($temptype == "application/pdf"){
                                    $filetype = "pdf";
                                }
                                else{
                                    $filetype = ".jpg";
                                }
                                $newfilename = "studentuploads/".$_POST['student_email']."_course_compact".$i.".".$filetype;
                                move_uploaded_file($tempname, $newfilename);
                            }
                            $strsql = "INSERT INTO `std_course_details` (`id`, `username`, `coursecode`, `coursedesc`, `coursecompact`, `course_status`) 
                            VALUES (NULL, :username, :coursecode, :coursedesc, :compactupload, 1);";
                            $stmt = $con->prepare($strsql);
                            // Bind all parameters to prevent SQL injection
                            $stmt->bindParam(':username', $_POST['student_email']);
                            $stmt->bindParam(':coursecode', $_POST['coursecode_registered'.$i]);
                            $stmt->bindParam(':coursedesc', $_POST['coursedesc_registered'.$i]);
                            $stmt->bindParam(':compactupload', $newfilename);
                            $stmt->execute();
                        }
                    }
                    $_SESSION['uname'] = $_POST['student_email'];
                    echo "<script>
                            alert('Thank You, Your data was successfully submitted');
                            window.location.href = 'std_reg_payment.php';
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
