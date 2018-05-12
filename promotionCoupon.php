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
                        <h2>Promotion Discount</h2>
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
                                            <th class="product-id">Coupon ID</th>
                                            <th class="product-name">Code</th>
                                            <th class="product-name">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $Coup = new Coupon('','');
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
                                                <input type="number" size="4" class="input-text qty text" name="discount" title="discount" value="<?php echo $pro->getdiscount() ?>" min="0" max="99" step="1">
                                                <label>%</label>
                                            </td>

                                            <td>
                                                <input type="submit" value="Update" name="proceed" class="checkout-button button alt wc-forward">
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
