<?php
  include "class/Conn.php";
  include "class/Coupon.php";
  include "class/Product.php";
  include "class/cart.php";
  include "class/CartDetail.php";

  $code = $_REQUEST['code'];
  if($code == Null){
    echo "<script>alert('No coupon code detected.');window.location='cart-page.php'</script>";

  }else{
      $cou = new Coupon('',$code,'');
      $couarr = $cou->getCouponBycode($conn,$code);

      if($couarr == Null){
        echo 'Coupon not found';

      }else{
            echo $couarr[0]->getcdis();


      }


}
?>
<script>
  alert("Coupon Applied!");
  window.location='cart-page.php';
</script>
