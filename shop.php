<?php
  $path = "shop.php";
  include "inc/header.php";

?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop</h2>
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

    <h2 class="section-title">  Mobiles (11) </h2>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
<?php

  include "class/Conn.php";
  include "class/Product.php";

  $id = "";
  $name = "";
  $price = "";
  $info = "";
  $img = "";
  $stock = "";
  $discount = "";
  $pro = new Product($id,$name,$price,$info,$img,$stock,$discount);
  $arrProd = $pro->getListProd($conn);

  for($i = 0; $i<count($arrProd);$i++){

?>
<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <img src="img/product/<?php echo $arrProd[$i]->getimg() ;?>" alt="">
        </div>
        <div class="col-md-10 col-sm-8">
        <h2><a href="phones.php ?pid=<?php echo $arrProd[$i]->getid() ;?>&&action=unfavorite"><?php echo $arrProd[$i]->getname(); ?></a></h2>
        <div class="product-carousel-price">
          <?php
            $realPrice = $arrProd[$i]->getprice();
            $disPer = $arrProd[$i]->getdiscount();
            $calPrice = $realPrice - ($realPrice*($disPer/100));
          if($disPer > 0){
            ?>
            <strike><?php echo number_format((float)$realPrice, 2, '.', '');?></strike>
            <ins><?php echo number_format((float)$calPrice, 2, '.', '');?></ins>
            <?php
          }else{
            ?>
            <ins><?php echo number_format((float)$realPrice, 2, '.', '');?></ins>
            <?php
          }
            ?>
        </div>
      </div>

        <div class="product-option-shop">
          <?php
          if(isset($_SESSION["mem_id"])){
            if($arrProd[$i]->getstock()==0){
          ?>
            <button style="height:30px;width:120px" type="button" class="btn btn-primary disabled">Out of stock.</button>
          <?php
            }else{
          ?>
            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="cart-page.php?pid=<?php echo $arrProd[$i]->getid() ;?>" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
          <?php
            }

          }else{
          ?>
            <input type="button" value = "Please login to add item to cart." class="btn btn-info disabled">
          <?php
          }
           ?>

        </div>
    </div>
</div>
<?php
/*
      echo $arrProd[$i]->_pid . " ";

      echo $arrProd[$i]->_info . " ";
      ;
      echo $arrProd[$i]->_stock . " ";
      echo "<br>";
*/
  }

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
