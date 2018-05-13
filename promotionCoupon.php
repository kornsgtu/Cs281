<?php
  $path = "promotionCoupon.php";
  include "inc/header.php";
  include 'class/Coupon.php';
  include 'class/Conn.php';
?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Coupon</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <h3>Add Coupon</h3>
              <form enctype="multipart/form-data" action="addCoupon.php" class="checkout" method="post" name="checkout">
              <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                  <label class="" for="billing_first_name">Insert Coupon discount
                  </label>
                  <input type="text" placeholder="%" name="cdis" maxlength="2" size="4">
                  <input type="submit" value="Add" name="proceed" class="checkout-button button alt wc-forward">
              </p>
            </form>
                <div class="col-md-12">
                    <div class="product-content-right">
                        <div class="woocommerce">
                                <table cellspacing="0" class="shop_table cart">
                                    <thead>
                                        <tr>
                                            <th class="product-id">Coupon ID</th>
                                            <th class="product-name">Code</th>
                                            <th class="product-name">discount</th>
                                            <th class="product-name">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $Coup = new Coupon('','','');
                                        $coparr = $Coup->getListCoup($conn);



                                        foreach ($coparr as $cop){?>
                                        <form action="updatePromotion.php" method="post">
                                        <tr class="cart_item">
                                            <td class="coupon-id">
                                                  <input type="hidden" name="cpid" value="<?php echo $cop->getcpid(); ?>">
                                                   <?php echo $cop->getcpid(); ?>
                                            </td>

                                            <td class="coupon-code">
                                              <input type="hidden" name="code" value="<?php echo $cop->getcode(); ?>">
                                               <?php echo $cop->getcode(); ?>
                                            </td>

                                            <td class="Discount">
                                              <input type="hidden" name="cdis" value="<?php echo $cop->getcdis(); ?>">
                                               <?php echo $cop->getcdis(); ?>
                                               <label>%</label>
                                            </td>

                                            <td class="Delete">
                                                <input type="button" data-value="Place order" value="Delete" id="place_order" name="woocommerce_checkout_place_order" class="btn btn-danger">
                                            </td>

                                        </tr>
                                        </form>
                                      <?php } ?>
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
