<?php $head_title = "Shop || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Shop";
require_once('parts/page-title.php');
?>





<!-- Start Shop Page-->
<section class="products-style1">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-12">
                <div class="products-style1__sidebar">

                    <!--Start Products Style1 Single Sidear -->
                    <div class="products-style1-single-sidear">
                        <div class="title">
                            <h3>Search</h3>
                        </div>
                        <div class="products-sidebar-search-box-one">
                            <form class="search-form" action="#">
                                <input placeholder="Search..." type="text">
                                <button type="submit">
                                    <i class="icon-search"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--End Products Style1 Single Sidear -->

                    <!--Start Products Style1 Single Sidear -->
                    <div class="products-style1-single-sidear">
                        <div class="title">
                            <h3>Product Categories</h3>
                        </div>
                        <ul class="products-sidebar-categories clearfix">
                            <li>
                                <a href="shop-details.php">Accessories</a>
                            </li>
                            <li>
                                <a href="shop-details.php">Bags</a>
                            </li>
                            <li>
                                <a href="shop-details.php">Cups</a>
                            </li>
                            <li>
                                <a href="shop-details.php">Cloth</a>
                            </li>
                        </ul>
                    </div>
                    <!--End Products Style1 Single Sidear -->

                    <!--Start Products Style1 Single Sidear -->
                    <div class="products-style1-single-sidear">
                        <div class="title">
                            <h3>Filter by Price</h3>
                        </div>
                        <div class="shop-sidebar-price-range">
                            <div class="price-ranger">
                                <div id="slider-range"></div>
                                <div class="ranger-min-max-block">
                                    <div class="left clearfix">
                                        <div class="text">
                                            <p>Price:</p>
                                        </div>
                                        <input type="text" readonly class="min">
                                        <span>-</span>
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
                    </div>
                    <!--End Products Style1 Single Sidear -->

                    <!--Start Products Style1 Single Sidear -->
                    <div class="products-style1-single-sidear style">
                        <div class="title">
                            <h3>Reviews</h3>
                        </div>
                        <div class="sidebar-rating-box sidebar-rating-box--style2">
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
                    <!--End Products Style1 Single Sidear -->

                </div>
            </div>


            <div class="col-xl-9 col-lg-6 col-md-12">
                <div class="products-content-box">

                    <div class="shop-page-top-info_inner">
                        <div class="left-box">
                            <p>Showing <span>1–30</span> of <span>160 results</span></p>
                        </div>
                        <div class="right-box">
                            <div class="text">
                                <p>Sort:</p>
                            </div>
                            <div class="select-box">
                                <select class="wide">
                                    <option data-display="Most popular">Most popular</option>
                                    <option value="1">Most popular 01</option>
                                    <option value="2">Most popular 02</option>
                                    <option value="3">Most popular 03</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-1.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount">
                                        <p>-15%</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Head Cap for Your<br> Summer
                                                Travel</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4><del>$92.99</del> $83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-2.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount">
                                        <p>-15%</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Our Unique Yacht<br> Campus</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4><del>$92.99</del> $83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-3.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">
                                                Guide to Choosing the<br> Perfect Life Jacket
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4>$83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-4.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount color">
                                        <p>Sale</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Head Cap for Your<br> Summer
                                                Travel</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4>$83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-5.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">
                                                Precision Thermometer<br> for Home and Health
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4>$83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-3.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount">
                                        <p>-15%</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">
                                                Guide to Choosing the<br> Perfect Life Jacket
                                            </a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4><del>$92.99</del> $83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-2.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount">
                                        <p>-15%</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Head Cap for Your Summer Travel</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4><del>$92.99</del> $83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-4.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Advanced Yacht Steering Systems</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4>$83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->
                        <!--Start Single Products Style1 -->
                        <div class="col-xl-4 col-lg-12 col-md-6">
                            <div class="single-products-style1">
                                <div class="img-box">
                                    <img src="assets/images/shop/shop-v1-1.png" alt="Cap">
                                    <div class="overlay-icon clearfix">
                                        <a href="product-details.php">
                                            <i class="fa fa fa-heart"></i>
                                        </a>
                                        <a href="product-details.php">
                                            <i class="icon-full-screen"></i>
                                        </a>
                                    </div>
                                    <div class="discount">
                                        <p>-15%</p>
                                    </div>
                                </div>
                                <div class="content-box">
                                    <div class="title-box">
                                        <h3>
                                            <a href="product-details.php">Head Cap for Your Summer Travel</a>
                                        </h3>
                                    </div>
                                    <div class="dollar">
                                        <h4><del>$92.99</del> $83.99</h4>
                                    </div>
                                    <div class="bottom-box">
                                        <div class="stock">
                                            <div class="icon">
                                                <i class="icon-ready-stock"></i>
                                            </div>
                                            <p>In Stock</p>
                                        </div>
                                        <div class="review">
                                            <ul class="rating clearfix">
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                                <li>
                                                    <i class="icon-star"></i>
                                                </li>
                                            </ul>
                                            <p>(2)</p>
                                        </div>
                                    </div>
                                    <div class="btn-box">
                                        <a class="btn-one" href="product-details.php">
                                            <span class="txt">Buy Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Single Products Style1 -->

                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- End Shop Page-->






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