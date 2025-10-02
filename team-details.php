<?php $head_title = "Team Details || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Team Details";
require_once('parts/page-title.php');
?>





<!--Start Team Details-->
<section class="team-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="team-details__content">
                    <div class="title-box1">
                        <h2>Wade Warren</h2>
                        <div class="text">
                            <p>Chief Officer Yacht</p>
                            <p>Our yachts are staffed by an expert crew dedicated to ensuring your voyage is as
                                enjoyable and luxurious as possible. Each member of the crew is highly trained
                                and experienced, bringing a wealth of knowledge and a commitment to exceptional
                                service.</p>
                            <p>The captain, with extensive maritime expertise, navigates the yacht safely to the
                                most stunning destinations, offering insights and recommendations for your
                                journey.</p>
                        </div>
                    </div>

                    <div class="contact-box">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-4">
                                <div class="single-contact-box">
                                    <div class="icon">
                                        <i class="icon-pin"></i>
                                    </div>
                                    <div class="title">
                                        <h3>New Hyde, NYC</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4">
                                <div class="single-contact-box">
                                    <div class="icon">
                                        <i class="icon-envelope"></i>
                                    </div>
                                    <div class="title">
                                        <h3><a href="mailto:abc@nauka.com">abc@nauka.com</a></h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-md-4">
                                <div class="single-contact-box">
                                    <div class="icon">
                                        <i class="icon-phone-call"></i>
                                    </div>
                                    <div class="title">
                                        <h3><a href="tel:3336660000">333 666 0000</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="title-box2">
                        <h2>Personal Experience</h2>
                        <div class="text">
                            <p>Our yacht crew delivers an unparalleled personal experience, ensuring your
                                journey is as memorable as it is luxurious. Each crew member is highly trained
                                and dedicated to providing exceptional service tailored to your needs.</p>
                        </div>
                    </div>

                    <div class="title-box3">
                        <h2>Professional Skills</h2>
                        <div class="text">
                            <p>The captain, with extensive knowledge of navigation and maritime regulations,
                                expertly guides the yacht to the most scenic and desirable locations. Our chefs,
                                trained in gourmet cuisine, craft exquisite meals tailored to your preferences,
                                using the freshest ingredients.</p>
                        </div>
                    </div>

                    <div class="progress-levels">

                        <!--Start Progress Box-->
                        <div class="progress-box wow">
                            <div class="top">
                                <p>Latest Boat Experience</p>
                            </div>
                            <div class="inner count-box">
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="bar-fill" data-percent="95">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="95">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Progress Box-->
                        <!--Start Progress Box-->
                        <div class="progress-box wow">
                            <div class="top">
                                <p>Sailing Boat Experience</p>
                            </div>
                            <div class="inner count-box">
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="bar-fill" data-percent="85">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="85">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Progress Box-->
                        <!--Start Progress Box-->
                        <div class="progress-box wow">
                            <div class="top">
                                <p>Power Boat Experience</p>
                            </div>
                            <div class="inner count-box">
                                <div class="bar">
                                    <div class="bar-innner">
                                        <div class="bar-fill" data-percent="90">
                                            <div class="skill-percent">
                                                <span class="count-text" data-speed="3000"
                                                    data-stop="90">0</span>
                                                <span class="percent">%</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Progress Box-->
                    </div>


                    <div class="contact__form">
                        <form id="contact__form" name="contact-style1_form" action="#" method="post">
                            <div class="inner-title">
                                <h2>Send Message</h2>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="form_name" id="formName"
                                                placeholder="Your name" required="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" name="form_email" id="formEmail"
                                                placeholder="Your email" required="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <textarea name="form_message" id="formMessage"
                                                placeholder="Type message" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12">
                                    <button class="btn-box btn-one" type="submit"
                                        data-loading-text="Please wait...">
                                        <span class="txt">Send Message</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>


            <div class="col-xl-6 col-lg-6 col-md-12">
                <div class="team-details__img">
                    <div class="inner">
                        <img src="assets/images/team/team-details-img-1.jpg" alt="image">
                    </div>
                    <ul class="team-details__social-link clearfix">
                        <li>
                            <a href="#">
                                <i class="icon-facebook-logo"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-twitter-1"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-linkedin"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="icon-dribble"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </div>
</section>
<!--End Team Details-->

<!--Start Cta Style1-->
<section class="cta-style1 cta-style1--style2">
    <div class="container">
        <div class="cta-style1__inner">
            <div class="cta-style1__bg"
                style="background-image: url(assets/images/backgrounds/cta-v1__bg.png);"></div>
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