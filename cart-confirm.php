<?php

  include "class/Conn.php";
  include "class/Product.php";
  include "class/cart.php";
  include "class/CartDetail.php";
  session_start();

  $cart = new cart();
  $cart->setMemId($_SESSION["mem_id"]);
  $cart->setItemList($_SESSION['cartItem']);
  $cart->cartConfirm($conn);

?>
<script>

      window.location='delivery-page.php';

</script>
