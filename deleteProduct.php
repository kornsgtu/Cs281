<?php

  include "class/Conn.php";
  include "class/Product.php";


  $id = $_REQUEST['pid'];
  $pro = new Product($id,'','','','','','');
  $pro->deleteProduct($conn);


?>
