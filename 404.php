<?php $head_title = "Error || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Error";
require_once('parts/page-title.php');
?>




<!-- Start Error Page-->
<section class="error-page">
    <div class="container">
        <div class="error-page__content text-center">
            <div class="big-title">404</div>
            <div class="title">
                <h2>Page Not Found</h2>
            </div>
            <div class="text">
                <p>This page doesn’t exist or was removed! We suggest you <br>go back to home.</p>
            </div>
            <div class="btn-box">
                <a class="btn-one" href="index.php">
                    <span class="txt">Back to Homepage</span>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- End Error Page-->

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