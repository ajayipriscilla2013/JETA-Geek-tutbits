    <?php
    session_start();
    include_once('connect.php');
    $_SESSION['uname ']='oluwajuwon.adelua@gmail.com';
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
    $courses = $query2->fetchAll(PDO::FETCH_ASSOC);
    }

    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Tutbits</title>
        <link rel="icon" type="image/png" href="assets/images/favicon.png">
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
                            <h1 class="display-2">Student Application Payment</h1>
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
                        
                        <form action="std_app_submit.php" method="POST"class="apply_form bg_dark_9 p-5" enctype = "multipart/form-data">
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
                                    foreach ($courses as $course) {
                                    $total_cost += (float)$course['coursecompact'];
                                    }
                                    ?>
                                    <h5>Compulsory Administrative Fee:</h5><br>
                                    <h5>Total Course Cost: <?php echo $total_cost; ?></h5><br>
                                    <h5>Grand Total:<?php echo $total_cost + 1000; ?></h5>
                                    </div>
                                </div> 
                            <!-- </div> -->
                            <!-- <div class="row"> -->
                                <div class="col-md-12 mx-auto text-center">
                                    <button type="submit" class="button_one mt-3">Pay</button>
                                </div>
                            </div>
                        </form>
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