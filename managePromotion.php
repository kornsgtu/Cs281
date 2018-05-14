<?php
  $path = "managePromotion.php";
  include "inc/header.php";
  include 'class/Product.php';
  include 'class/Conn.php';
?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Promotion Manage</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">


                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                          <input type="button" value = "Discount product" class="btn btn-info btn-block btn-lg" onclick="window.location.href='promotionDiscount.php'">
                                          <input type="button" value = "Coupon" class="btn btn-info btn-block btn-lg" onclick="window.location.href='promotionCoupon.php'">
                                        </tr>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
