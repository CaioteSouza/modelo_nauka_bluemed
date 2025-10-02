<?php $head_title = "Blog Details || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Blog Details";
require_once('parts/page-title.php');
?>





<!--Start Blog Details-->
<section class="blog-details">
    <div class="container">
        <div class="row">

            <!-- Start Blog Details Sidebar -->
            <div class="col-xl-4 col-lg-5">
                <div class="blog-details__sidebar blog-details__sidebar--style1">

                    <!-- Start Sidebar Search Box -->
                    <div class="sidebar-search-box">
                        <div class="sidebar-title">
                            <h3>Search</h3>
                        </div>
                        <form class="search-form" action="#">
                            <input placeholder="Search..." type="text">
                            <button type="submit">
                                <i class="icon-search"></i>
                            </button>
                        </form>
                    </div>
                    <!-- End Sidebar Search Box -->

                    <!-- Start Single Sidebar Box -->
                    <div class="single-sidebar-box">
                        <div class="sidebar-title">
                            <h3>Categories</h3>
                        </div>
                        <ul class="single-sidebar__categories clearfix">
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Motor Yachts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Sailing Yachts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Catamarans
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Luxury Yachts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Superyachts
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Expedition Yachts
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Sidebar Box -->

                    <!-- Start Single Sidebar Box -->
                    <div class="single-sidebar-box">
                        <div class="sidebar-title">
                            <h3>Latest News</h3>
                        </div>
                        <ul class="single-sidebar__blog-post clearfix">
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-1-1.jpg" alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a href="#">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title">
                                        <h3>
                                            <a href="blog-single.php">
                                                What’s the difference<br> between a yacht and a boat
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="date">
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p>Apr 17, 2023</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-1-2.jpg" alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a href="#">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title">
                                        <h3>
                                            <a href="blog-single.php">
                                                The Finest Dining Experiences at the World’s
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="date">
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p>Apr 17, 2023</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-1-3.jpg" alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a href="#">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title">
                                        <h3>
                                            <a href="blog-single.php">
                                                Exploring the Amenities of Yacht Rentals
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="date">
                                        <div class="icon">
                                            <span class="icon-calendar"></span>
                                        </div>
                                        <p>Apr 17, 2023</p>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <!-- End Single Sidebar Box -->

                    <!-- Start Single Sidebar Box -->
                    <div class="single-sidebar-box">
                        <div class="sidebar-title">
                            <h3>Photo Gallery</h3>
                        </div>
                        <ul class="single-sidebar__gallery clearfix">
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-1.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-1.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-2.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-2.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-3.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-3.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-4.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-4.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-5.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-5.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-sidebar-gallery-1-6.jpg"
                                        alt="Awesome Image">
                                    <div class="overlay-icon">
                                        <a class="lightbox-image" data-fancybox="gallery"
                                            href="assets/images/blog/blog-sidebar-gallery-1-6.jpg">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Sidebar Box -->

                    <!-- Start Single Sidebar Box -->
                    <div class="single-sidebar-box single-sidebar-box--archives">
                        <div class="sidebar-title">
                            <h3>Archives</h3>
                        </div>
                        <ul class="single-sidebar__categories clearfix">
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Fearuary 16, 2023
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Fearuary 26, 2023
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    Fearuary 27, 2023
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    March 06, 2023
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="icon-right-chevron"></i>
                                    March 17, 2023
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Single Sidebar Box -->

                    <!-- Start Single Sidebar Box -->
                    <div class="single-sidebar-box">
                        <div class="sidebar-title">
                            <h3>Popular Tags</h3>
                        </div>
                        <ul class="single-sidebar__tag-box clearfix">
                            <li><a href="#">Family Yachts</a></li>
                            <li><a href="#">Party Yachts</a></li>
                            <li><a href="#">Luxury</a></li>
                            <li><a href="#">Sports Yachts</a></li>
                            <li><a href="#">Club</a></li>
                            <li><a href="#">Rental</a></li>
                            <li><a href="#">Exhibition</a></li>
                        </ul>
                    </div>
                    <!-- End Single Sidebar Box -->

                </div>
            </div>
            <!-- End Blog Details Sidebar -->

            <div class="col-xl-8 col-lg-7">
                <div class="blog-details__content">
                    <div class="blog-details__img">
                        <img src="assets/images/blog/blog-details-1.jpg" alt="Image">
                    </div>
                    <div class="blog-details__text1">
                        <div class="date-box">
                            <div class="icon">
                                <i class="icon-time"></i>
                            </div>
                            <p>Fearuary 16, 2023</p>
                        </div>
                        <div class="title">
                            <h2>
                                Bahamas Anounce New Yacht Charter Tax
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                The Bahamas recently announced a new yacht charter tax aimed at bolstering the
                                country's revenue from its thriving marine tourism industry. Effective
                                immediately, this tax requires yacht charters operating within Bahamian waters
                                to pay a percentage of their charter fees to the government. The tax is intended
                                to support the maintenance and development of the country's maritime
                                infrastructure, including marinas and navigational aids, ensuring a safe and
                                enjoyable experience for visitors.
                            </p>
                            <p>
                                While some yacht operators may be concerned about the added cost, the Bahamian
                                government emphasizes that the tax will contribute to preserving the pristine
                                marine environment and enhancing services for tourists, ultimately benefiting
                                the entire yachting community. This new measure underscores the Bahamas'
                                commitment to sustainable tourism and its dedication to providing a world-class
                                destination for yacht enthusiasts.
                            </p>
                        </div>
                    </div>

                    <div class="blog-details__quote">
                        <div class="title">
                            <h3>Brooklyn Simmons</h3>
                        </div>
                        <div class="text">
                            <p>From the moment we stepped on board, we were greeted by a friendly and
                                professional crew who ensured every detail of our trip</p>
                        </div>
                        <div class="icon">
                            <i class="icon-sign"></i>
                        </div>
                    </div>

                    <div class="blog-details__text2">
                        <p>
                            Lorem ipsum dolor sit amet consectetur. Ut parturient aliquam. Mauris felis purus
                            morbi facilisis. Lorem ipsumoi dolor sit amet consectetur adipiscing elit eiusmod
                            tempor incididunt labore etore dolore magnanis aliqua.bands needs no occasion to be
                            gifted and can be given as gifts whenever onewishes to. Eternity bands are also
                            known as the wedding bands. The circular loop of diamonds signifies eternal and
                            morer unending love.
                        </p>
                    </div>
                    <div class="blog-details__img2">
                        <ul class="row">
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-details-2.jpg" alt="Image">
                                </div>
                            </li>
                            <li class="col-xl-6 col-lg-6 col-md-6">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-details-3.jpg" alt="Image">
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="blog-details__text3">
                        <div class="title">
                            <h2>
                                <a href="#">I was doing a course on Greek & Roman Literature</a>
                            </h2>
                        </div>
                        <div class="text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur. Ut parturient aliquam. Mauris felis
                                purus morbi facilisis. Lorem ipsumoi dolor sit amet consectetur adipiscing elit
                                eiusmod tempor incididunt labore etore dolore magnanis aliqua.bands needs no
                                occasion to be gifted and can be given as gifts whenever onewishes to. Eternity
                                bands are also known as the wedding bands. The circular loop of diamonds
                                signifies eternal and morer unending love.
                            </p>
                            <p>
                                This sentiment is what makes the eternity band a perfect gift for couples on
                                special occasions, such as anniries, childbirth or anything that makes a
                                difference to their life.dolor sit and amet consectetur ander adipiscing elites
                                eiusmod tempor incididunt labore et dolore magna aliqua. Bands needs no occasion
                                too be gifted and can been given as gifts whenever onewishes to. Eternity bands
                                are also known as the wedding bands. The circular looper of diamonds signifies
                                eternal and unending love.
                            </p>
                        </div>
                    </div>

                    <div class="blog-details__tag">
                        <div class="blog-post">
                            <div class="text">
                                <p>Tags:</p>
                            </div>
                            <ul class="clearfix">
                                <li>Family Yachts</li>
                                <li>Party Yachts</li>
                                <li>Luxury</li>
                            </ul>
                        </div>
                        <div class="blog-social">
                            <div class="text">
                                <p>Share This :</p>
                            </div>
                            <ul class="clearfix">
                                <li>
                                    <a href="https://www.facebook.com/"><i class="icon-facebook-logo"></i></a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/"><i class="icon-instagram"></i></a>
                                </li>
                                <li>
                                    <a href="https://x.com/?lang=en"><i class="icon-twitter-1"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="comment-box">
                        <div class="img-box">
                            <img src="assets/images/blog/blog-details-athor-1.png" alt="Image">
                        </div>
                        <div class="content-box">
                            <div class="athor">
                                <h3>Julien Robert</h3>
                                <p>About Author</p>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit amet sit purus tempor
                                    dui pharetra consequat nibh elit urna interdum viera quam.</p>
                            </div>
                        </div>
                    </div>


                    <div class="add-comment-box">
                        <div class="inner-title">
                            <h3>Leave a Comments</h3>
                        </div>
                        <form id="add-comment-form" name="add-comment-form" action="#" method="post">
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="text" name="form_name" id="formName"
                                                placeholder="Your name" required="" value="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <input type="email" name="form_email" id="formEmail"
                                                placeholder="Your email" required="" value="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="form-group">
                                        <div class="input-box">
                                            <textarea name="form_message" id="formMessage"
                                                placeholder="Type message" required=""></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn-box btn-one" type="submit" data-loading-text="Please wait...">
                                <span class="txt">Send Message</span>
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!--End Blog Details-->




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