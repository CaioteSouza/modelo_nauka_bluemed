<?php $head_title = "Blog Grid || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Blog Grid";
require_once('parts/page-title.php');
?>




<!--Start Blog Details-->
<section class="blog-page-one">
    <div class="container">
        <div class="row">

            <!-- Start Blog Details Sidebar -->
            <div class="col-xl-4 col-lg-6 col-md-12">
                <div class="blog-details__sidebar">

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

            <div class="col-xl-8 col-lg-6 col-md-12">
                <div class="blog-details__content">
                    <div class="row">
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-1.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">Bahamas Anounce New Yacht <br>Charter
                                                    Tax</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-7.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">41m Benetti superyacht LexSea sold by
                                                    Record</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-8.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">What’s the difference between a yacht
                                                    and a boat</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-2.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">Tree earth fowl given moveth deep
                                                    lesser After</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-9.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">We organize your full-service yacht
                                                    charter</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-10.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">The Finest Dining Experiences at the
                                                    World’s Top</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-11.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">Exploring the Amenities of Yacht
                                                    Rentals</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-12.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">41m Benetti superyacht LexSea sold by
                                                    Record</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-13.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">Yacht Charter Tips for First-Time
                                                    Renters</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                        <!--Start Single Blog Style1-->
                        <div class="col-xl-6 col-lg-12 col-md-6">
                            <div class="single-blog-style1 single-blog-style1--style3 wow fadeInDown"
                                data-wow-duration="1500ms" data-wow-delay="000ms">
                                <div class="img-box">
                                    <img src="assets/images/blog/blog-v1-14.jpg" alt="Image">
                                    <div class="overlay-content">
                                        <div class="date-box">
                                            <div class="icon">
                                                <i class="icon-time"></i>
                                            </div>
                                            <p>Fearuary 16, 2023</p>
                                        </div>
                                        <div class="title">
                                            <h3>
                                                <a href="blog-single.php">Navigating the Dos and Don’ts on
                                                    Board</a>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Blog Style1-->
                    </div>
                    <ul class="styled-pagination clearfix">
                        <li class="arrow prev">
                            <a href="#"><span class="icon-thin-arrow-left left"></span></a>
                        </li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li class="arrow next">
                            <a href="#"><span class="icon-thin-arrow right"></span></a>
                        </li>
                    </ul>
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