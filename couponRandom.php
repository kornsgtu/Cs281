<?php

  include "class/Conn.php";
  include "class/Coupon.php";


  $cpid = $REQUEST['cpid'];
  $code = $_REQUEST['code'];

  $pro = new Coupon($cpid,$code);
  $pro->randomCouponCode($conn);

?>
