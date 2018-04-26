<?php

  include "class/Conn.php";
  include "class/Product.php";
  include "class/cart.php";
  session_start();

  $pid = $_REQUEST['prod'];

  cart::delProduct($_SESSION['cartItem'],$pid);

?>
<script>
  alert("delete success !!!");
  window.location='cart-page.php';
</script>
