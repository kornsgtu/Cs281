<?php

  $path = "cart.php";
  include "inc/header.php";

?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Shopping Cart</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">


                <div class="single-sidebar">
                    <h2 class="sidebar-title">Products</h2>
                    <div class="thubmnail-recent">
                        <img src="img\product\Apple-iPhone-8.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">IPhone 8</a></h2>
                        <div class="product-sidebar-price">
                            <ins> ฿28500.00</ins>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img\product\Apple-iPhone-8plus.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">IPhone 8+</a></h2>
                        <div class="product-sidebar-price">
                            <ins>฿32500.00</ins>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img\product\Apple-iPhone-X.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">IPhone X</a></h2>
                        <div class="product-sidebar-price">
                            <ins>฿40500.00 </ins>
                        </div>
                    </div>
                    <div class="thubmnail-recent">
                        <img src="img\product\Samsung-Galaxy-s9+.jpg" class="recent-thumb" alt="">
                        <h2><a href="single-product.html">Samsung Galaxy S9+</a></h2>
                        <div class="product-sidebar-price">
                            <ins>฿31900.00</ins>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="#">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">Delete</th>
                                        <th class="product-thumbnail">Pic</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="#">×</a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product-thumb-2.jpg"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.php" name = "pname">Ship Your Idea</a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount">£15.00</span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                                <input type="text" value="" placeholder="" name="capiece" class="input-text ">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount">£15.00</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="actions" colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                            </div>
                                            <input type="submit" value="Update Cart" name="update_cart" class="button">
                                            <input type="submit" value="Checkout" name="proceed" class="checkout-button button alt wc-forward">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>

                        <div class="cart-collaterals">


                        <div class="cross-sells">
                            <h2>You may be interested in...</h2>
                            <ul class="products">
                                <li class="product">
                                    <a href="single-product.php">
                                        <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-2.jpg">
                                        <h3>Ship Your Idea</h3>
                                        <span class="price"><span class="amount">£20.00</span></span>
                                    </a>

                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                </li>

                                <li class="product">
                                    <a href="single-product.php">
                                        <img width="325" height="325" alt="T_4_front" class="attachment-shop_catalog wp-post-image" src="img/product-4.jpg">
                                        <h3>Ship Your Idea</h3>
                                        <span class="price"><span class="amount">£20.00</span></span>
                                    </a>

                                    <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="22" rel="nofollow" href="single-product.html">Select options</a>
                                </li>
                            </ul>
                        </div>


                        <div class="cart_totals ">
                            <h2>Cart Totals</h2>

                            <table cellspacing="0">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <th>Cart Subtotal</th>
                                        <td><span class="amount">£15.00</span></td>
                                    </tr>

                                    <tr class="shipping">
                                        <th>Tax</th>
                                        <td>Free Shipping</td>
                                    </tr>

                                    <tr class="order-total">
                                        <th>Order Total</th>
                                        <td><strong><span class="amount">£15.00</span></strong> </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>





                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <?php
          include "inc/end.php"

    ?>
