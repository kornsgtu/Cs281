<?php
  $path = "addProduct.php";
  include "inc/header.php";
?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Add Product</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">

                            <form id="login-form-wrap" class="login collapse" method="post">

                                <p class="form-row form-row-first">
                                    <label for="username">Username or email <span class="required">*</span>
                                    </label>
                                    <input type="text" id="username" name="username" class="input-text">
                                </p>
                                <p class="form-row form-row-last">
                                    <label for="password">Password <span class="required">*</span>
                                    </label>
                                    <input type="password" id="password" name="password" class="input-text">
                                </p>
                                <div class="clear"></div>


                                <p class="form-row">
                                    <input type="submit" value="Login" name="login" class="button">
                                    <label class="inline" for="rememberme"><input type="checkbox" value="forever" id="rememberme" name="rememberme"> Remember me </label>
                                </p>
                                <p class="lost_password">
                                    <a href="#">Lost your password?</a>
                                </p>

                                <div class="clear"></div>
                            </form>

                            <form id="coupon-collapse-wrap" method="post" class="checkout_coupon collapse">

                                <p class="form-row form-row-first">
                                    <input type="text" value="" id="coupon_code" placeholder="Coupon code" class="input-text" name="coupon_code">
                                </p>

                                <p class="form-row form-row-last">
                                    <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                </p>

                                <div class="clear"></div>
                            </form>

                            <form enctype="multipart/form-data" action="addProduct.php" class="checkout" method="post" name="checkout">

                                <div id="customer_details" class="col12-set">
                                    <div class="col-12">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Add Product</h3>

                                            <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                                <label class="" for="billing_first_name">Product Name
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_first_name" name="pname" class="input-text ">
                                            </p>

                                            <p id="billing_last_name_field" class="form-row form-row-last validate-required">
                                                <label class="" for="billing_last_name">Price
                                                </label>
                                                <input type="text" value="" placeholder="" id="billing_last_name" name="pprice" class="input-text ">
                                            </p>
                                            <div class="clear"></div>

                                            <p id="billing_company_field" class="form-row form-row-wide">
                                                <label class="" for="billing_company">Info</label>
                                                <textarea name="pinfo" rows="10" cols="50"></textarea>
                                            </p>



                                            <p id="billing_city_field" class="form-row form-row-wide address-field validate-required" data-o_class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_city">Image
                                                </label>
                                                <input type="file" value="" placeholder="Town / City" id="billing_city" name="pimg" class="input-text ">
                                            </p>



                                            <div class="clear"></div>




                                            <div class="clear"></div>
                                        </div>
                                        <div class="form-row place-order">

                                            <input type="submit" data-value="Place order" value="ADD" id="place_order" name="woocommerce_checkout_place_order" class="button alt">


                                        </div>

                                    </div>
                                  </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
