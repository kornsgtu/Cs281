<?php

  include "class/Conn.php";
  include "class/Coupon.php";


  $cdis = $_REQUEST['cdis'];
  if($cdis <= 0){
    echo "<script>alert('Please insert discount amount(%).');window.location='promotionCoupon.php'</script>";
  }else{
    $cou = new Coupon('','',$cdis);
    $code = $cou->randomCouponCode($conn);

    $cou = new Coupon('',$code,$cdis);
    $cou->addCoupon($conn);
  }


?>
