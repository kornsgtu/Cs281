<?php

  include "class/Conn.php";
  include "class/Product.php";
  include "class/cart.php";
  include "class/CartDetail.php";
  session_start();

  $camount = $_REQUEST['camount'];
  $pid = $_REQUEST['pid'];


  for($i=0;$i<count($pid);$i++) {

      cart::updateProduct($_SESSION['cartItem'],$pid[$i],$camount[$i]);

  }


?>
<script>
  alert("update success !!!");
  window.location='cart-page.php';
</script>
