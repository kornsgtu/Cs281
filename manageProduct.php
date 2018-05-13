<?php
  $path = "manageProduct.php";
  include "inc/header.php";
  include 'class/Product.php';
  include 'class/Conn.php';
?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Product manage</h2>
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
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Stock</th>
                                            <th class="product-quantity">Update</th>
                                            <th class="delete">Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php

                                        $product = new Product('','','','','','','');
                                        $proarr = $product->getListProd($conn);
                                        foreach ($proarr as $pro){?>
                                        <form action="updateProduct.php" method="post">
                                        <tr class="cart_item">
                                            <td class="product-id">
                                                  <input type="hidden" name="pid" value="<?php echo $pro->getid(); ?>">
                                                   <?php echo $pro->getid(); ?>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $pro->getname(); ?></a>
                                            </td>

                                            <td class="product-price">
                                                <input type="text" value="<?php echo $pro->getprice(); ?>" placeholder="" id="product-price" name="pprice" class="input-text ">
                                                <label>TH Baht</label>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="number" size="4" class="input-text qty text" name="qty" title="Qty" value="<?php echo $pro->getstock(); ?>" min="0" step="1">
                                                </div>
                                            </td>
                                            <td>
                                                <input type="submit" value="Update" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>

                                            <td>
                                                <input type="button" value = "Delete" class="btn btn-danger" onclick="window.location.href='deleteProduct.php?pid=<?=$pro->getid()?>'">
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
