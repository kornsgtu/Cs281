<?php

    $path = "cart-page.php";

    include "class/Conn.php";
    include "class/Product.php";
    include "class/cart.php";
    include "class/cartDetail.php";

    include "inc/header.php";



    if(!isset($_SESSION['cartItem'])) {

        $_SESSION['cartItem'] = array();

    }

    if(isset($_REQUEST['pid'])) {

        $pid = $_REQUEST['pid'];
        cart::addProduct($_SESSION['cartItem'],$pid,1,$conn);

    }

  //print_r($_SESSION['cartItem']);

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
                        <form method="post" action="cart-update.php">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-remove">Delete</th>
                                        <th class="product-thumbnail">Pic</th>
                                        <th class="product-name">Product</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-quantity">Quantity</th>
                                        <th class="product-subtotal">Total Price</th>
                                        <th class="product-vat">Vat</th>
                                        <th class="product-final">Final Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
<?php
      $total = 0;
      for($i=0;$i< count($_SESSION['cartItem']);$i++) {

          $prod = $_SESSION['cartItem'][$i]->getProd();

?>
                                        <td class="product-remove">
                                            <a title="Remove this item" class="remove" href="cart-delete.php?prod=<?=$prod->getid()?>">
                                                Remove
                                            </a>
                                        </td>

                                        <td class="product-thumbnail">
                                            <a href="single-product.php"><img width="145" height="145" alt="poster_1_up" class="shop_thumbnail" src="img/product/<?=$prod->getimg()?>"></a>
                                        </td>

                                        <td class="product-name">
                                            <a href="single-product.php" name = "pname"><?=$prod->getname()?></a>
                                        </td>

                                        <td class="product-price">
                                            <span class="amount"><?=$prod->getprice()?></span>
                                        </td>

                                        <td class="product-quantity">
                                            <div class="quantity buttons_added">
                                              <input type="number" value="<?=$_SESSION['cartItem'][$i]->getAmount()?>" placeholder="" name="camount[]" class="input-text ">
                                              <input type="hidden" value="<?=$prod->getid()?>" name="pid[]">
                                            </div>
                                        </td>

                                        <td class="product-subtotal">
                                            <span class="amount"><?=$prod->getprice()*$_SESSION['cartItem'][$i]->getAmount()?></span>
                                        </td>
                                        <td class="product-vat">
                                            <span class="amount">
                                            <?php
                                                //$prod->getprice()*$_SESSION['cartItem'][$i]->getVat()
                                                $_SESSION['cartItem'][$i]->setVat();
                                                echo $_SESSION['cartItem'][$i]->getVat();
                                            ?>
                                            </span>
                                        </td>
                                        <td class="product-final">
                                            <span class="amount">
                                            <?php
                                                $_SESSION['cartItem'][$i]->setFinal();
                                                echo $_SESSION['cartItem'][$i]->getFinal();
                                                $total = $total + $_SESSION['cartItem'][$i]->getFinal();
                                            ?>
                                            </span>
                                        </td>
                                    </tr>
<?php
      }
?>
                                    <tr>
                                        <td class="actions" colspan="6">
                                            <div class="coupon">
                                                <label for="coupon_code">Coupon:</label>
                                                <input type="text" placeholder="Coupon code" value="" id="coupon_code" class="input-text" name="coupon_code">
                                                <input type="submit" value="Apply Coupon" name="apply_coupon" class="button">
                                            </div>
                                            <input type="submit" value="Update Cart" name="update_cart" class="button">

                                        </td>
                                        <td class="actions" colspan="6">

                                            <label><?php echo 'Total Price: ' . $total ?></label>


                                          <input type="button" value="Comfirm" id="btnSave" name="confirm" class="btn btn-success">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">

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
<script>

  $('#btnSave').click(function() {
      window.location='cart-confirm.php';
  });

</script>
