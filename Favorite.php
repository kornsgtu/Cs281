<?php
  $path = "Favorite.php";
  include "inc/header.php";
  include "class/Conn.php";

?>
<?php 
if(isset($_GET['del']))
{
$fid=intval($_GET['del']);
$query=mysqli_query($conn,"delete from favorite where id='$fid'");
}
?>
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>My Favorite</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class = "type">
      <div class="row">
        <div class = "col-md-4">
      <p><blockquote>
        <table width="1225" height="160" border="1" bordercolor="Silver ">
          <tr>
            <td width="175"><div align="center"><a href="Shop_apple.php"><img src="img/apple.jpg" width="120" height="90"></a></div></td>
            <td width="175"><div align="center"><a href="Shop_samsung.php"><img src="img/Samsung-logo-2015-Nobg.png" height="123"></a></div></td>
            <td width="175"><div align="center"><a href="Shop_huawei.php"><img src="img/huawei.jpg" width="120" height="90"></a></div></td>
            <td width="175"><div align="center"><a href="Shop_oppo.php"><img src="img/oppo.jpg"></a></div></td>
            <td width="175"><div align="center"><a href="Shop_vivo.php"><img src="img/vivo.jpg"></a></div></td>
            <td width="175"><div align="center"><a href="Shop_nokia.php"><img src="img/brand1.png" alt="nokia"></td>
            <td width="175"><div align="center"><a href="Shop_asus.php"><img src="img/asus.jpg" width="120" height="90"></a></div></td>
          </tr>
        </table>
      </blockquote></p>
    </div>
        </div>
      </div>
    </div>
<?php 
$res = mysqli_query($conn,"select favorite.productid,product.pname,product.pprice,product.pimg from favorite join product on product.pid=favorite.productid where favorite.userid='".$_SESSION['mem_id']."'" );
  $num=mysqli_num_rows($res);
  ?>
    <h2 class="section-title">  Mobiles (<?php echo $num;?>) </h2>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
           
            
<?php

  $res = mysqli_query($conn,"select favorite.productid as fid ,favorite.id as id,product.pname as ppname,product.pprice as ppprice,product.pimg as ppimg from favorite join product on product.pid=favorite.productid where favorite.userid='".$_SESSION['mem_id']."'" );
  $num=mysqli_num_rows($res);
   if($num>0){
   ?>
   <table align="center" width="500px">
            <tr>
            <td>image</td>
            <td>name</td>
            <td>price</td>
            <td>option</td>
            </tr>
   <?php 
   
      while($row=mysqli_fetch_array($res)){
?>
<tr>
<td><img src="img/product/<?php echo $row['ppimg'] ;?>" width="100" height="100" alt=""></td>
            <td><a href="phones.php ?pid=<?php echo $row['fid'] ;?>&&action=unfavorite"><?php echo $row['ppname'] ;?></a></td>
            <td><?php echo $row['ppprice'] ;?></td>
            <td><a href="Favorite.php?del=<?php echo htmlentities($row['id']);?>" onClick="return confirm('Are you sure you want to delete?')" class=""><i class="fa fa-times"></i></a></td>
</tr>
<?php 
}
}
?>
</table>
<?php
/*
      echo $arrProd[$i]->_pid . " ";

      echo $arrProd[$i]->_info . " ";
      ;
      echo $arrProd[$i]->_stock . " ";
      echo "<br>";
*/
  

?>



            </div>

            <!--<div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>
                    </div>
                </div>
            </div>-->
        </div>
    </div>

    <?php
          include "inc/end.php"

    ?>
