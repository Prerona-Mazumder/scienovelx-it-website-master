<?php require('includes/header.php'); ?>

<div class="preloader">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="spinner"></div>
        </div>
    </div>
</div>


<header class="top-header top-header-bg">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 col-md-6">
                <div class="top-head-left">
                    <div class="top-contact">
                        <h3>Support By : <a href="tel:+917585986669">+91 75859 86669</a></h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <div class="top-header-right">
                    <div class="top-header-social">
                        <ul>
                            <li>
                                <a href="https://www.facebook.com/scienovelx/" target="_blank">
                                    <i class='bx bxl-facebook'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/scienovelx" target="_blank">
                                    <i class='bx bxl-twitter'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://in.linkedin.com/company/scienovelx/" target="_blank">
                                    <i class='bx bxl-linkedin-square'></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/" target="_blank">
                                    <i class='bx bxl-instagram'></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="language-list">
<select class="language-list-item">
<option>English</option>
<option>العربيّة</option>
<option>Deutsch</option>
<option>Português</option>
<option>简体中文</option>
</select> -->
                </div>
            </div>
        </div>
    </div>
    </div>
</header>

<?php
require('includes/navbar.php');
?>


<div class="search-overlay">
    <div class="d-table">
        <div class="d-table-cell">
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-layer"></div>
            <div class="search-close">
                <span class="search-close-line"></span>
                <span class="search-close-line"></span>
            </div>
            <div class="search-form">
                <form>
                    <input type="text" class="input-search" placeholder="Search here...">
                    <button type="submit"><i class='bx bx-search'></i></button>
                </form>
            </div>
        </div>
    </div>
</div>


<div class="inner-banner">
    <div class="container">
        <div class="inner-title text-center">
            <h3>Contact Us</h3>
            <ul>
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <i class='bx bx-chevrons-right'></i>
                </li>
                <li>Contact Us</li>
            </ul>
        </div>
    </div>
    <div class="inner-shape">
        <img src="assets/images/shape/inner-shape.png" alt="Images">
    </div>
</div>


<div class="contact-form-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <h2>Let's Send Us a Message Below</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info mr-20">
                    <span>Contact Info</span>
                    <h2>Let's Connect With Us</h2>
                    <!-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam imperdiet varius mi, ut hendrerit magna mollis ac. </p> -->
                    <ul>
                        <li>
                            <div class="content">
                                <i class='bx bx-phone-call'></i>
                                <h3>Phone Number</h3>
                                <a href="tel:+917585986669">+91 75859 86669</a>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bxs-map'></i>
                                <h3>Address</h3>
                                <span> Plot No.E-1, Block K, SP Shukhobrishti Action Area III, Newtown, E-2, Rajarhat, Kolkata, West Bengal 700135</span>
                            </div>
                        </li>
                        <li>
                            <div class="content">
                                <i class='bx bx-message'></i>
                                <h3>Contact Info</h3>
                                <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#1e767b7272715e6a7b7d767b66307d7173"><span class="__cf_email__" data-cfemail="0f676a6363604f7b6a6c676a77216c6062">[email&#160;protected]</span></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <style>
                #form-success {
                    width: 500px;
                    height: 100px;
                    box-shadow: 0 0 8px #444;
                    padding: 14px 20px;
                    border-radius: 12px;
                    color: green;
                    font-weight: 600;
                    font-size: 1.2rem;
                    text-align: center;
                    position: absolute;
                    z-index: 999;
                    background: #fff;
                    vertical-align: bottom;
                    display: none;
                    left: 8rem;
                }
            </style>
            <div class="col-lg-8">
                <div class="contact-form">
                    <div id="form-success">Your enquiry has been submitted succesfully.</div>
                    <form id="contact-form" action="check.php" method="POST">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Name <span>*</span></label>
                                    <input type="text" name="name" id="name" class="form-control" required data-error="Please Enter Your Name" placeholder="Name">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Email <span>*</span></label>
                                    <input type="email" name="email" id="email" class="form-control" required data-error="Please Enter Your Email" placeholder="Email">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Phone Number <span>*</span></label>
                                    <input type="text" name="phone_number" id="phone_number" required data-error="Please Enter Your number" class="form-control" placeholder="Phone Number">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Your Subject <span>*</span></label>
                                    <input type="text" name="sub" id="msg_subject" class="form-control" required data-error="Please Enter Your Subject" placeholder="Your Subject">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Your Message <span>*</span></label>
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>
                            <!-- <div class="col-lg-12 col-md-12">
                                    <div class="agree-label">
                                        <input type="checkbox" id="chb1">
                                        <label for="chb1">
                                            Accept <a href="terms-condition.php">Terms & Conditions</a> And <a
                                                href="privacy-policy.php">Privacy Policy.</a>
                                        </label>
                                    </div>
                                </div> -->
                            <div class="col-lg-12 col-md-12 text-center">
                                <button type="submit" id="submit" name="submit" class="default-btn btn-bg-two border-radius-50">
                                    Send Message <i class='bx bx-chevron-right'></i>
                                </button>
                                <div id="msgSubmit" class="h3 text-center hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="map-area">
    <div class="container-fluid m-0 p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3684.2651473949863!2d88.50687561427362!3d22.5691844387852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a020afe3fa83dab%3A0xda5c16b563780319!2sShapoorji%20Pallonji%20Housing%20Complex!5e0!3m2!1sen!2sin!4v1632485634247!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<?php
require('includes/footer.php');
?>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $('document').ready(function() {
        $('#contact-form').on('submit', function(e) {
            e.preventDefault();
            // alert("success");

            var form = $(this);
            // var url = "dave-paterson";
            // alert(form.serialize());
            $.ajax({
                type: "POST",
                url: 'check.php',
                data: form.serialize(),
                beforeSend: function() {
                    $('#contact-form').css('opacity', '0.5');
                },
                success: function(data) {
                    $('#form-success').css('display', 'block');
                    setTimeout(function() {

                        $('#form-success').css('display', 'none');
                        $('#contact-form').css('opacity', '1');

                    }, 2000);
                    $('#contact-form')[0].reset();
                }

            });
        });




    });
</script>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
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
</body>

<!-- Mirrored from templates.hibootstrap.com/techex/default/contact.php by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 11 Jul 2021 11:56:04 GMT -->

</html>