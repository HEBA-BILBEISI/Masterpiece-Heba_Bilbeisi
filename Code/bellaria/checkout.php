<?php include 'include/header.php' ?>
<!--Page Title-->
<section class="page-title" style="background-image:url(images/shop.jpg)">
    <div class="auto-container">
        <h1>Checkout</h1>
        <ul class="page-breadcrumb">
            <li><a href="index.html">home</a></li>
            <li>Checkout</li>
        </ul>
    </div>
</section>
<!--End Page Title-->

<!--CheckOut Page-->
<section class="checkout-page">
    <div class="auto-container">
        <!--Default Links-->


        <!--Checkout Details-->
        <div class="checkout-form">
            <form method="post" action="http://html.cwsthemes.com/bellaria/checkout.html">
                <div class="row clearfix">
                    <!--Column-->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h3>Billing details</h3>
                            </div>

                            <!--Form Group-->
                            <div class="form-group">
                                <div class="field-label">First name <sup>*</sup></div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group">
                                <div class="field-label">Last name <sup>*</sup></div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>


                            <!--Form Group-->
                            <div class="form-group">
                                <div class="field-label">Street address <sup>*</sup></div>
                                <input type="text" name="field-name" value=""
                                    placeholder="House number and street name">
                            </div>

                            <!--Form Group-->
                            <div class="form-group">
                                <div class="field-label">Phone <sup>*</sup></div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>

                            <!--Form Group-->
                            <div class="form-group">
                                <div class="field-label">Email Address </div>
                                <input type="text" name="field-name" value="" placeholder="">
                            </div>
                        </div>
                    </div>

                    <!--Column-->
                    <div class="column col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-column">
                            <div class="sec-title">
                                <h3>Additional information</h3>
                            </div>

                            <!--Form Group-->
                            <div class="form-group ">
                                <div class="field-label">Order notes (optional)</div>
                                <textarea class=""
                                    placeholder="Notes about your order,e.g. special notes for delivery."></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <!--End Checkout Details-->


        <!-- Order Box-->
        <!-- <div class="order-box">
            <table>
                <thead>
                    <tr>
                        <th class="product-name">Product</th>
                        <th class="product-total">Total</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="cart-item">
                        <td class="product-name">Birthday Cake&nbsp;
                            <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>84.00</span>
                        </td>
                    </tr>

                    <tr class="cart-item">
                        <td class="product-name">Candy Lollipop&nbsp;
                            <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>84.00</span>
                        </td>
                    </tr>

                    <tr class="cart-item">
                        <td class="product-name">Classic Macaroon&nbsp;
                            <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>84.00</span>
                        </td>
                    </tr>

                    <tr class="cart-item">
                        <td class="product-name">Coffee Cake&nbsp;
                            <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>84.00</span>
                        </td>
                    </tr>

                    <tr class="cart-item">
                        <td class="product-name">French Macaroon&nbsp;
                            <strong class="product-quantity">× 1</strong>
                        </td>
                        <td class="product-total">
                            <span class="woocommerce-Price-amount amount"><span
                                    class="woocommerce-Price-currencySymbol">$</span>84.00</span>
                        </td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr class="cart-subtotal">
                        <th>Subtotal</th>
                        <td><span class="amount">$186.00</span></td>
                    </tr>
                    <tr class="order-total">
                        <th>Total</th>
                        <td><strong class="amount">$186.00</strong> </td>
                    </tr>
                </tfoot>
            </table>
        </div> -->
        <!--End Order Box

        <!--Payment Box-->
        <div class="payment-box">
            <div class="upper-box">
                <!--Payment Options-->
                <div class="payment-options">
                    <ul>

                        <!-- <li>
                                    <div class="radio-option">
                                        <input type="radio" name="payment-group" id="payment-1">
                                        <label for="payment-1"><strong>Check Payments</strong><span class="small-text">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</span></label>
                                    </div>
                                </li> -->

                        <li>
                            <div class="radio-option">
                                <input type="radio" name="payment-group" id="payment-3">
                                <label for="payment-3"><strong>Cash on Delivery</strong><span class="small-text">Make
                                        your payment directly into our bank account.
                                        Please use your Order ID as the payment reference. Your order won’t be
                                        shipped until the funds have cleared in our account.</span></label>
                            </div>
                        </li>
                    </ul>
                    <div class="text">Your personal data will be used to process your order, support your
                        experience throughout this website, and for other purposes described in our <a href="#">privacy
                            policy.</a></div>
                </div>
            </div>
            <div class="lower-box">
                <a href="thankyou.php" class="theme-btn"><span class="btn-title">Place Order</span></a>
            </div>
        </div>
        <!--End Payment Box-->
    </div>
</section>
<!--End CheckOut Page-->


<?php include 'include/footer.php' ?>

<script src="js/jquery.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/select2.min.js"></script>
<script src="js/sticky_sidebar.min.js"></script>
<script src="js/script.js"></script>