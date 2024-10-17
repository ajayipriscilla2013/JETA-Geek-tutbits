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
    <link rel="stylesheet" href="assests/css/style.css">
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
                            <h1 class="display-2">Student Evaluation Form</h1>
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
                        <!-- Form Header -->
                        <!-- <h2>Students Evaluation Form</h2> -->
    
                        <!-- Form Start -->
                        <form action="std_eval_form_submit.php" method="POST" class="apply_form bg_dark_9 p-5">
                            <!-- Section 1: Student Information -->
                            <h3>Student Information</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_first_name">Student's Full Name</label>
                                        <input type="text" id="user_first_name" name="user_first_name" class="form-control" placeholder="Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="students_id">Student's ID</label>
                                        <input type="text" id="students_id" name="students_id" class="form-control" placeholder="Student's ID" required>
                                    </div>
                                </div>
                            </div>
    
                            <br>
    
                            <!-- Section 2: Course Information -->
                            <h3>Course Information</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="course_title">Course Title/Code</label>
                                        <input type="text" id="course_title" name="course_title" class="form-control" placeholder="Enter Course Title/Code" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_time">Start Time</label>
                                        <input type="time" id="start_time" name="start_time" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_time">End Time</label>
                                        <input type="time" id="end_time" name="end_time" class="form-control" required>
                                    </div>
                                </div>
                            </div>
    
                            <br>
    
                            <!-- Section 3: Tutor Information -->
                            <h3>Tutor Information</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_name">Tutor's Full Name</label>
                                        <input type="text" id="tutor_name" name="tutor_name" class="form-control" placeholder="Tutor's Full Name" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for=""over_all_rating>Overall Satisfaction with Tutor (Rating: 1 to 5 stars)</label>
                                        <div class="rating" name= "over_all_rating"id="over_all_rating">
                                            <span class="star" data-value="5">☆</span>
                                            <span class="star" data-value="4">☆</span>
                                            <span class="star" data-value="3">☆</span>
                                            <span class="star" data-value="2">☆</span>
                                            <span class="star" data-value="1">☆</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            <!-- Additional rating sections go here -->
    
                            <br>
    
                            <!-- Section 5: Self Evaluation -->
                            <h3>Self Evaluation</h3>
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>How well do you understand the course content after the session? (Rating: 1 to 5 stars)</label>
                                        <div class="rating" id="self_evaluation_rating" name="self_evaluation_rating">
                                            <span class="star" data-value="5">☆</span>
                                            <span class="star" data-value="4">☆</span>
                                            <span class="star" data-value="3">☆</span>
                                            <span class="star" data-value="2">☆</span>
                                            <span class="star" data-value="1">☆</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Are you improving in this subject?</label>
                                        <select id="subject_improvement" name="subject_improvement" class="form-control" required>
                                            <option value="">Select Option</option>
                                            <option value="2">Yes</option>
                                            <option value="3">No</option>
                                        </select>
                                    </div>
                                </div>
    
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Do you feel prepared for upcoming tests/exams?</label>
                                        <select id="exam_prep" name="exam_prep" class="form-control" required>
                                            <option value="">Select Option</option>
                                            <option value="2">Yes</option>
                                            <option value="3">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="comments">Additional comments</label>
                                        <textarea name="comments" class="form-control" id="comments" cols="30" rows="5" placeholder="additional comments"></textarea>
                                    </div>
                                    <div class="col-md-12 mx-auto text-center">
                                        <button type="submit" class="button_one mt-3">Submit Form</button>
                                    </div>
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