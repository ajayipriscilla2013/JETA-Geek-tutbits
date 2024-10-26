<?php
    include_once('connect.php');
    $firstname = $_POST['user_first_name'];
   
    
     if(isset($_POST)){
        if($_POST['user_first_name'] != '' && $_POST['user_last_name'] != '' && $_POST['coordinator_email'] != '' && $_POST['coordinator_phone'] != '' && $_POST['coordinator_address'] != '' && $_POST['coordinator_city'] != '' && $_POST['coordinator_state'] != '' && $_POST['coordinator_country'] != '' && $_POST['coordinator_zipcode'] != '' && $_POST['preferred_communication'] != '' && $_POST['experience_background'] != ''){
           $strsql = "select * from coordinatorsform where email_address = '".$_POST['coordinator_email']."'";
           $stmt = $con->query($strsql);
           if($stmt->rowCount()==0){
                $strsql = "INSERT INTO `coordinatorsform` (`student_id`, `first_name`, `last_name`, `email_address`, `phone_number`, `address`, `city`, `state`, `country`, `zipcode`, `preferred_communication`, `bg_exp`) 
                VALUES (NULL, '". $_POST['user_first_name']."', '". $_POST['user_last_name']."', '". $_POST['coordinator_email']."', '". $_POST['coordinator_phone']."', '". $_POST['coordinator_address']."', '". $_POST['coordinator_city']."', '". $_POST['coordinator_state']."', '". $_POST['coordinator_country']."', '". $_POST['coordinator_zipcode']."', '". $_POST['preferred_communication']."', '". $_POST['experience_background']."');";
                $stmt = $con->query($strsql);
                $inputcount = $stmt->rowCount();
                if($inputcount > 0){
                    echo "<script>
                            alert('Thank You, Your data was successfully submitted');
                            window.location.href = 'https://tutbits.net/';
                        </script>";
                }
           }
           else{
            echo "<script>
                        alert('Data already exists');
                        window.location.href = 'https://tutbits.net/';
                        </script>";
           }
        }
     }
    //echo $strsql;
?>
 