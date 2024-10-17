
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
    <link rel="stylesheet" href="style.css">
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
                            <h1 class="display-2">Tutor Application Form</h1> 
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
                        <!-- <h2>Tutors Application Form</h2> -->
                        <form action="tutor_app_submit.php"  method="POST" class="apply_form bg_dark_9 p-5">
                            <div class="row g-4">
                                <!-- Full Name -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_first_name">First Name</label>
                                        <input type="text" id="tutor_first_name"  name="tutor_first_name" class="form-control" placeholder="First Name" required >
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_last_name">Last Name</label>
                                        <input type="text"  name= "tutor_last_name" id="tutor_last_name" class="form-control" placeholder="Last Name" required>
                                    </div>
                                </div>
    
                                <!-- Email and Phone Number -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_email">Email Address</label>
                                        <input type="email" id="tutor_email" name="tutor_email" class="form-control" placeholder="Email Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_phone">Phone Number</label>
                                        <input type="text" id="tutor_phone" name="tutor_phone" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                </div>
    
                                <!-- Address -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_address">Address</label>
                                        <input type="text" name="tutor_address" id="tutor_address" class="form-control" placeholder="Street Address" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_city">City</label>
                                        <input type="text" name="tutor_city" id="tutor_city" class="form-control" placeholder="City" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_state">State</label>
                                        <input type="text" id="tutor_state" name="tutor_state" class="form-control" placeholder="State" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_zipcode">Zip Code</label>
                                        <input type="text" name="tutor_zipcode" id="tutor_zipcode" class="form-control" placeholder="e.g., 12345" pattern="\d{5}(-\d{4})?" title="Enter a valid zip code (e.g., 12345 or 12345-6789)">
                                    </div>
                                </div>
    
                                <!-- Preferred Method of Communication -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="preferred_communication">Preferred Method of Communication</label>
                                        <select id="preferred_communication" name="preferred_communication" class="form-control" required>
                                            <option value="Email">Email</option>
                                            <option value="Phone">Phone</option>
                                            <option value="SMS">SMS</option>
                                        </select>
                                    </div>
                                </div>
    
                                <!-- Education Background -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_qualification">Highest Qualification</label>
                                        <select name = "tutor_qualification" id="tutor_qualification" class="form-control" required>
                                            <option value="B.Sc">Bachelor</option>
                                            <option value="M.Sc">Masters</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_specialization">Area of Specialization</label>
                                        <input type="text" id="tutor_specialization" name ="tutor_specialization" class="form-control" placeholder="Area of Specialization" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_university">University/Institution Attended</label>
                                        <input type="text" id="tutor_university" name = "tutor_university" class="form-control" placeholder="University/Institution" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_experience">Years of Tutoring Experience</label>
                                        <input type="number" id="tutor_experience" name = "tutor_experience" class="form-control" placeholder="Years of Experience" required>
                                    </div>
                                </div>
    
                                <!-- Courses Available to Tutor -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tutor_courses">List The Courses You can Handle Competently</label>
                                        <textarea id="tutor_courses" name = "tutor_courses" class="form-control" rows="3" placeholder="List Courses" required></textarea>
                                    </div>
                                </div>
    
                                <!-- Level of Expertise -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_expertise">Level of Expertise</label>
                                        <select id="tutor_expertise" name ="tutor_expertise" class="form-control" required>
                                            <option value="Beginner">Beginner</option>
                                            <option value="Intermediate">Intermediate</option>
                                            <option value="Advanced">Advanced</option>
                                        </select>
                                    </div>
                                </div>
    
                                <!-- Tutoring Schedule -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="tutor_schedule">Availability (Select specific days and time slots)</label>
                                        <textarea id="tutor_schedule" name="tutor_schedule" class="form-control" row s="3" placeholder="e.g., Monday-Friday, Wednesday-Friday" required></textarea>
                                    </div>
                                </div>
    
                                <!-- Submit Button -->
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