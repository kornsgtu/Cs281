<?php

  $path = "single-product.php";
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


    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                  <div class="single-sidebar">
                      <h2 class="sidebar-title">Products</h2>
                      <div class="thubmnail-recent">
                          <img src="img\product\Apple-iPhone-8.jpg" class="recent-thumb" alt="">
                          <h2><a href="single-product.html">IPhone 8</a></h2>
                          <div class="product-sidebar-price">
                              <ins> ฿28500.00</ins>
                          </div>
                      </div>
                      <div class="thubmnail-recent">
                          <img src="img\product\Apple-iPhone-8plus.jpg" class="recent-thumb" alt="">
                          <h2><a href="single-product.html">IPhone 8+</a></h2>
                          <div class="product-sidebar-price">
                              <ins>฿32500.00</ins>
                          </div>
                      </div>
                      <div class="thubmnail-recent">
                          <img src="img\product\Apple-iPhone-X.jpg" class="recent-thumb" alt="">
                          <h2><a href="single-product.html">IPhone X</a></h2>
                          <div class="product-sidebar-price">
                              <ins>฿40500.00 </ins>
                          </div>
                      </div>
                      <div class="thubmnail-recent">
                          <img src="img\product\Samsung-Galaxy-s9+.jpg" class="recent-thumb" alt="">
                          <h2><a href="single-product.html">Samsung Galaxy S9+</a></h2>
                          <div class="product-sidebar-price">
                              <ins>฿31900.00</ins>
                          </div>
                      </div>
                  </div>
                </div>

                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">Sony Smart TV - 2015</a>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/product-2.jpg" alt="">
                                    </div>

                                    <div class="product-gallery">
                                        <img src="img/product-thumb-1.jpg" alt="">
                                        <img src="img/product-thumb-2.jpg" alt="">
                                        <img src="img/product-thumb-3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
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
                                    <h2><a href="phones.php ?pid=<?php echo $arrProd[$i]->getid() ;?>"><?php echo $arrProd[$i]->getname(); ?></a></h2>
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
                            }
                            ?>      
                                </div>
                            </div>
                        </div>


                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart TV - 2015</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$700.00</ins> <del>$100.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new mac book 2015 March :P</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$999.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Apple new i phone 6</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony playstation microsoft</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$200.00</ins> <del>$225.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Sony Smart Air Condtion</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1355.00</del>
                                    </div>
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/product-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Samsung gallaxy note 4</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins>
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
