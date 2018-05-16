<?php

  include "class/Conn.php";
  include "class/Coupon.php";


  $cdis = $_REQUEST['cdis'];

  $pro = new Coupon($cdis);
  $pro->randomCouponCode($conn);

?>
