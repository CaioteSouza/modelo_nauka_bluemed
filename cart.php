<?php $head_title = "shopping cart || Nauka || Nauka PHP Template" ?>
<?php $body_class = "body-bg-1" ?>
<?php require_once('parts/layout/top-layout.php'); ?>
<?php require_once('parts/header/header.php'); ?>

<?php
$page_title = "shopping cart";
require_once('parts/page-title.php');
?>





<!--Start cart area-->
<section class="cart-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="cart-table-box">
                    <div class="cart-info">
                        <div class="left">
                            <h4>Your Cart: <span>2 Items</span></h4>
                        </div>
                        <div class="right">
                            <h4>Total:<span> $147.00</span></h4>
                        </div>
                    </div>

                    <div class="table-outer">

                        <table class="cart-table">
                            <thead class="cart-header clearfix">
                                <tr>
                                    <th class="prod-column">Product</th>
                                    <th class="hide-me"></th>
                                    <th>Quantity</th>
                                    <th class="price">Price</th>
                                    <th>Total</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#">
                                                    <img src="assets/images/shop/cart-thumb-1.png" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <h3 class="prod-title">
                                                    Unique Yacht Campus
                                                </h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <div class="input-box">
                                            <input class="quantity-spinner" type="text" value="2"
                                                name="quantity">
                                        </div>
                                    </td>
                                    <td class="price">$599.00</td>
                                    <td class="sub-total">$1198.00</td>
                                    <td>
                                        <div class="remove">
                                            <span class="icon-close-1"></span>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="2" class="prod-column">
                                        <div class="column-box">
                                            <div class="prod-thumb">
                                                <a href="#">
                                                    <img src="assets/images/shop/cart-thumb-2.png" alt="image">
                                                </a>
                                            </div>
                                            <div class="title">
                                                <h3 class="prod-title">
                                                    Your Summer Travel
                                                </h3>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="qty">
                                        <div class="input-box">
                                            <input class="quantity-spinner" type="text" value="1"
                                                name="quantity">
                                        </div>
                                    </td>
                                    <td class="price">$680.00</td>
                                    <td class="sub-total">$680.00</td>
                                    <td>
                                        <div class="remove">
                                            <span class="icon-close-1"></span>
                                        </div>
                                    </td>
                                </tr>

                            </tbody>
                        </table>

                    </div>

                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="cart-button-box">
                    <div class="apply-coupon">
                        <div class="inner">
                            <input type="text" name="coupon-code" value="" placeholder="Enter Coupon Code...">
                            <div class="apply-coupon-button">
                                <button class="btn-one" type="submit">
                                    <span class="txt">Apply Coupon</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="update-cart-btn-box">
                        <button class="btn-one black" type="button">
                            <span class="txt">Update Cart</span>
                        </button>
                        <button class="btn-one" type="button">
                            <span class="txt">Checkout Now</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!--End cart area-->




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