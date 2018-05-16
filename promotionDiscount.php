<?php
  $path = "promotionDiscount.php";
  include "inc/header.php";
  include 'class/Product.php';
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
                                            <th class="product-id">ID</th>
                                            <th class="product-name">Product name</th>
                                            <th class="product-name">Price</th>
                                            <th class="product-price">Discount</th>
                                            <th class="product-price">Update Promotion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $product = new Product('','','','','','','');
                                        $proarr = $product->getListProd($conn);



                                        foreach ($proarr as $pro){?>
                                        <form action="updateDiscount.php" method="post">
                                        <tr class="cart_item">
                                            <td class="product-id">
                                                  <input type="hidden" name="pid" value="<?php echo $pro->getid(); ?>">
                                                   <?php echo $pro->getid(); ?>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $pro->getname(); ?></a>
                                            </td>

                                            <td class="product-price">
                                                <input type="hidden" value="<?php echo $pro->getprice(); ?>" placeholder="" name="pprice">
                                                <?php
                                                $realPrice = $pro->getprice();
                                                $disPer = $pro->getdiscount();
                                                $calPrice = $realPrice - ($realPrice*($disPer/100));
                                                ?>
                                                <?php
                                                  if($disPer >0){
                                                ?>
                                                  <strike><?php echo $realPrice ?><strike>
                                                  <label><?php echo $calPrice ?><label>
                                                <?php
                                                  }else {
                                                ?>
                                                  <label><?php echo $realPrice ?><label>
                                                <?php
                                                  }
                                                ?>

                                                <label>TH Baht</label>
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
