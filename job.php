<?php
require('includes/header.php');
$page = 'more';
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


<div class="site-section pt-5">
    <div class="container">
        <div class="">
        <div class=" text-black  pb-5" style=" text-align: center; width: 100%; display: block;">
                <h1>Build your future with Scienovelx</h1>
            </div>
            <div class="form-group" style="text-align: center;">
                <img src="images/person_3_sq.jpg" width="600px">
            </div>
           
        </div>
    </div>
</div>

<div class="job pb-5 pt-5">
    <form  id="jobSearchForm">
        <div class="container">
            <div class="row">
                <div class="col-md-4 job-group">
                    
                    <input type="text" id="first_name" placeholder="Name" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-4 job-group">
                    
                    <input type="text" id="middle_name" placeholder="Middle Name" class="form-control form-control-lg">
                </div>
                <div class="col-md-4 job-group">
                    
                    <input type="text" id="last_name" placeholder="Surname" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 job-group">
                    
                    <select id="gender" class="form-control form-control-lg" required>
                        <option value="" selected>Gender</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col-md-6 job-group">
                    
                    <select id="job_type" class="form-control form-control-lg" required>
                        <option value="" selected>Job Type</option>
                        <option>Full Time</option>
                        <option>Part Time</option>
                        <option>Internship</option>
                    </select>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6 job-group">
                    
                    <input type="email" id="email" placeholder="Email" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                    
                    <input type="tel" id="organisation" placeholder="Phone no." class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 job-group">
                    
                    <input type="text" id="Country" placeholder="Country" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                    
                    <input type="City" id="city" placeholder="City" class="form-control form-control-lg" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 job-group">
                    
                    <input type="text" id="exp" placeholder="Experience" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-4 job-group">
                    
                    <select id="Years" class="form-control form-control-lg" required>
                        <option value="" selected>Experience</option>
                        <option> 1 Year</option>
                        <option> 2 Year</option>
                        <option> 3 Year</option>
                        <option> 4 Year</option>
                        <option> 5 Year</option>
                        <option>More than 5 Year</option>
                    </select>
                </div>
                <div class="col-md-4 job-group">
                    
                    <select id="Months" class="form-control form-control-lg" placeholder="Months" required>
                        <option value="" selected>Months</option>
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
                    
                    <input type="Text" id="skill" placeholder="Skills" class="form-control form-control-lg" required>
                </div>
                <div class="col-md-6 job-group">
                   
                    <select id="job_category" class="form-control form-control-lg" required>
                        <option value="" selected >Job Category</option>
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