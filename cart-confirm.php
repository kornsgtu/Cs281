<?php

  include "class/Conn.php";
  include "class/Product.php";
  include "class/cart.php";
  include "class/CartDetail.php";
  include "class/Payment.php";
    session_start();

  $cart = new cart();
  $cart->setMemId($_SESSION["mem_id"]);
  $cart->setItemList($_SESSION['cartItem']);
  $cart->cartConfirm($conn);



  $pay = new Payment();

  $pay->setcartId($cart->getCartID());
  $pay->setstatus('.wait.');
  $total = $_REQUEST['total'];
  //$pay->setpaymentId($_SESSION["payment_id"]);
  $pay->setcartList($_SESSION['cartItem']);
  $pay->settotalPrice($total);
  $pay->paymentConfirm($conn);
  $pay->updateStatus($conn);
?>
<script>

      window.location='delivery-page.php?pay_id=<?=$pay->getpaymentId()?>pay_total=<?=$pay->gettotalPrice()?>';

</script>
