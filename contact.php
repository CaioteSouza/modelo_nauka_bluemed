<?php $head_title = "Contact || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Contact";
require_once('parts/page-title.php');
?>







<!-- Start Contact Style3-->
<section class="contact-style1">
    <div class="container">
        <div class="sec-title text-center">
            <div class="sub-title">
                <h4>Contact us</h4>
            </div>
            <h2>Contact Informations</h2>
        </div>
        <div class="row">

            <!-- Start Single Contact Style1-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-contact-style1">
                    <div class="icon-box">
                        <i class="icon-pin"></i>
                    </div>
                    <div class="content-box">
                        <h3>Our Location</h3>
                        <p>1901 Thornridge Cir. Shiloh, <br>Hawaii 81063</p>
                    </div>
                </div>
            </div>
            <!-- End Single Contact Style1-->
            <!-- Start Single Contact Style1-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-contact-style1">
                    <div class="icon-box">
                        <i class="icon-envelope"></i>
                    </div>
                    <div class="content-box">
                        <h3>Email Address</h3>
                        <p>
                            <a href="mailto:contact@example.com">contact@example.com (Information) </a>
                        </p>
                        <p><a href="mailto:support@example.com">support@example.com (query)</a></p>
                    </div>
                </div>
            </div>
            <!-- End Single Contact Style1-->
            <!-- Start Single Contact Style1-->
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="single-contact-style1">
                    <div class="icon-box">
                        <i class="icon-phone-call"></i>
                    </div>
                    <div class="content-box">
                        <h3>Phone Number</h3>
                        <p><a href="tel:208555-0111">+208 555-0111 (International)</a></p>
                        <p><a href="tel:208555-0112">+208 555-0112 (Local)</a></p>
                    </div>
                </div>
            </div>
            <!-- End Single Contact Style1-->

        </div>
    </div>
</section>
<!-- End Contact Style1-->


<!--Start Main Contact Form-->
<section class="main-contact-form">
    <div class="container">
        <div class="main-contact-form__inner">
            <div class="row">
                <div class="col-xl-6 col-lg-6">
                    <div class="contact-form">
                        <div class="sec-title">
                            <div class="sub-title">
                                <h4>Get in touch</h4>
                            </div>
                            <h2>Send a Message</h2>
                        </div>
                        <form id="contact-form" name="contact_form" class="default-form2"
                            action="assets/inc/sendmail.php" method="post">
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="icon">
                                                <i class="icon-avatar"></i>
                                            </div>
                                            <input type="text" name="form_name" id="formName"
                                                placeholder="your name" required="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <input type="text" name="form_phone" id="formPhone"
                                                placeholder="phone number" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="icon">
                                                <i class="icon-mail-1"></i>
                                            </div>
                                            <input type="email" name="form_email" id="formEmail"
                                                placeholder="Email address" required="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="icon">
                                                <i class="icon-cellphone"></i>
                                            </div>
                                            <input type="text" name="form_subject" id="formSubject"
                                                placeholder="Subject" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <div class="icon icon1">
                                                <i class="icon-type"></i>
                                            </div>
                                            <textarea name="form_message" id="formMessage"
                                                placeholder="Message goes here" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="button-box">
                                        <input id="form_botcheck" name="form_botcheck" class="form-control"
                                            type="hidden" value="">
                                        <div class="btn-box">
                                            <button class="btn-one" type="submit"
                                                data-loading-text="Please wait...">
                                                <i class="icon-thin-arrow"></i>
                                                <span class="txt">Send Your Message</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6">
                    <!--Google Map Start-->
                    <div class="google-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                            class="contact-page__map-box" allowfullscreen></iframe>
                    </div>
                    <!--Google Map End-->
                </div>
            </div>
        </div>

    </div>
</section>
<!--End Main Contact Form-->



<!--Start Cta Style1-->
<section class="cta-style1 cta-style1--style2">
    <div class="container">
        <div class="cta-style1__inner">
            <div class="cta-style1__bg"
                style="background-image: url(assets/images/backgrounds/cta-v1__bg.png);">
            </div>
            <div class="cta-style1__title">
                <h2>Feel the Romance and Thrill of <span>Yachting</span></h2>
            </div>
            <div class="cta-style1__btn">
                <a class="btn-one" href="#">
                    <span class="txt">Book Now</span>
                    <i class="icon-next"></i>
                </a>
            </div>
        </div>
    </div>
</section>
<!--End Cta Style1-->

<?php require_once('parts/footer/footer4.php'); ?>
<?php require_once('parts/layout/bottom-layout.php'); ?>