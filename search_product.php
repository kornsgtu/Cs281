<?php
  $path = "shop.php";
  include "inc/header.php";
?>

    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Search result</h2>
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


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
<?php
include "class/Conn.php";
include "class/Product.php";
$name = $_REQUEST['pname'];
if($name == ''){
  ?>
  <div class="single-sidebar">
      <h2 class="sidebar-title">Not found!</h2>
      <form action="search_product.php">
          <input type="text" placeholder="Search products..." name="pname" class="input-text">
          <input type="submit" value="Search">
      </form>
  </div>
  <?php
}else{
$pro = new Product('',$name,'','','','');
$proarr = $pro->getProductByName($conn,$name);
if($proarr == Null){
  ?>
  <div class="single-sidebar">
      <h2 class="sidebar-title">Not found!</h2>
      <form action="search_product.php">
          <input type="text" placeholder="Search products..." name="pname" class="input-text">
          <input type="submit" value="Search">
      </form>
  </div>
  <?php
}
  for($i = 0; $i<count($proarr);$i++){
?>
<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <img src="img/product/<?php echo $proarr[$i]->getimg() ;?>" alt="" width="1000">
        </div>
        <div class="col-md-10 col-sm-8">
        <h2><a href="phones.php?pid=<?php echo $proarr[$i]->getid() ;?>"><?php echo $proarr[$i]->getname(); ?></a></h2>
        <div class="product-carousel-price">
            <ins><?php echo $proarr[$i]->getprice() ;?></ins>
        </div>
      </div>
        <div class="product-option-shop">
            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
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
