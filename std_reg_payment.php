                     <?php
                        session_start();
                        include_once('connect.php');
                        //echo $_SESSION['uname'];
                     
                        if(isset($_SESSION['uname']) && $_SESSION['uname'] != ""){
                        $username = $_SESSION['uname'];

                        // Query to fetch student details
                        $query = $con->prepare("SELECT * FROM std_app_form WHERE email_address = :usernameuse");
                        $query->bindParam(":usernameuse", $username);
                        $query->execute();
                        $student = $query->fetch(PDO::FETCH_ASSOC);
                        // echo "<pre>";
                        //print_r($student);

                        // Fetch course details associated with this student
                        $query2 = $con->prepare("SELECT * FROM std_course_details WHERE username = :username");
                        $query2->bindParam(":username", $username);
                        $query2->execute();
                        $coursescount = $query2->rowCount();
                        $courses = $query2->fetchAll(PDO::FETCH_ASSOC);

                        //fetch cost for reg
                        $query3 = $con->prepare("SELECT * FROM reg_fee_structure WHERE institution_type = :institution_type and status = :feestatus");
                        $query3->bindValue(":institution_type", 1);
                        $query3->bindValue(":feestatus", 1);
                        $query3->execute();
                        $feestructure = $query3->fetch(PDO::FETCH_ASSOC);
                        }

                        ?>

                        <!DOCTYPE html>
                        <html lang="en">

                        <head>
                            <meta charset="UTF-8">
                            <meta name="viewport" content="width=device-width, initial-scale=1.0">
                            <meta http-equiv="X-UA-Compatible" content="ie=edge">
                            <title>Tutbits</title>
                            <link rel="icon" type="image/png" href="assets/img/pic10 logo.jpg">
                            <link rel="stylesheet" href="assets/css/bootstrap.min.css">
                            <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
                            <link rel="stylesheet" href="assets/css/font-awesome.min.css">
                            <link rel="stylesheet" href="assets/css/aos.css">
                            <link rel="stylesheet" href="assets/css/swiper.min.css">
                            <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
                            <link rel="stylesheet" href="assets/css/style.css">
                        </head>

                        <body>
                        
                            <!-- Start Hero Area -->
                        <section class="hero-section height-470" style="background-image:url(assets/img/pic21.jpg)" data-aos="fade-up">
                            <div class="hero-area">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="page-hrader text-white text-center">
                                                <h1 class="display-2">Undergraduate Student Application Payment</h1>
                                                <div class="page-breadcrumb">
                                                    <p><a class="text-white" href="index.php">Home</a> - Apply</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <!-- End Hero Area -->

                        <!--Start Page -->
                        <div class="page-wrapper section-ptb-3" data-aos="fade-up">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-10 mx-auto">
                                        <div class="apply-wrapper">
                                            
                                           
                                        <div class="row g-4">
                                                    <!-- Student Information-->
                                                <div class="shm-j">
                                                    <h3>Student Information</h3>
                                                </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">                                    
                                                            <label for="first_name"> First Name</label>
                                                            <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name" value="<?php echo $student['first_name']; ?>" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <h5></h5>
                                                            <label for="last_name">Last Name</label>
                                                            <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name" value="<?php echo $student['last_name']; ?>" required>
                                                        </div>
                                                    </div>
                                                
                                                <div class="jhdfg-h">
                                                        <h3>Course Details</h3>
                                                    </div>
                                                <!-- <div class="row"> -->    
                                                                <div class="row">          
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                        <label for="course_sn"> SN </label>
                                                        </div>
                                                    </div>            
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                            <label for="coursecode_registered1<?php echo $index + 1; ?>"> Courses Code </label>                          </div>
                                                    </div>   

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <label for="coursedesc_registered1<?php echo $index + 1; ?>"> Courses Description </label>
                                                        </div>
                                                    </div>
                                                                </div> 
                                                <?php foreach ($courses as $index => $course): ?>   
                                                                <div class="row">          
                                                    <div class="col-md-1">
                                                        <div class="form-group">
                                                        <label><?php echo $index + 1; ?></label>
                                                        </div>
                                                    </div>            
                                                    <div class="col-md-2">
                                                        <div class="form-group">
                                                        <input type="text" class="form-control" placeholder="Course Code" name="coursecode_registered1<?php echo $index + 1; ?>" id="coursecode_registered1<?php echo $index + 1; ?>" value="<?php echo $course['coursecode']; ?>" required>
                                                        </div>
                                                    </div>   

                                                    <div class="col-md-5">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Course Description" name="coursedesc_registered1<?php echo $index + 1; ?>" id="coursedesc_registered1<?php echo $index + 1; ?>" value="<?php echo $course['coursedesc']; ?>" required>
                                                        </div>
                                                    </div>
                                                                </div> 
                                                                <?php endforeach; ?>
                                                                <br/>
                                                <!-- <div class="row"> -->
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                        <?php
                                                        $total_cost = 0;
                                                        //print_r($feestructure);
                                                        if (isset($feestructure['per_course_fee'])) {
                                                        $course_cost = $coursescount*3*$feestructure['per_course_fee'];
                                                        $total_cost = $course_cost + $feestructure['compulsory_fee'];
                                                    
                                                        ?>
            <div style="width: 100%; display: flex; justify-content: left; margin-top: 20px;">
        <table cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 50%; text-align: left; background-color: #f9f9f9; border: 1px solid #ddd;">
            <tr>
                <td style="padding: 12px 15px; border: 1px solid #ddd;">Compulsory Administrative Fee:</td>
                <td style="padding: 12px 15px; border: 1px solid #ddd;"><?php echo number_format($feestructure['compulsory_fee'], 2); ?></td>
            </tr>
            <tr>
                <td style="padding: 12px 15px; border: 1px solid #ddd;">Total Course Cost:</td>
                <td style="padding: 12px 15px; border: 1px solid #ddd;"><?php echo number_format($course_cost, 2); ?></td>
            </tr>
            <tr>
                <td style="padding: 12px 15px; border: 1px solid #ddd;">Grand Total:</td>
                <td style="padding: 12px 15px; border: 1px solid #ddd;"><strong style="color: #333;"><?php echo number_format($total_cost, 2); ?></strong></td>
            </tr>
        </table>
    </div>
    <p>Note: <em>This bill is for a period of three months (3 months)</em></p>
    <!-- Payment Receipt Section -->
    <div style="width: 100%; display: flex; justify-content: left; margin-top: 20px;">

    <div style="width: 50%; margin-top: 20px; text-align: left;">
            <h5 style="color: #333;">Payment Information</h5>
            <p>Kindly make payment to the account details provided below:</p>
            <p>Account Name:</p><h5>JETA COMMUNICATIONS</h5>
            <p>Account Number:</p><h5>0052681732</h5>
            <p>Bank:</p> <h5>Access Bank Nigeria</h5>
            <p>Payment Description:</p> <h5>Tutbits and FullName</h5>
            <br><br>

            <div style="width: 50%; margin-top: 20px; text-align: left;">
            <h4 style="color: #333;">Payment Receipt</h4>
            <p>Please upload the receipt of your payment:</p>
            
            <!-- Upload Form -->
            <form action="upload_receipt.php" method="POST" enctype="multipart/form-data">
                <label for="receipt_upload" name="receipt_upload" style="display: block; margin-bottom: 10px;">
                    <strong>Upload Receipt:</strong>
                </label>
                <input type="file" name="receipt_upload" id="receipt_upload" style="padding: 5px;" required>
                <br><br>
                <input type="submit" value="Upload Receipt" style="padding: 10px 20px; background-color: #d35400; color: white; border: none; border-radius: 10%; cursor: pointer; accept=".pdf, .jpeg, .jpg, .png">
            </form>
           </div>
            </div>                                                
    </div
                                                        <?php
                                                            } else {
                                                                // Handle the missing key scenario (e.g., set a default value or show an error message)
                                                                $course_cost = 0; // or handle it in another way
                                                                echo "Error: Fee is not set in the feestructure.";
                                                            }
                                                        ?>
                                                        </div>
                                                    </div> 
                        
                                               
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Page -->







                        <div class="scroll-top">
                            <div class="scroll-icon">
                                <i class="fa fa-angle-up"></i>
                            </div>
                        </div>
                        
                            <script src="assets/js/jquery-3.4.0.min.js"></script>
                            <script src="assets/js/popper.min.js"></script>
                            <script src="assets/js/jquery.easing.min.js"></script>
                            <script src="assets/js/bootstrap.min.js"></script>
                            <script src="assets/js/aos.js"></script>
                            <script src="assets/js/owl.carousel.min.js"></script>
                            <script src="assets/js/swiper.min.js"></script>
                            <script src="assets/js/jquery.fancybox.min.js"></script>
                            <script src="assets/js/jquery.waypoints.min.js"></script>
                            <script src="assets/js/jquery.counterup.min.js"></script>
                            <script src="assets/js/bootnavbar.js"></script>
                            <script src="assets/js/main.js"></script>
                        </body>

                        </html>