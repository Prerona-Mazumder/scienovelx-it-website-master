<?php
require('includes/header.php');

?>

<?php
require('includes/navbar.php');
?>


<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
<link rel="stylesheet" href="fonts/icomoon/style.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/jquery-ui.css">
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">

<link rel="stylesheet" href="css/jquery.fancybox.min.css">

<link rel="stylesheet" href="css/bootstrap-datepicker.css">

<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

<link rel="stylesheet" href="css/aos.css">
<link href="css/jquery.mb.YTPlayer.min.css" media="all" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/fontawesome-free-5.14.0-web/css/all.css">

<link rel="stylesheet" href="css/style.css">

<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Job Search</h3>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Job Search</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 form-group">
                <img src="images/person_3_sq.jpg" width="400px">
            </div>
            <div class="col-md-6 form-group text-black mb-4">
                <h1>Build your future with Scienovelx</h1>
            </div>
        </div>
    </div>
</div>

<div class="job pb-5">
    <form  id="jobSearchForm">
        <div class="container">
            <div class="row">
                <div class="col-md-4 job-group">
                    <label for="fname">First Name<span>*</span></label>
                    <input type="text" id="first_name" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-4 job-group">
                    <label for="mname">Middle Name (Optional)</label>
                    <input type="text" id="middle_name" class="form-control form-control-lg">
                </div>
                <div class="col-md-4 job-group">
                    <label for="lname">Last Name<span>*</span></label>
                    <input type="text" id="last_name" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 job-group">
                    <label for="option">Gender<span>*</span></label>
                    <select id="gender" class="form-control form-control-lg" required>
                        <option value="" disabled selected hidden>Select</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col-md-6 job-group">
                    <label for="option">Job Type<span>*</span></label>
                    <select id="job_type" class="form-control form-control-lg" required>
                        <option value="" disabled selected hidden>Select</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Internship</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 job-group">
                    <label for="eaddress">Email Address<span>*</span></label>
                    <input type="email" id="email" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                    <label for="phone">Contact Number<span>*</span></label>
                    <input type="tel" id="organisation" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 job-group">
                    <label for="Country">Country<span>*</span></label>
                    <input type="text" id="Country" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                    <label for="City">City<span>*</span></label>
                    <input type="City" id="city" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 job-group">
                    <label for="Experience">Experience Level<span>*</span></label>
                    <input type="text" id="exp" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-4 job-group">
                    <label for="option">Years<span>*</span></label>
                    <select id="Years" class="form-control form-control-lg" required>
                        <option value="" disabled selected hidden>Select</option>
                        <option> 1 Year</option>
                        <option> 2 Year</option>
                        <option> 3 Year</option>
                        <option> 4 Year</option>
                        <option> 5 Year</option>
                        <option>More than 5 Year</option>
                    </select>
                </div>
                <div class="col-md-4 job-group">
                    <label for="option">Months<span>*</span></label>
                    <select id="Months" class="form-control form-control-lg" required>
                        <option value="" disabled selected hidden>Select</option>
                        <option> 0 Months</option>
                        <option> 1 Months</option>
                        <option> 2 Months</option>
                        <option> 3 Months</option>
                        <option> 4 Months</option>
                        <option> 5 Months</option>
                        <option> 6 Months</option>
                        <option> 7 Months</option>
                        <option> 8 Months</option>
                        <option> 9 Months</option>
                        <option> 10 Months</option>
                        <option> 11 Months</option>
                    </select>
                </div>

            </div>

            <div class="row">
                <div class="col-md-6 job-group">
                    <label for="Skill">Primalry Skill<span>*</span></label>
                    <input type="Text" id="skill" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                    <label for="option">Job Category<span>*</span></label>
                    <select id="job_category" class="form-control form-control-lg" required>
                        <option value="" disabled selected hidden>Select your preference</option>
                        <option>Digital</option>
                        <option>Engineering & Technology</option>
                        <option>Business Process</option>
                        <option>Sales & Marketing</option>
                        <option>Consulting</option>
                        <option>Corporate</option>
                        <option>IT Infrastructure</option>
                        <option>Delivery Management</option>
                        <option>Graphic Designing</option>
                        <option>Teacher / Technical Expert / Trainer</option>
                        <option>Communications</option>
                        <option>Manufacturing</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8 job-group">
                    <input type="checkbox" id="chk1" name="vehicle1" value="Bike" required>
                    <label for="chk1"> I would like Scienovelx to contact me based on the information provided above.</label>
                </div>
                <div class="col-md-8 job-group">
                    <input type="checkbox" id="chk2" name="vehicle1" value="Bike" required>
                    <label for="chk2"> I confirm that I have read and agreed to Scienovelx's Privacy Policy.</label>
                </div>
                <div class="col-md-8 job-group">
                    <input type="checkbox" id="chk3" name="vehicle1" value="Bike" required>
                    <label for="chk2"> I confirm that I have read and agreed to Scienovelx's Terms & Conditions.</label>
                </div>
                <div class="col-lg-12 col-md-12 text-center">
                    <button type="submit" id="submit" name="submit" class="default-btn btn-bg-two border-radius-50">
                        SUBMIT<i class='bx bx-chevron-right'></i>
                    </button>
                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                    <div class="clearfix"></div>
                </div>

            </div>
        </div>
    </form>

</div>

<?php
require('includes/footer.php');
?>

<script src="assets/js/jquery.min.js"></script>

<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/owl.carousel.min.js"></script>

<script src="assets/js/jquery.magnific-popup.min.js"></script>

<script src="assets/js/jquery.nice-select.min.js"></script>

<script src="assets/js/wow.min.js"></script>

<script src="assets/js/meanmenu.js"></script>

<script src="assets/js/jquery.ajaxchimp.min.js"></script>

<script src="assets/js/form-validator.min.js"></script>

<script src="assets/js/contact-form-script.js"></script>

<script src="assets/js/custom.js"></script>
<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/bootstrap-datepicker.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.mb.YTPlayer.min.js"></script>
<!-- CAPTCHA -->
<script src="https://www.google.com/recaptcha/api.js?render=6LdJecsZAAAAAG7Y8xN4y9O4XvVH_OiObxv2vyFI"></script>

</body>

</html>