<?php

  include "class/Conn.php";
  include "class/Coupon.php";


  $cpid = $_REQUEST['cpid'];
  $cou = new coupon($cpid,'','');
  $cou->deleteProduct($conn);


?>
