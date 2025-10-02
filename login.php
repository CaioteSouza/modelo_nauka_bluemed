<?php $head_title = "Login || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Login";
require_once('parts/page-title.php');
?>







<!-- Start Login Page-->
<section class="login-style1">
    <div class="container">
        <div class="login-style1__form">
            <div class="inner-title text-center">
                <h2>Login</h2>
            </div>
            <form id="login-style1__form" name="login-style1_form" action="#" method="post">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="form-group">
                            <div class="input-box">
                                <label for="formEmail">Email <span>*</span></label>
                                <input type="email" name="form_email" id="formEmail" placeholder="" required=""
                                    value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <div class="input-box">
                                <label for="formPassword">Password <span>*</span></label>
                                <input type="text" name="form_password" id="formPassword" placeholder=""
                                    required="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12">
                        <div class="form-group">
                            <button class="btn-box btn-one" type="submit" data-loading-text="Please wait...">
                                <span class="txt">Log In</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="or-box">
                    <p>or</p>
                </div>
                <div class="google-facebook">
                    <a href="https://www.google.com/">
                        <div class="icon">
                            <span class="icon-google"><span class="path1"></span><span
                                    class="path2"></span><span class="path3"></span><span
                                    class="path4"></span><span class="path5"></span><span
                                    class="path6"></span></span>
                        </div>
                        Continue with Google
                    </a>
                    <a href="https://www.facebook.com/">
                        <div class="icon">
                            <span class="icon-facebook"><span class="path1"></span><span
                                    class="path2"></span></span>
                        </div>
                        Continue with Facebook
                    </a>
                </div>

                <div class="remember-forget">
                    <div class="checked-box1">
                        <input type="checkbox" name="saveMyInfo" id="saveinfo" checked="">
                        <label for="saveinfo">
                            <span></span>
                            Remember me
                        </label>
                    </div>
                    <div class="forget">
                        <a href="#">Forget password?</a>
                    </div>
                </div>

                <div class="create-account text-center">
                    <p>Not registered yet? <a href="sign-up.php">Create an Account</a></p>
                </div>
            </form>
        </div>
    </div>
</section>
<!-- End Login Page-->






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