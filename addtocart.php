<?php
  include "class/Conn.php";
  include "class/cart.php";

  $cname = $_REQUEST['pname'];
  $piece = $_REQUEST['capiece'];
  
  $cart = new cart($cname,$cimg,$cprice,$piece);
  $cart->addcart($conn,$canme);

?>
