<?php

  include "class/Conn.php";
  include "class/Coupon.php";

  $cdis = $_REQUEST['cdis'];
  


  $pro = new Coupon($cpid,$code,$cdis);
  $pro->addCoupon($conn);

?>
