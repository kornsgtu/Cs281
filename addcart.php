<?php

  include "class/Conn.php";
  include "class/cart-page.php";


  $id = $_
  $name = $_REQUEST['name'];
  $price = $_REQUEST['price'];
  $info = $_REQUEST['piece'];
  $img = $_FILES["pimg"]["name"];
  $stock = 1;

  $pro = new Product($id,$name,$price,$info,$img,$stock);
  $pro->addProduct($conn);
  move_uploaded_file($_FILES["pimg"]["tmp_name"],"img/product/".$img);

  $strSQL = "SELECT * FROM Product WHERE pid = '".$_GET["OrderID"]."' ";
  $objQuery = mysql_query($strSQL)  or die(mysql_error());
  $objResult = mysql_fetch_array($objQuery);

?>
