<?php
  include "inc/phones-header.php";

?>
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
    $pro->getProductById($conn,$_REQUEST['pid']);

?>

    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
              <?php
                  include "inc/Related-products.php"
              ?>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="index.php">Home</a>
                            <a href="shop.php">Shop</a>
                            <font color="LightSlateGray "> <?php echo $pro->getname() ;?></font>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/product/<?php echo  $pro->getimg() ;?>" alt="">
                                    </div>

                                    <!--<div class="product-gallery"> รูปเล็ก
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>-->
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="product-inner">
                                  <div class="product-wid-rating">
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                      <i class="fa fa-star"></i>
                                  </div>
                                    <h2 class="product-name"><?php echo $pro->getname() ;?></h2>
                                    <div class="product-inner-price">
                                        <ins><?php echo $pro->getprice() ;?></ins>
                                    </div>

                                    <form action="cart-page.php" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                        <ins class="#"><?php echo '(Available Stock: ' . $pro->getstock() . ' )' ;?></ins>
                                    </form>
                                    <div role="tabpanel">
                                          <h2>Product Description</h2>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                  <ins><?php echo $pro->getinfo() ;?></ins>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
          include "inc/end.php"

    ?>
