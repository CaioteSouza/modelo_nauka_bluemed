<?php $head_title = "Shop Details || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Shop Details";
require_once('parts/page-title.php');
?>





<!--Start Products Details -->
<section class="products-details">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="product-details-image-box">
                    <div class="products-details-tab-box">

                        <div class="products-details__tab-btn">
                            <ul class="tabs-button-box clearfix">
                                <li data-tab="#product-type1" class="tab-btn-item active-btn-item">
                                    <div class="thumb-image-box">
                                        <img src="assets/images/shop/shop-details-1-thumb.jpg" alt="">
                                    </div>
                                </li>
                                <li data-tab="#product-type2" class="tab-btn-item">
                                    <div class="thumb-image-box">
                                        <img src="assets/images/shop/shop-details-2-thumb.jpg" alt="">
                                    </div>
                                </li>
                                <li data-tab="#product-type3" class="tab-btn-item">
                                    <div class="thumb-image-box">
                                        <img src="assets/images/shop/shop-details-3-thumb.jpg" alt="">
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <div class="tabs-content-box">
                            <!--Start Tab-->
                            <div class="tab-content-box-item tab-content-box-item-active" id="product-type1">
                                <div class="products-details-tab-content-box-item">
                                    <div class="products-details-single-img-box">
                                        <img src="assets/images/shop/shop-details-1.jpg" alt="">
                                        <div class="offer">-15%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->
                            <!--Start Tab-->
                            <div class="tab-content-box-item" id="product-type2">
                                <div class="products-details-tab-content-box-item">
                                    <div class="products-details-single-img-box">
                                        <img src="assets/images/shop/shop-details-2.jpg" alt="">
                                        <div class="offer">-25%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->
                            <!--Start Tab-->
                            <div class="tab-content-box-item" id="product-type3">
                                <div class="products-details-tab-content-box-item">
                                    <div class="products-details-single-img-box">
                                        <img src="assets/images/shop/shop-details-3.jpg" alt="">
                                        <div class="offer">-10%</div>
                                    </div>
                                </div>
                            </div>
                            <!--End Tab-->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6">
                <div class="products-details__right">
                    <div class="text1">
                        <p>Stay Safe Life Jacket</p>
                    </div>
                    <div class="title">
                        <h2>Guide to Choosing the Perfect Life Jacket</h2>
                    </div>
                    <div class="price">
                        <h2>$500.99</h2>
                    </div>
                    <div class="text2">
                        <p>Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a
                            document or a typeface without relying on meaningful content.</p>
                    </div>
                    <div class="rating">
                        <ul class="clearfix">
                            <li>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                                <i class="icon-star"></i>
                            </li>
                        </ul>
                        <p>(08)</p>
                    </div>
                    <div class="list-item">
                        <ul class="clearfix">
                            <li>
                                <div class="left">
                                    <p>Brand :</p>
                                </div>
                                <div class="right">
                                    <p>MRF Tires</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Product SKU :</p>
                                </div>
                                <div class="right">
                                    <p>#LKDM05SG</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Category :</p>
                                </div>
                                <div class="right">
                                    <p>Life Jacket, Safty, Waterproof</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <p>Availability :</p>
                                </div>
                                <div class="right">
                                    <p class="color">
                                        <i class="icon-ready-stock"></i>
                                        In Stock
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="size-box">
                        <div class="text">
                            <p>Size*</p>
                        </div>
                        <ul class="clearfix">
                            <li>
                                <input type="radio" id="size1" name="size" checked="checked">
                                <label for="size1">
                                    <i></i>
                                    <span>17”</span>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="size2" name="size">
                                <label for="size2">
                                    <i></i>
                                    <span>20”</span>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="size3" name="size">
                                <label for="size3">
                                    <i></i>
                                    <span>21”</span>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="size4" name="size">
                                <label for="size4">
                                    <i></i>
                                    <span>22”</span>
                                </label>
                            </li>
                            <li>
                                <input type="radio" id="size5" name="size">
                                <label for="size5">
                                    <i></i>
                                    <span>23”</span>
                                </label>
                            </li>
                        </ul>
                    </div>

                    <div class="btn-box">
                        <a class="btn-one" href="#">
                            <span class="txt">Buy Now</span>
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-xl-12">
                <div class="products-description-box">
                    <div class="inner-title">
                        <h3>Description</h3>
                    </div>
                    <p>Lorem ipsum dolor sit amet consectetur. Fringilla quisque magna varius sit lectus. Libero
                        scelerisque amet id arcu feugiat mi tellus velit. Dignissim pulvinar aenean diam tempus
                        arcu fames vestibulum. Elit tincidunt placerat malesuada pellentesque id viverra auctor
                        quis massa. Bibendum aliquam adipiscing tortor varius. Integer pretium pretium
                        pellentesque varius justo est morbi vel aliquet. Enim accumsan consequat eget gravida a
                        ultrices vel aliquet.</p>
                    <p>
                        Nulla id tellus ante turpis odio malesuada. In sit feugiat duis tellus sit pulvinar
                        adipiscing. Purus urna est interdum ut odio purus. Commodo eros congue sed aliquam. Eu
                        sit sagittis elementum tellus ut integer. Elementum leo arcu augue euismod morbi lectus
                        integer. Ornare tempor mattis vel habitasse gravida.
                    </p>
                </div>

                <div class="products-features-box">
                    <div class="inner-title">
                        <h3>Features :</h3>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <p>Provides sufficient buoyancy to keep the wearer afloat in the water.</p>
                        </li>
                        <li>
                            <p>Adjustable straps for a secure and comfortable fit, preventing the jacket</p>
                        </li>
                        <li>
                            <p>Ensure the life jacket has adequate buoyancy to keep the wearer afloat.</p>
                        </li>
                    </ul>
                </div>

                <div class="products-specification-box">
                    <div class="inner-title">
                        <h3>Specification</h3>
                    </div>
                    <ul class="clearfix">
                        <li>
                            <div class="left">
                                <p>Weight</p>
                            </div>
                            <div class="right">
                                <p>1 KG</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Dimension</p>
                            </div>
                            <div class="right">
                                <p>30”</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Brand</p>
                            </div>
                            <div class="right">
                                <p>Cat</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Condition</p>
                            </div>
                            <div class="right">
                                <p>Brand New</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Part Number</p>
                            </div>
                            <div class="right">
                                <p>49385038560223586</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Made in</p>
                            </div>
                            <div class="right">
                                <p>Japan</p>
                            </div>
                        </li>
                        <li>
                            <div class="left">
                                <p>Warranty</p>
                            </div>
                            <div class="right">
                                <p>1 months</p>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</section>
<!--End Products Details -->








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