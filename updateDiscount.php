<?php

  include "class/Conn.php";
  include "class/Product.php";


  $id = $_REQUEST['pid'];
  $discount = $_REQUEST['discount'];
  $pro = new Product($id,'','','','','',$discount);
  $pro->updatePromotion($conn);
?>
