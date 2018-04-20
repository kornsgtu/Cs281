<?php

  $path = "index.php";
  include "inc/header.php";

?>

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.html">Cart - <span class="cart-amunt">$800</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">5</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop page</a></li>
                        <li><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->

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
                                        include 'class/Product.php';
                                        include 'class/Conn.php';
                                        $product = new Product('','','','','','');
                                        $proarr = $product->getListProd($conn);
                                        foreach ($proarr as $pro){?>
                                        <form action="updateProduct.php" method="post">
                                        <tr class="cart_item">
                                            <td class="product-id">
                                                  <input type="hidden" name="pid" value="<?php echo $pro->_pid; ?>">
                                                   <?php echo $pro->_pid; ?>
                                            </td>

                                            <td class="product-name">
                                                <a href="single-product.html"><?php echo $pro->_pname; ?></a>
                                            </td>

                                            <td class="product-price">
                                                <input type="text" value="<?php echo $pro->_price; ?>" placeholder="" id="product-price" name="pprice" class="input-text ">
                                                <label>TH Baht</label>
                                            </td>

                                            <td class="product-quantity">
                                                <div class="quantity buttons_added">
                                                    <input type="number" size="4" class="input-text qty text" name="qty" title="Qty" value="<?php echo $pro->_stock; ?>" min="0" step="1">
                                                </div>
                                            </td>
                                            <td>
                                                <input type="submit" value="Update" name="proceed" class="checkout-button button alt wc-forward">
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger">
                                                  Delete
                                                </button>
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

    <?php
          include "inc/end.php"

    ?>
