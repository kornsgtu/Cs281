<?php

  include "class/Conn.php";
  include "class/Product.php";

  $id = "";
  $name = "";
  $price = "";
  $info = "";
  $img = "";
  $stock = "";
  $pro = new Product($id,$name,$price,$info,$img,$stock);
  $arrProd = $pro->getListProd($conn);

  for($i = 0; $i<count($arrProd);$i++){
?>
<table>
  <tr>
    <td><a href="aaa.php?pid=<?=$arrProd[$i]->getid()?>"><?=$arrProd[$i]->getname()?></a></td>
    <td><?=$arrProd[$i]->getprice()?></td>
  </tr>

</table>
<?php
/*
      echo $arrProd[$i]->_pid . " ";
      echo $arrProd[$i]->_pname . " ";
      echo $arrProd[$i]->_info . " ";
      echo $arrProd[$i]->_price . " ";
      echo $arrProd[$i]->_stock . " ";
      echo "<br>";
*/
  }

?>
