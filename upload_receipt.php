    <?php
            // Ensure session is started and valid username is available
            session_start();
        // Include the database connection file
        include_once('connect.php');

        if (isset($_POST)) {
            $tempname = $_FILES['receipt_upload']['tmp_name'];
            $temptype = $_FILES['receipt_upload']['type'];
            // Determine the file type
            if($temptype == "application/pdf"){
                $filetype = "pdf";
            }
            else{
                $filetype = ".jpg"; // Default to jpg for images;
            }
            $username = $_SESSION['uname'];
            $newfilename1 = "receiptuploads/" . $username . "_receipt." . $filetype;
            // Move the uploaded file to the destination
            if(move_uploaded_file($tempname, $newfilename1)) {
            
            // Insert the receipt information into the table
            $query = "INSERT INTO receipt_uploads (username, newfilename) VALUES (:username, :newfilename)";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':newfilename', $newfilename1);
            
            if ($stmt->execute()) {
                echo "<script>
                            alert('Thank you! Your receipt has been successfully uploaded. Our team will review your submission and notify you once the verification is complete.');
                            window.location.href = 'https://tutbits.net/';
                        </script>";
            } else {
                echo "<script>
                            alert('Oops! The Upload was not successful, Please try again.')
                            window.location.href = '#'
                      </script>";
            }
            unset($_SESSION); 
        }
        
            }
              
        
    ?>

