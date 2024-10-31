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
    <header>
        <div class="header_top_area my-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header_top d-flex justify-content-between">
                            <div class="site_logo">
                                <a href="index.php"><img src="assets/img/pic10 logo.jpg" alt="logo" height="300px"
                                        width="300px" class="img-fluid"></a>
                            </div>
                        <div class="title_name">
                            <div class="school_name">
                                <p> ⁠TUTBITS (A Tutorial Platform for Academic Distinctions)</p>
                                
                            </div>
                        </div>
                        </div>
                            <div class="site_info d-flex justify-content-between">
                                <div class="single_info">
                                    <img src="assets/images/location.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Location</h6>
                                        <p> Plot 36, Great Estate Phase One, Atan-Ota, Ogun State, Nigeria. </p>
                                    </div>

                                    <!-- <div class="school_name">
                                        <p>Tutbits (An undergraduate tutorial platform)
                                        </p>
                                    </div>  -->
                                </div>
                                <div class="single_info">
                                    <img src="assets/images/phone.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>+234 810 1096 623 </p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <button class="special-button"
                                        onclick="window.location.href = 'std_app_form.php';">Apply Now <i
                                            class="fa fa-angle-right"></i> <span class="button_icon"><i
                                                class="far fa-file-alt"></i></span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-menu-area bg_dark_mobile">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-menu default_bg">
                            <nav class="navbar navbar-expand-lg">
                                <div class="mobile_site_logo d-none">
                                    <a href="index.php"><img src="assets/img/pic10 logo.jpg" alt="logo"
                                            class="img-fluid"></a>
                                </div>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                                        <li class="nav-item dropdown">
                                            <a class="dropdown-item" href="index.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.php">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown">
                                                Forms
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="nav-item dropdown">
                                                <li><a class="dropdown-item" href="std_app_form.php">University Student Application Form</a></li>
                                               <!-- <li><a class="dropdown-item" href="coord_app_form.php">Coordinator Application Form</a></li> -->
                                                <!-- <li><a class="dropdown-item" href="tutor_app_form.php">Tutor Application Form</a></li> -->
                                                <!-- <li><a class="dropdown-item" href="tutor_log_form.php">Tutorship Log Form</a></li> -->
                                               // <!-- <li><a class="dropdown-item" href="std_eval_form.php">Students Evaluation Form</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.php" class="nav-link">Contact Us</a>
                                        </li>
                                         <li><a class="dropdown-item" href="tutbits_high_sch.php">Tutbits For High School</a></li>                                                          </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </header>    
    <!-- End Header -->



    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(assets/images/contact.jpg)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <!-- <h1 class="display-2">Contact Form</h1> -->
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> - Contact Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Page Wrapper-->
    <div class="page-wrapper section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                    <div class="main-content">
                        <div class="contact-from-wrapper-2">
                            <h2 class="section-heading">Contact Us</h2>
                            <form action="contact_submit.php" method="POST" class="contact-form mt-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" placeholder="Enter Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone_number" id="phone_number" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30"
                                                rows="6" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mx-auto text-center">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="highlights-section hover_bg text-white p-4">
                        <h4>"For any further assistance"</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> Plot 36, Great Estate Phase One, Atan-Ota, Ogun
                                State, Nigeria.</li>
                            <li><i class="fas fa-mobile-alt"></i> +234 810 1096 623</li><br>
                            <li><i class="fas fa-envelope">info@tutbits.net</i>
                                <tutbits.sev.jetacoms.tech>
                                    </tutbits>
                            </li>
                        </ul>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-behance"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area section-ptb-3" data-aos="fade-up">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="embeded-map-area">
                            <div class="mapouter">
                                <div class="gmap_canvas">
                                    <iframe width="100%" height="500" id="gmap_canvas"
                                     src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15851.574316013613!2d3.070692173780827!3d6.660109571125898!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1730340940876!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Page Wrapper-->

    <div class="footer-bottom-wrapper border-top py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom">
                        <div class="copyright-text">
                            <p>Tutbits 2024. All Rights Reserved.</p>
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
    </footer>
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