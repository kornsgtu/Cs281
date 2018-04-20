<?php
  include "inc/shop-header.php";

?>
    <h2 class="section-title">  Nokia Mobiles (1) </h2>

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
  $pro = new Product($id,$name,$price,$info,$img,$stock);
  $arrProd = $pro->getListProd($conn);

  for($i = 0; $i<count($arrProd);$i++){

?>
<div class="col-md-3 col-sm-6">
    <div class="single-shop-product">
        <div class="product-upper">
            <img src="img/product/<?php echo $arrProd[$i]->getimg() ;?>" alt="">
        </div>
        <div class="col-md-10 col-sm-8">
        <h2><a href="single-product.php?pid=<?php echo $arrProd[$i]->getid() ;?>"><?php echo $arrProd[$i]->getname(); ?></a></h2>
        <div class="product-carousel-price">
            <ins><?php echo $arrProd[$i]->getprice() ;?></ins>
        </div>
      </div>

        <div class="product-option-shop">
            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70" ><i class="fa fa-shopping-cart"></i> Add to cart</a>
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
