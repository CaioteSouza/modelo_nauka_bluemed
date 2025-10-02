<?php $head_title = "Tour Plan || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Tour Plan";
require_once('parts/page-title.php');
?>




<!--Strat Tour Plan Style1-->
<section class="tour-plan-style1">

    <div class="container">
        <div class="tour-plan-style1__top text-center">
            <div class="inner-title">
                <h2>Find Your Tour</h2>
            </div>
            <div class="yacht-tour-style1__inner">

                <div class="yacht-tour-style1__tab">

                    <div class="yacht-tour-style1__tab-btn">
                        <ul class="tabs-button-box clearfix">
                            <li data-tab="#all" class="tab-btn-item active-btn-item">
                                <h4>all</h4>
                            </li>
                            <li data-tab="#yacht" class="tab-btn-item">
                                <h4>Yacht</h4>
                            </li>
                            <li data-tab="#tour" class="tab-btn-item">
                                <h4>Tour</h4>
                            </li>
                        </ul>
                    </div>

                    <div class="tabs-content-box">

                        <!--Start Tab-->
                        <div class="tab-content-box-item tab-content-box-item-active" id="all">
                            <div class="yacht-tour-style1-tab-content-box-item">
                                <div class="single-yacht-tour-style1">
                                    <div class="yacht-tour-style1__form yacht-tour-style1__form--style2">
                                        <form id="yacht-tour-style1__form" name="yacht-tour-style1__form"
                                            action="#" method="post">
                                            <ul class="clearfix">
                                                <li class="form-group icon1">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Choose Service">
                                                                Choose Service
                                                            </option>
                                                            <option value="1">Choose Service 01</option>
                                                            <option value="2">Choose Service 02</option>
                                                            <option value="3">Choose Service 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="form-group icon2">
                                                    <input type="text" name="datein" placeholder="Check-in"
                                                        id="datepicker">
                                                </li>
                                                <li class="form-group icon3">
                                                    <input type="text" name="dateout" placeholder="Check-out"
                                                        id="datepicker2">
                                                </li>
                                                <li class="form-group icon4">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Guests">Guests</option>
                                                            <option value="1">Guests 01</option>
                                                            <option value="2">Guests 02</option>
                                                            <option value="3">Guests 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="btn-box">
                                                    <button class="btn-one">
                                                        <span class="txt">Search</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tab-->

                        <!--Start Tab-->
                        <div class="tab-content-box-item" id="yacht">
                            <div class="yacht-tour-style1-tab-content-box-item">
                                <div class="single-yacht-tour-style1">
                                    <div class="yacht-tour-style1__form yacht-tour-style1__form--style2">
                                        <form id="yacht-tour-style1-form" name="yacht-tour-style1_form"
                                            action="#" method="post">
                                            <ul class="clearfix">
                                                <li class="form-group icon1">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Choose Service">
                                                                Choose Service
                                                            </option>
                                                            <option value="1">Choose Service 01</option>
                                                            <option value="2">Choose Service 02</option>
                                                            <option value="3">Choose Service 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="form-group icon2">
                                                    <input type="text" name="datein" placeholder="Check-in"
                                                        id="datepicker3">
                                                </li>
                                                <li class="form-group icon3">
                                                    <input type="text" name="dateout" placeholder="Check-out"
                                                        id="datepicker4">
                                                </li>
                                                <li class="form-group icon4">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Guests">Guests</option>
                                                            <option value="1">Guests 01</option>
                                                            <option value="2">Guests 02</option>
                                                            <option value="3">Guests 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="btn-box">
                                                    <button class="btn-one">
                                                        <span class="txt">Search</span>
                                                    </button>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tab-->

                        <!--Start Tab-->
                        <div class="tab-content-box-item" id="tour">
                            <div class="yacht-tour-style1-tab-content-box-item">
                                <div class="single-yacht-tour-style1">
                                    <div class="yacht-tour-style1__form yacht-tour-style1__form--style2">
                                        <form id="yacht-tour-style1_form" name="yacht-tour-style1_form"
                                            action="#" method="post">
                                            <ul class="clearfix">
                                                <li class="form-group icon1">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Choose Service">
                                                                Choose Service
                                                            </option>
                                                            <option value="1">Choose Service 01</option>
                                                            <option value="2">Choose Service 02</option>
                                                            <option value="3">Choose Service 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="form-group icon2">
                                                    <input type="text" name="datein" placeholder="Check-in"
                                                        id="datepicker5">
                                                </li>
                                                <li class="form-group icon3">
                                                    <input type="text" name="dateout" placeholder="Check-out"
                                                        id="datepicker6">
                                                </li>
                                                <li class="form-group icon4">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="Guests">
                                                                Guests
                                                            </option>
                                                            <option value="1">Guests 01</option>
                                                            <option value="2">Guests 02</option>
                                                            <option value="3">Guests 03</option>
                                                        </select>
                                                    </div>
                                                </li>
                                                <li class="btn-box">
                                                    <button class="btn-one">
                                                        <span class="txt">Search</span>
                                                    </button>
                                                </li>
                                            </ul>

                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tab-->

                    </div>
                </div>
            </div>
        </div>


        <div class="tour-plan-style1__inner">
            <div class="row">

                <div class="col-xl-4 col-lg-9 order22">
                    <div class="tour-plan-style1__sidebar">

                        <!--Start Tour Plan Sidebar Single -->
                        <div class="tour-plan__sidebar-single">
                            <div class="title">
                                <h3>Recommended</h3>
                            </div>
                            <div class="recommended-sidebar-content">
                                <div class="img-box">
                                    <img src="assets/images/resources/tour-plan-sidebar-1.jpg" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="title1">
                                        <h3><a href="tour-details.php">Birds’ Island In Turkish</a></h3>
                                        <h3>$6500</h3>
                                    </div>
                                    <div class="time">
                                        <div class="icon">
                                            <i class="icon-time"></i>
                                        </div>
                                        <p>Duration: 3D + 2N</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tour Plan Sidebar Single -->

                        <!--Start Tour Plan Sidebar Single -->
                        <div class="tour-plan__sidebar-single">
                            <div class="title">
                                <h3>Top Attraction</h3>
                            </div>
                            <div class="top-attraction-sidebar-content">
                                <div class="img-box">
                                    <img src="assets/images/resources/tour-plan-sidebar-2.jpg" alt="Image">
                                </div>
                                <div class="content-box">
                                    <div class="title1">
                                        <h3><a href="tour-details.php">Birds’ Island In Turkish</a></h3>
                                        <h3>$6500</h3>
                                    </div>
                                    <div class="time">
                                        <div class="icon">
                                            <i class="icon-time"></i>
                                        </div>
                                        <p>Duration: 3D + 2N</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Tour Plan Sidebar Single -->


                        <div class="tour-plan__sidebar-offer">
                            <div class="title">
                                <h3>Best Offers</h3>
                            </div>
                            <div class="tour-plan__sidebar-offer-single">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="img">
                                            <div class="inner">
                                                <img src="assets/images/resources/tour-plan-sidebar-offer-1.jpg"
                                                    alt="Offer">
                                            </div>
                                            <div class="offer">
                                                <p>-45%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <h3><a href="tour-details.php">Fun Island Resort & Spa</a></h3>
                                            <div class="time">
                                                <div class="icon">
                                                    <i class="icon-time"></i>
                                                </div>
                                                <p>Duration: 3D + 2N</p>
                                            </div>
                                            <h4>$6500 <del>$7000</del></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-plan__sidebar-offer-single">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="img">
                                            <div class="inner">
                                                <img src="assets/images/resources/tour-plan-sidebar-offer-2.jpg"
                                                    alt="Offer">
                                            </div>
                                            <div class="offer">
                                                <p>-40%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <h3><a href="tour-details.php">Birds’ Island In Turkish</a></h3>
                                            <div class="time">
                                                <div class="icon">
                                                    <i class="icon-time"></i>
                                                </div>
                                                <p>Duration: 3D + 2N</p>
                                            </div>
                                            <h4>$6500 <del>$7000</del></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tour-plan__sidebar-offer-single">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="img">
                                            <div class="inner">
                                                <img src="assets/images/resources/tour-plan-sidebar-offer-3.jpg"
                                                    alt="Offer">
                                            </div>
                                            <div class="offer">
                                                <p>-35%</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="content">
                                            <h3><a href="tour-details.php">Fun Island Resort & Spa</a></h3>
                                            <div class="time">
                                                <div class="icon">
                                                    <i class="icon-time"></i>
                                                </div>
                                                <p>Duration: 3D + 2N</p>
                                            </div>
                                            <h4>$6500 <del>$7000</del></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>


                <div class="col-xl-8 order11">

                    <div class="tour-plan-style1__content">
                        <div class="tour-plan-style1__tab">

                            <div class="tour-plan-style1__tab-btn">
                                <ul class="tabs-button-box clearfix">
                                    <li data-tab="#grid" class="tab-btn-item active-btn-item">
                                        <div class="icon">
                                            <img src="assets/images/icon/grid-1.png" alt="Icon">
                                        </div>
                                    </li>
                                    <li data-tab="#list" class="tab-btn-item">
                                        <div class="icon">
                                            <img src="assets/images/icon/list-1.png" alt="Icon">
                                        </div>
                                    </li>
                                </ul>
                            </div>

                            <div class="tabs-content-box">

                                <!--Start Tab-->
                                <div class="tab-content-box-item tab-content-box-item-active" id="grid">
                                    <div class="tour-plan-style1-tab-content-box-item">

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-1.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Costa Victoria Cochin
                                                            </a>
                                                        </h3>
                                                        <p>Age 16+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$6500</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-2.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Birds’ Island In Turkish
                                                            </a>
                                                        </h3>
                                                        <p>Age 15+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$6000</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-3.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Coco Bodu Hithi Maldives
                                                            </a>
                                                        </h3>
                                                        <p>Age 17+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$7500</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-4.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Fun Island Resort & Spa
                                                            </a>
                                                        </h3>
                                                        <p>Age 16+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$65,500,000</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-5.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Costa Victoria Cochin
                                                            </a>
                                                        </h3>
                                                        <p>Age 17+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$7500</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-tour-plan-style1">
                                            <div class="img-box">
                                                <div class="inner">
                                                    <img src="assets/images/resources/tour-plan-img-6.jpg"
                                                        alt="Image">
                                                </div>
                                                <div class="overlay-content">
                                                    <div class="left-box">
                                                        <h3>
                                                            <a href="tour-details.php">
                                                                Fly Boarding In Maldives
                                                            </a>
                                                        </h3>
                                                        <p>Age 17+ Only</p>
                                                        <div class="bottom">
                                                            <div class="icon">
                                                                <i class="icon-price-1"></i>
                                                            </div>
                                                            <h3>$65,500,000</h3>
                                                        </div>
                                                    </div>
                                                    <div class="right-box">
                                                        <div class="rating">
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                            <i class="icon-star"></i>
                                                        </div>
                                                        <div class="reviews-box">
                                                            <p><span>4.8</span> (208 Reviews)</p>
                                                        </div>
                                                        <div class="btn-box">
                                                            <a href="tour-plan.php">Online Booking</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <!--End Tab-->

                                <!--Start Tab-->
                                <div class="tab-content-box-item" id="list">
                                    <div class="tour-plan-style1-tab-content-box-item">

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-1.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Costa Victoria Cochin
                                                                </a>
                                                            </h3>
                                                            <p>Age 16+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$6500</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-2.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Birds’ Island In Turkish
                                                                </a>
                                                            </h3>
                                                            <p>Age 15+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$6000</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-3.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Coco Bodu Hithi Maldives
                                                                </a>
                                                            </h3>
                                                            <p>Age 17+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$7500</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-4.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Fun Island Resort & Spa
                                                                </a>
                                                            </h3>
                                                            <p>Age 16+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$65,500,000</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-5.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Costa Victoria Cochin
                                                                </a>
                                                            </h3>
                                                            <p>Age 17+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$7500</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="single-list-tour-plan-style1">
                                            <div class="row">
                                                <div class="col-xl-7 col-lg-7">
                                                    <div class="img-box">
                                                        <img src="assets/images/resources/tour-plan-img-list-6.jpg"
                                                            alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-xl-5 col-lg-5">
                                                    <div class="content-box">
                                                        <div class="top-box">
                                                            <h3>
                                                                <a href="tour-details.php">
                                                                    Fly Boarding In Maldives
                                                                </a>
                                                            </h3>
                                                            <p>Age 16+ Only</p>
                                                            <div class="bottom">
                                                                <div class="icon">
                                                                    <i class="icon-price-1"></i>
                                                                </div>
                                                                <h3>$65,500,000</h3>
                                                            </div>
                                                        </div>
                                                        <div class="bottom-box">
                                                            <div class="rating">
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                                <i class="icon-star"></i>
                                                            </div>
                                                            <div class="reviews-box">
                                                                <p><span>4.8</span> (208 Reviews)</p>
                                                            </div>
                                                            <div class="btn-box">
                                                                <a href="tour-plan.php">Online Booking</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                <!--End Tab-->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Tour Plan Style1-->


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