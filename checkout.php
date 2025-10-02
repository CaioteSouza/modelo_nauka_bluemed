<?php $head_title = "Checkout || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "Checkout";
require_once('parts/page-title.php');
?>





<!--Start Checkout area-->
<section class="checkout-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <!--Start Checkout Inner Box -->
                <div class="checkout_inner-box">
                    <form method="post" action="checkout.php">
                        <div class="row">

                            <div class="col-xl-8 col-lg-7">
                                <div class="checkout-form">
                                    <!--Start Form Box1-->
                                    <div class="checkout-form-box1">
                                        <div class="shop-page-title">
                                            <h2>Contact Info</h2>
                                            <div class="border-box"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xl-12">
                                                <div class="field-input">
                                                    <input type="tel" name="phone" placeholder="Phone"
                                                        pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}" required="">
                                                </div>
                                                <div class="field-input">
                                                    <input type="email" name="email" value=""
                                                        placeholder="Email Address" required="">
                                                </div>
                                                <div class="checked-box2">
                                                    <input type="checkbox" name="skipper1" id="skipper"
                                                        checked="">
                                                    <label for="skipper">
                                                        <span></span>Get Product Updates & Offers
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Form Box1-->

                                    <!--Start Form Box2-->
                                    <div class="form-box2">
                                        <div class="shop-page-title">
                                            <h2>Shipping Address</h2>
                                            <div class="border-box"></div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="field-input">
                                                    <input type="text" name="ffname" value=""
                                                        placeholder="First Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="field-input">
                                                    <input type="text" name="flname" value=""
                                                        placeholder="Last Name" required="">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="field-input">
                                                    <input type="text" name="faddress" value=""
                                                        placeholder="Address">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="field-input">
                                                    <input type="text" name="fcity" value="" placeholder="City">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="field-input">
                                                    <div class="select-box clearfix">
                                                        <select class="wide">
                                                            <option data-display="State">State</option>
                                                            <option value="1">Albania</option>
                                                            <option value="2">Canada</option>
                                                            <option value="3">India</option>
                                                            <option value="3">Bangladesh</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="field-input">
                                                    <input type="text" name="zipcode" value=""
                                                        placeholder="Pincode">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="checked-box2">
                                                    <input type="checkbox" name="skipper1" id="skipper-2"
                                                        checked="">
                                                    <label for="skipper-2"><span></span>
                                                        Save for future shopping
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End Form Box2-->
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-5">
                                <div class="product-details-info-box">
                                    <div class="product-details-info-box__inner">
                                        <ul class="product-name">
                                            <li class="product-name_list">
                                                <h4>Remington 870</h4>
                                                <p>$599.00*2 = <span>$1198.00</span></p>
                                            </li>
                                            <li class="product-name_list">
                                                <h4>Benelli M4</h4>
                                                <p>$680.00*1 = <span>$680.00</span></p>
                                            </li>
                                        </ul>

                                        <ul class="value-info">
                                            <li>
                                                <h5>Sub total</h5>
                                                <p><span>$1878.00</span></p>
                                            </li>
                                            <li>
                                                <h5>Shipping</h5>
                                                <p>$30</p>
                                            </li>
                                            <li>
                                                <h5>Tax</h5>
                                                <p>$0.00</p>
                                            </li>
                                        </ul>
                                        <div class="total-value-box">
                                            <h3>Total (Including Tax)</h3>
                                            <h4>$1908.00</h4>
                                        </div>

                                        <div class="button-box">
                                            <button class="btn-one" type="submit">
                                                <i class="icon-thin-arrow"></i>
                                                <span class="txt">
                                                    Continue
                                                </span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
                <!--End Checkout Inner Box -->



                <!--Start Payment Info-->
                <div class="payment-info">
                    <div class="shop-page-title">
                        <h2>Choose a Payment Method</h2>
                        <div class="border-box"></div>
                    </div>

                    <div class="payment-info-content">
                        <ul class="accordion-box">

                            <li class="accordion block active-block">
                                <div class="acc-btn active">
                                    <h3>Direct Bank Transfer</h3>
                                </div>
                                <div class="acc-content current">
                                    <div class="payment-input-box">
                                        <form method="post" action="checkout.php">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_name" value=""
                                                            placeholder="Name on the Card" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_number" value=""
                                                            placeholder="Card Number" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="expiry_date" value=""
                                                            placeholder="Expiry Date" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="security_code" value=""
                                                            placeholder="Security Code" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="button-box">
                                                        <button class="btn-one" type="submit">
                                                            <i class="icon-thin-arrow"></i>
                                                            <span class="txt">Make Payment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Credit Card / Debit Card</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="payment-input-box">
                                        <form method="post" action="checkout.php">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_name" value=""
                                                            placeholder="Name on the Card" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_number" value=""
                                                            placeholder="Card Number" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="expiry_date" value=""
                                                            placeholder="Expiry Date" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="security_code" value=""
                                                            placeholder="Security Code" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="button-box">
                                                        <button class="btn-one" type="submit">
                                                            <span class="txt">Make Payment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Cheque Payment</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="payment-input-box">
                                        <form method="post" action="checkout.php">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_name" value=""
                                                            placeholder="Name on the Card" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_number" value=""
                                                            placeholder="Card Number" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="expiry_date" value=""
                                                            placeholder="Expiry Date" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="security_code" value=""
                                                            placeholder="Security Code" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="button-box">
                                                        <button class="btn-one" type="submit">
                                                            <span class="txt">Make Payment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>

                            <li class="accordion block">
                                <div class="acc-btn">
                                    <h3>Other Payment</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="payment-input-box">
                                        <form method="post" action="checkout.php">
                                            <div class="row">
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_name" value=""
                                                            placeholder="Name on the Card" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="input-box">
                                                        <input type="text" name="card_number" value=""
                                                            placeholder="Card Number" required="">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="expiry_date" value=""
                                                            placeholder="Expiry Date" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-3">
                                                    <div class="input-box">
                                                        <input type="text" name="security_code" value=""
                                                            placeholder="Security Code" required="">
                                                    </div>
                                                </div>
                                                <div class="col-xl-6">
                                                    <div class="button-box">
                                                        <button class="btn-one" type="submit">
                                                            <span class="txt">Make Payment</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
                <!--End Payment Info-->


            </div>
        </div>
    </div>
</section>
<!--End Checkout area-->

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