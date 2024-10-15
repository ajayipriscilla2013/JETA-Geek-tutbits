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
                                <a href="index.html"><img src="assets/img/pic10 logo.jpg" alt="logo" height="140px"
                                        width="140px" class="img-fluid"></a>
                            </div>
                            <div class="title_name">
                            <div class="school_name">
                                <p> ⁠TUTBITS(A Tutorial Platform for Academic Distinctions)</p>
                                
                            </div>
                        </div>
                            <div class="site_info d-flex justify-content-between">
                                <div class="single_info">
                                    <img src="assets/images/location.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Location</h6>
                                        <p> Plot 36, Great Estate Phase One, Atan-Ota, Ogun State, Nigeria.
                                            </p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <img src="assets/images/phone.png" alt="Location" class="img-fluid">
                                    <div class="info_data">
                                        <h6>Phone</h6>
                                        <p>+234 810 1096 623</p>
                                    </div>
                                </div>
                                <div class="single_info">
                                    <button class="special-button"
                                        onclick="window.location.href = 'apply_form.html';">Apply Now <i
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
                                    <a href="index.html"><img src="assets/images/footer_logo.png" alt="logo"
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
                                            <a class="dropdown-item" href="index.html">Home</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about.html">About</a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                role="button" data-bs-toggle="dropdown">
                                                Forms
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li class="nav-item dropdown">
                                                <li><a class="dropdown-item" href="std_app_form.html">Student Application Form</a></li>
                                                <li><a class="dropdown-item" href="coord_app_form.html">Coordinator Application Form</a></li>
                                                <li><a class="dropdown-item" href="tutor_app_form.html">Tutor Application Form</a></li>
                                                <li><a class="dropdown-item" href="tutor_log_form.html">Tutorship Log Form</a></li>
                                                <li><a class="dropdown-item" href="std_eval_form.html">Students Evaluation Form</a></li>
                                            </ul>
                                        </li>
                                        <li class="nav-item">
                                            <a href="contact.html" class="nav-link">Contact Us</a>
                                        </li>
                                        <!-- <li><a class="dropdown-item" href="gallery.html">Gallery</a></li> -->
                                 
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </header>
    <!-- End Header -->



    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(assets/img/pic21.jpg)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2">Tutorship Log Form</h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.html">Home</a> - Apply</p>
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
                        <div class= "tut-frm">
                            <h2>Tutorship Form </h2>
                        </div>
                        <form action="tutorship_log_submit.php"  method="POST" class="apply_form bg_dark_9 p-5">
                            <div class="row g-4">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="user_first_name">Tutor Name</label>
                                        <input type="text" class="form-control" placeholder="Tutor Name" name="user_first_name" id="user_first_name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="tutor_id">Tutor ID </label>
                                        <input type="number" class="form-control" placeholder="Enter ID" name="tutor_id" id="tutor_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="students_name">Student’s Name</label>
                                        <input type="text" class="form-control" placeholder="Enter name" name="students_name" id="students_name">
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="students_id">Student's ID</label>
                                        <input type="number" class="form-control" placeholder="Student id" name="students_id" id="students_id">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="students_course_title">Course Title (subject being tutored)</label>
                                        <input type="text" class="form-control" placeholder=" Enter course Title" name="students_course_title" id="students_course_title">
                                    </div>
                                </div>
                                
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="students_course_code">Course Code</label>
                                        <input type="alphanumeric" class="form-control"
                                            placeholder=" Enter course code" name="students_course_code" id="students_course_code">
                                    </div>
                                </div>

                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_session"> Date of Session</label>
                                        <input type="date" class="form-control" placeholder="Enter date of session" name="date_of_session" id="date_of_session">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="start_time">Start Time </label>
                                        <input type="time" class="form-control" placeholder="Enter start time" name="start_time" id="start_time">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="end_time">End Time </label>
                                        <input type="time" class="form-control" placeholder="Enter end time" name="end_time" id="end_time">
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="session_type">Type of session</label>
                                        <select name="session_type" id="session_type" class="form-control">
                                            <option value="1"> Select session type</option>
                                            <option value="2"> One-on-One</option>
                                            <option value="3"> Group</option>
                                        </select>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location_platform">Location/Platform</label>
                                        <select name="location_platform" id="location_platform" class="form-control">
                                            <option value="1"> Select location/platform</option>
                                            <option value="2"> In-Person</option>
                                            <option value="3"> Online</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="topics_covered">Topics covered</label>
                                        <textarea name="topics_covered" class="form-control" id="topics_covered"
                                            cols="30" rows="5" placeholder=" Enter topics covered"></textarea>
                                    </div>
                                </div>
                                <!-- </div> -->
                                <!-- <div class="row"> -->
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="challenges_faced">Challenges Faced</label>
                                        <textarea name="challenges_faced" class="form-control" id="challenges_faced"
                                            cols="30" rows="5" placeholder="Enter challenges faced"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="additional_notes">Additional Notes</label>
                                        <textarea name="additional_notes" class="form-control" id="additional_notes"
                                            cols="30" rows="5" placeholder="Enter additional notes"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="date_of_next_session">Date of Next Session</label>
                                        <input type="date" class="form-control" placeholder="Enter date" name="date_of_next_session" id="date_of_next_session">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="topics_to_be_covered_next">Topics to be covered next session</label>
                                        <textarea name="topics_to_be_covered_next" class="form-control"
                                            id="topics_to_be_covered_next" cols="30" rows="5"
                                            placeholder=" Enter topics to be covered next"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="students_view">Was the session helpful?</label>
                                        <select name="students_view" id="students_view" class="form-control">
                                            <option value="1">Select Option</option>
                                            <option value="2"> Yes</option>
                                            <option value="3"> No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="students_feedback">Additional Student Feedback</label>
                                        <textarea name="students_feedback" class="form-control" id="students_feedback"
                                            cols="30" rows="5" placeholder=" Additional Feedback(optional)"></textarea>
                                    </div>




                                    <script>
                                        document.addEventListener("DOMContentLoaded", function () {
                                            const stars = document.querySelectorAll("#starRating .star");

                                            stars.forEach(star => {
                                                star.addEventListener("click", function () {
                                                    const value = this.getAttribute("data-value");

                                                    // Remove 'selected' class from all stars
                                                    stars.forEach(s => s.classList.remove("selected"));

                                                    // Add 'selected' class to the clicked star and all stars to its left
                                                    stars.forEach(s => {
                                                        if (s.getAttribute("data-value") <= value) {
                                                            s.classList.add("selected");
                                                        }
                                                    });
                                                });

                                                star.addEventListener("mouseover", function () {
                                                    const value = this.getAttribute("data-value");

                                                    // Highlight all stars up to the hovered star
                                                    stars.forEach(s => {
                                                        if (s.getAttribute("data-value") <= value) {
                                                            s.classList.add("hover");
                                                        } else {
                                                            s.classList.remove("hover");
                                                        }
                                                    });
                                                });

                                                star.addEventListener("mouseout", function () {
                                                    stars.forEach(s => s.classList.remove("hover"));
                                                });
                                            });
                                        });

                                    </script>
                                </div>
                            </div>
                    </div>

                    </form>
                </div>
            </div>
        </div>
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