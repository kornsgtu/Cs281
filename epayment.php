<?php
session_start();
include "class/Conn.php";
include "class/Member.php";
include "class/Product.php";
include "class/cart.php";
include "class/cartDetail.php";
include "class/Payment.php";

$mem = new Member($_SESSION['mem_id'],"","","","","","");
$mem->getMemById($conn);


?>
<html>
  <head>
    <title>EPAYLINK Testing</title></head>
<body bgcolor="#FFFFFF" text="#000000">
<form method="post"
  action="https://www.thaiepay.com/epaylink/payment.aspx">
  <input type="hidden" name="refno" value="99999">
  <input type="hidden" name="merchantid" value="<?=sprintf("%08d",$_REQUEST['pay_id'])?>">
  <input type="hidden" name="customeremail" value="<?=$mem->getemail()?>">
  <input type="hidden" name="productdetail" value="test">
  <input type="hidden" name="total" value="<?=sprintf($_REQUEST['pay_total'])?>">
  <input type="hidden" name="cc" value="00">
  <input type="hidden" name="returnurl" value="http://http://localhost/281/Cs281/index.php?id=success">
  <br>

<input type="submit" name="Submit" value="Comfirm Order">
</form>
</body>
</html>
