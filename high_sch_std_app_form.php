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
    <!-- Start Header -->
    
    <!-- End Header -->



    <!-- Start Hero Area -->
<section class="hero-section height-470" style="background-image:url(assets/img/pic21.jpg)" data-aos="fade-up">
    <div class="hero-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-hrader text-white text-center">
                        <h1 class="display-2">High School Student Application Form</h1>
                        <div class="page-breadcrumb">
                            <p><a class="text-white" href="tutbits_high_sch.php">Home</a> - Apply</p>
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
                    <h2></h2>
                    <form action="high_sch_std_app_submit.php" method="POST"class="apply_form bg_dark_9 p-5">
                        <div class="row g-4">
                            <!-- Student Information-->
                        <div class="shm-j">
                            <h3>Student Information</h3>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">                                    
                                    <label for="first_name"> First Name</label>
                                    <input type="text" class="form-control" placeholder="First Name" name="first_name" id="first_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <h5></h5>
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Last Name" name="last_name" id="last_name">
                                </div>
                            </div>
                            <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="student_email">Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email Address" name="student_email" id="student_email">
                                </div>
                            </div>                          
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" name="phone_number" id="phone_number">
                                </div>
                            </div>
                             <!-- </div> -->
                        <!-- <div class="row"> -->
                            <!--School Detials-->
                            <div class="jhdfg-h">
                                <h3>Academic Details</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="current_academic_status">Current Academic Status</label>
                                    <input type="text" class="form-control" placeholder="Enter" name="current_academic_status" id="current_academic_status">
                                </div>
                            </div> 
                              
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="current_class">Current Class</label>
                                    <select name="current_class" id="current_class"" class="form-control" > 
                                        <option value="1">Select year</option>
                                        <option value="2">Jss1</option>
                                        <option value="3">Jss2</option>
                                        <option value="4">Jss3</option>
                                        <option value="5">Sss1</option>
                                        <option value="6">Sss2</option>
                                        <option value="6">Sss3</option>
                                    </select>
                                </div>
                            </div>

                            <!-- </div> -->
                        <!-- <div class="row"> -->
                            <!-- <div class="col-md-6">
                                <div class="form-group">
                                    <label for="program_of_study">Program of Study</label>
                                    <input type="text" class="form-control" placeholder="Program of Study" name="program_of_study" id="program_of_study">
                                </div>
                            </div>  -->
                            <div class="col-md-6">
                              <div class="form-group">
                                  <label for="academic_discipline">Academic Discipline</label>
                                  <select class="form-control" name="academic_discipline" id="academic_discipline">
                                      <option value="">Select Discipline</option>
                                      <option value="Science">Science</option>
                                      <option value="Art">Art</option>
                                      <option value="Commercial">Commercial</option>
                                      <option value="Technical">Technical</option>
                                  </select>
                              </div>
                           </div>
                            <!-- </div> -->
                        <!-- <div class="row"> -->
                        <div class="col-md-6">
                                <div class="form-group">
                                    <label for="school_name">School Name</label>
                                    <input type="text" class="form-control" placeholder="School name" name="school_name" id="school_name">
                                </div>
                            </div> 
                           <!-- </div> -->
                             <!-- <div class="row"> -->             
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="courses_registered"> Courses Registered </label>
                                    <select name="courses_registered" id="courses_registered" class="form-control">
                                        <option value="1">Course 1</option>
                                        <option value="2">Course 2</option>
                                        <option value="3">Course 3</option>
                                        <option value="4">Course 4</option>
                                        <option value="5">Course 5</option>
                                    </select>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="row"> -->                       
                                    <form action="/upload-endpoint" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="upload_course_compact">Upload Course Compact (PDF or Image):</label>
                                                    <input type="file" class="form-control" id="course_compact" name="course_compact" accept=".pdf, .jpeg, .jpg, .png" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="upload_school_calendar">Upload School Calendar (PDF or Image):</label>
                                                    <input type="file" class="form-control" id="upload_school_calendar" name="upload_school_calendar" accept=".pdf, .jpeg, .jpg, .png" required>
                                                </div>
                                            </div>
                                        </div>                               
                                        <!-- </div> -->
                        <!-- <div class="row"> -->
                                <!-- Residential address-->
                        <div class="jhdfg-h">
                            <h3>Residential address</h3>
                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address"> Address</label>
                                    <input type="text" class="form-control" placeholder="Address" name="address" id="address">
                                </div>
                            </div>
                              <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="state">State</label>
                                    <select name="state" id="state" class="form-control">
                                    <option value="" disabled selected>Select a state</option>
                                    <option value="Abia">Abia</option>
                                    <option value="Adamawa">Adamawa</option>
                                    <option value="Akwa Ibom">Akwa Ibom</option>
                                    <option value="Anambra">Anambra</option>
                                    <option value="Bauchi">Bauchi</option>
                                    <option value="Bayelsa">Bayelsa</option>
                                    <option value="Benue">Benue</option>
                                    <option value="Borno">Borno</option>
                                    <option value="Cross River">Cross River</option>
                                    <option value="Delta">Delta</option>
                                    <option value="Ebonyi">Ebonyi</option>
                                    <option value="Edo">Edo</option>
                                    <option value="Ekiti">Ekiti</option>
                                    <option value="Enugu">Enugu</option>
                                    <option value="Gombe">Gombe</option>
                                    <option value="Imo">Imo</option>
                                    <option value="Jigawa">Jigawa</option>
                                    <option value="Kaduna">Kaduna</option>
                                    <option value="Kano">Kano</option>
                                    <option value="Katsina">Katsina</option>
                                    <option value="Kebbi">Kebbi</option>
                                    <option value="Kogi">Kogi</option>
                                    <option value="Kwara">Kwara</option>
                                    <option value="Lagos">Lagos</option>
                                    <option value="Nasarawa">Nasarawa</option>
                                    <option value="Niger">Niger</option>
                                    <option value="Ogun">Ogun</option>
                                    <option value="Ondo">Ondo</option>
                                    <option value="Osun">Osun</option>
                                    <option value="Oyo">Oyo</option>
                                    <option value="Plateau">Plateau</option>
                                    <option value="Rivers">Rivers</option>
                                    <option value="Sokoto">Sokoto</option>
                                    <option value="Taraba">Taraba</option>
                                    <option value="Yobe">Yobe</option>
                                    <option value="Zamfara">Zamfara</option>
                                    <option value="FCT">FCT - Abuja</option>
      </select>
      <br>
                                </div>
                            </div>
                              <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" placeholder=City name="city" id="city">
                                </div>
                            </div>
                              <!-- </div> -->
                        <!-- <div class="row"> -->                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="zipcode"> Zipcode</label>
                                    <input type="text" class="form-control" placeholder="e.g., 12345" pattern="\d{5}(-\d{4})?" title="Enter a valid code (e.g., 12345 or 12345-6789)"name="zipcode" id="zipcode">
                                </div>
                            </div>
                            <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="prefered_communication">Prefered method of communication</label>
                                    <select name="prefered_communication" id="prefered_communication" class="form-control" placeholder="select preferreed communication method">
                                      <option value="1">Select method</option>
                                      <option value="2">Email</option>
                                      <option value="3">Phone</option>
                                        <option value="4">SMS</option>
                                    </select><br>
                                </div>
                            </div> 
                         
                             <!-- </div> -->
                        <!-- <div class="row"> -->
                            

                       <!-- </div> -->
                        <!-- <div class="row"> -->
                            <!--Parents/ Guardian Information-->
                            <div class="jhdfg-h">
                                <h3>Parents/ Guardian Information</h3>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">                                   
                                    <label for="parent_full_name">Parent Full name</label>
                                    <input type="text" class="form-control" placeholder="Full Name" name="parent_full_name" id="parent_full_name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="parent_email">Parent Email Address</label>
                                    <input type="text" class="form-control" placeholder="Email Address" name="parent_email" id="parent_email">
                                </div>
                            </div>
                            <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="parent_phone_number">Parent Phone Number</label>
                                    <input type="text" class="form-control" placeholder="Phone Number" name="parent_phone_number" id="parent_phone_number">
                                </div>
                            </div>
                            <!-- </div> -->
                             <!-- <div class="row"> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_reason">Reason for Application</label>
                                    <textarea name="user_reason" class="form-control" id="user_reason" cols="30" rows="5" placeholder="Reason for Application"></textarea>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="user_comment">Write Your Comment</label>
                                    <textarea name="user_comment" class="form-control" id="user_comment" cols="30" rows="5" placeholder="Your Comment"></textarea>
                                </div>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="row"> -->
                            <div class="col-md-12 mx-auto text-center">
                                <button type="submit" class="button_one mt-3">Submit Form</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Page -->



<!-- Start Footer -->
<!-- <footer data-aos="fade-up">
    <div class="subscribe-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="subscribe-wrapper p-5 bg-white">
                        <div class="row align-items-center">
                            <div class="col-lg-6">
                                <div class="subscribe-text">
                                    <h2>Newsletters</h2>
                                    <p>Consectetur adipisicing elit, sed do eiusmod tempoe</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="subscribe-form">
                                    <form action="#">
                                        <input type="email" class="form-control" placeholder="Enter Your Email Here">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-area default_bg">
        <div class="footer-top section-ptb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="single_widget">
                            <div class="address-widget">
                                <div class="footer-logo">
                                    <a href="index.php"><img src="assets/images/footer_logo.png" alt="" class="img-fluid"></a>
                                </div>
                                <p>900 Lucerne Station Road Terrace, Orlando, FL 32806, USA contact@eduaid.com</p>
                                <span>+892 5555 444</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-3d-5">
                        <div class="single_widget">
                            <h3>Useful Links</h3>
                            <div class="widget-list">
                                <ul>
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Instructors</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Service Plus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 mb-xs-5">
                        <div class="single_widget">
                            <h3>Our Services</h3>
                            <div class="widget-list">
                                <ul>
                                    <li><a href="#">CSE Engeering</a></li>
                                    <li><a href="#">Graduation</a></li>
                                    <li><a href="#">Courses</a></li>
                                    <li><a href="#">Admission</a></li>
                                    <li><a href="#">Internation</a></li>
                                    <li><a href="#">Faqs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="single_widget">
                            <h3>Latest News</h3>
                            <div class="widget-item">
                                <div class="widget-image">
                                    <a href="#"><img src="assets/images/blog_01.jpg" alt="blog one" /></a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#">7 Step Social Media Marke ting Strategy</a></h5>
                                    <div class="widget-meta">
                                        <span>05 Jan 2019</span>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-item">
                                <div class="widget-image">
                                    <a href="#"><img src="assets/images/blog_02.jpg" alt="blog one" /></a>
                                </div>
                                <div class="widget-content">
                                    <h5><a href="#">7 Step Social Media Marke ting Strategy</a></h5>
                                    <div class="widget-meta">
                                        <span>05 Jan 2019</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom-wrapper border-top py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-bottom">
                            <div class="copyright-text">
                                <p>Eduaid 2019. All Rights Reserved.</p>
                            </div>
                            <div class="social-accounts">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> -->
<!-- End Footer -->



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