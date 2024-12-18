
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
                            <h1 class="display-2">Coordinator Application Form</h1>
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
                        <!-- <h2> Coordinator Application Form</h2> -->
                        <h4></h4>
                        <form action="coord_app_submit.php" method="POST" class="apply_form bg_dark_9 p-5">
    <div class="row g-4">
        <div class="col-md-6">
            <div class="form-group">
                <label for="user_first_name">First Name</label>
                <input type="text" class="form-control" name="user_first_name" placeholder="First Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="user_last_name">Last Name</label>
                <input type="text" class="form-control" name="user_last_name" placeholder="Last Name" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_email">Email Address</label>
                <input type="email" id="coordinator_email" class="form-control" name="coordinator_email" placeholder="Email Address" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_phone">Phone Number</label>
                <input type="text" id="coordinator_phone" class="form-control" name="coordinator_phone" placeholder="phone_number" required>
            </div>
        </div>
    <!-- start adress -->
     <div class="abc_h">
        <h3>Residential Details</h3>
    </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_address">Address</label>
                <input type="text" id="coordinator_address" class="form-control" name="coordinator_address" placeholder="Address" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_city">City</label>
                <input type="text" id="coordinator_city" class="form-control" name="coordinator_city" placeholder="City" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_state">State</label>
                <input type="text" id="coordinator_state" class="form-control" name="coordinator_state" placeholder="State" required>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_country">Country</label>
                <input type="text" id="coordinator_country" class="form-control" name="coordinator_country" placeholder="country" required>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label for="coordinator_zipcode">Zip Code</label>
                <input type="text" id="coordinator_zipcode" class="form-control" name="coordinator_zipcode" placeholder="e.g., 12345" pattern="\d{5}(-\d{4})?" title="Enter a valid zip code (e.g., 12345 or 12345-6789)" required>
            </div>
        </div>

        <!-- other info -->
         <h3> Other information </h3>
        <div class="col-md-6">
            <div class="form-group">
                <label for="preferred_communication">Preferred Method of Communication</label>
                <select id="preferred_communication" class="form-control" name="preferred_communication" required>
                    <option value="Email">Email</option>
                    <option value="Phone">Phone</option>
                    <option value="SMS">SMS</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="experience_background">Experience/Background</label>
                <textarea id="experience_background" class="form-control" name="experience_background" rows="3" placeholder="Experience/Background"></textarea>
            </div>
        </div>
        <div class="col-md-12 mx-auto text-center">
            <button type="submit" class="button_one mt-3">Submit Form</button>
          </div>
        </div>
      </form>
     </div>
    </div>




    <!-- End Page -->

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
                                    <p>900 Lucerne Station Road Terrace, Orlando, FL 32806, USA contact@Tutbits.com</p>
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
                                    <p>Tutbits 2019. All Rights Reserved.</p>
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