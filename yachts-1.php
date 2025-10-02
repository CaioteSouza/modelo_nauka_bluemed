<?php $head_title = "Yacht List || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Yacht List";
require_once('parts/page-title.php');
?>






<!--Start Yacht List Style1-->
<section class="yacht-list-style1">
    <div class="container">
        <div class="row">

            <div class="col-xl-4 col-lg-6 co-md-12">
                <div class="yacht-list-style1__sidebar">

                    <!--Start Single Sidebar-->
                    <div class="single-yacht-list-style1-sidebar">
                        <div class="inner-title">
                            <h3>Search</h3>
                        </div>
                        <!--Start Sidebar Search Box One -->
                        <div class="sidebar-search-box-three">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </form>
                        </div>
                        <!--End Sidebar Search Box One -->
                        <div class="border-bottom"></div>
                    </div>
                    <!--End Single Sidebar-->

                    <!--Start Single Sidebar-->
                    <div class="single-yacht-list-style1-sidebar">
                        <div class="inner-title">
                            <h3>Select Car</h3>
                        </div>
                        <!--Start Select Box One -->
                        <div class="yacht-list-style1-sidebar__form">
                            <form id="yacht-list-style1-sidebar__form" name="yacht-list-style1-sidebar__form"
                                action="#" method="post">
                                <ul class="clearfix">
                                    <li class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="Select Destination">Select Destination
                                                </option>
                                                <option value="1">Select Destination</option>
                                                <option value="2">Select Destination</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="Select Type">Select Type</option>
                                                <option value="1">Select Type</option>
                                                <option value="2">Select Type</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="Select Brand">Select Brand</option>
                                                <option value="1">Select Brand</option>
                                                <option value="2">Select Brand</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="form-group">
                                        <div class="select-box clearfix">
                                            <select class="wide">
                                                <option data-display="Select Fuel">Select Fuel</option>
                                                <option value="1">Select Fuel</option>
                                                <option value="2">Select Fuel</option>
                                            </select>
                                        </div>
                                    </li>
                                    <li class="btn-box">
                                        <button type="submit" class="btn-one">
                                            <span class="txt">Find Now</span>
                                        </button>
                                    </li>
                                </ul>
                            </form>
                        </div>
                        <!--End Select Box One -->
                        <div class="border-bottom"></div>
                    </div>
                    <!--End Single Sidebar-->

                    <!--Start Single Sidebar-->
                    <div class="single-yacht-list-style1-sidebar">
                        <div class="inner-title">
                            <h3>Filter by Price</h3>
                        </div>

                        <!--Start Single Sidebar Box-->
                        <div class="sidebar-price-range">
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <div class="left clearfix">
                                        <span>Price:</span>
                                        <input type="text" readonly class="min">
                                        <span class="hipen">-</span>
                                        <input type="text" readonly class="max">
                                    </div>
                                    <div class="right">
                                        <input type="submit" value="Clear">
                                        <div class="btn-box">
                                            <button class="btn-one" type="submit">
                                                <span class="txt">Apply</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Sidebar Box-->

                        <div class="border-bottom"></div>
                    </div>
                    <!--End Single Sidebar-->

                    <!--Start Single Sidebar-->
                    <div class="single-yacht-list-style1-sidebar">
                        <div class="inner-title">
                            <h3>Person Capacity</h3>
                        </div>
                        <div class="person-capacity-select-box">
                            <ul>
                                <li>
                                    <input type="radio" id="ziroOne" name="personCapacity" checked="checked">
                                    <label for="ziroOne" data-amount="0-1">
                                        <span></span>
                                        0-1
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="oneTwo" name="personCapacity">
                                    <label for="oneTwo" data-amount="1-2">
                                        <span></span>
                                        1-2
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="twoThree" name="personCapacity">
                                    <label for="twoThree" data-amount="2-3">
                                        <span></span>
                                        2-3
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="threeFour" name="personCapacity">
                                    <label for="threeFour" data-amount="3-4">
                                        <span></span>
                                        3-4
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="fiveSix" name="personCapacity">
                                    <label for="fiveSix" data-amount="5-6">
                                        <span></span>
                                        5-6
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="more" name="personCapacity">
                                    <label for="more" data-amount="more">
                                        <span></span>
                                        more
                                    </label>
                                </li>
                            </ul>
                            <div class="border-bottom"></div>
                        </div>
                    </div>
                    <!--End Single Sidebar-->

                    <!--Start Single Sidebar-->
                    <div class="single-yacht-list-style1-sidebar">
                        <div class="inner-title">
                            <h3>Reviews</h3>
                        </div>
                        <div class="sidebar-rating-box">
                            <ul>
                                <li>
                                    <input type="radio" id="fivestar" name="rating" checked="checked">
                                    <label for="fivestar">
                                        <i></i>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="fourstar" name="rating">
                                    <label for="fourstar">
                                        <i></i>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star gray"></span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="threestar" name="rating">
                                    <label for="threestar">
                                        <i></i>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="twostar" name="rating">
                                    <label for="twostar">
                                        <i></i>
                                        <span class="icon-star"></span>
                                        <span class="icon-star"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                    </label>
                                </li>
                                <li>
                                    <input type="radio" id="onestar" name="rating">
                                    <label for="onestar">
                                        <i></i>
                                        <span class="icon-star"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                        <span class="icon-star gray"></span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!--End Single Sidebar-->

                </div>
            </div>

            <div class="col-xl-8 col-lg-6 co-md-12">
                <div class="yacht-list-style1__right">

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-1.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Bahamas Anounce New</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-2.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Birds’ Island In Turkish</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-3.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Coco Bodu Hithi Maldives</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-4.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Fly Boarding In Maldives</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-5.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Birds’ Island In Turkish</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <!--Start Single Yacht List Style1 -->
                    <div class="single-yacht-list-style1">
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__img">
                                    <img src="assets/images/yacht/yacht-list-v1-6.jpg" alt="Image">
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="yacht-list-style1__content">
                                    <div class="top-box">
                                        <div class="title-box">
                                            <div class="text">
                                                <h3><a href="yachts-1.php">Costa Victoria Cochin</a></h3>
                                            </div>
                                            <div class="rating">
                                                <div class="icon">
                                                    <i class="icon-star"></i>
                                                </div>
                                                <p>4.8</p>
                                            </div>
                                        </div>
                                        <div class="value-box">
                                            <h3>$550<span>/ day</span></h3>
                                        </div>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="list-item">
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Yacht type: </span> Sailing</p>
                                                </li>
                                                <li>
                                                    <p><span>Engine: </span> Caterpillar C8.7</p>
                                                </li>
                                            </ul>
                                            <ul class="clearfix">
                                                <li>
                                                    <p><span>Guest: </span> 12 members</p>
                                                </li>
                                                <li>
                                                    <p><span>Length: </span> M144’15” / 48.25 M</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="btn-box">
                                            <a class="btn-one" href="#">
                                                <span class="txt">Rent now</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End Single Yacht List Style1 -->

                    <ul class="styled-pagination pdtop30 clearfix">
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
<!--End  Yacht List Style1-->






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