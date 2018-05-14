<?php

    $path = "history.php";

    include "class/Conn.php";
    include "class/Product.php";
    include "class/cart.php";
    include "class/cartDetail.php";
    include "class/Payment.php";

    include "inc/header.php";
    $arraysongaun = array();

    $sql = "SELECT * FROM cart inner Join payment WHERE payment.cart_id = cart.cart_id";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
    while($data=$rs->fetch_object()) {
      $payment = new Payment();
      $payment->setpaymentId($data->payment_id);
      $payment->setcartId($data->cart_id);
      $payment->settotalPrice($data->total);
      $payment->setstatus($data->status);
      $cart = new cart();
      $cart->setDate($data->cart_date);
      $cart->setMemID($data->mem_id);

      array_push($arraysongaun,$payment);
      array_push($arraysongaun,$cart);
    }

?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>History</h2>
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





            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="history-update.php">
                            <table cellspacing="0" class="shop_table cart">
                                <thead>
                                    <tr>
                                        <th class="product-order">Order No.</th>
                                        <th class="product-name">Member</th>
                                        <th class="product-price">Price</th>
                                        <th class="product-date">Time</th>
                                        <th class="product-status">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="Payment">
                                        <td class="product-order">
                                          <span><? echo $arraysongaun->getpaymentId()?></span>
                                        </td>

                                        <td class="product-name">
                                            <span ><?echo $arraysongaun->getMemID()?>"></span>
                                        </td>

                                        <td class="product-price">
                                            <span ><?echo $arraysongaun->gettotalPrice()?></span>
                                        </td>

                                        <td class="product-date">
                                          <span ><?echo $arraysongaun->getDate()?></span>
                                        </td>

                                        <td class="product-status">
                                          <span ><?echo $arraysongaun->getstatus()?></span>
                                        </td>

                                        <tr>

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
