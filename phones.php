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
    $discount = "";
    $pro = new Product($id,$name,$price,$info,$img,$stock,$discount);
    $pro->getProductById($conn,$_REQUEST['pid']);

    if(isset($_SESSION["mem_id"])){
      $mem = $_SESSION["mem_id"];

      if($_GET['action']=="favorite"){
        if(isset($_SESSION["mem_id"])){
          $idp = $pro->getid();
          mysqli_query($conn,"insert into favorite(userid,productid) values('$mem','$idp')");
          echo "<script>alert('Product added in my Favorite');</script>";
        }else{
         echo "<script>alert('cannot add my favorite');</script>";


         }
    }else{

      }

   }else{
     if($_GET['action']=="favorite"){
        echo "<script>alert('cannot add my favorite');</script>";
     }
   }


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
                                        <ins><?php
                                              $realPrice = $pro->getprice();
                                              $disPer = $pro->getdiscount();
                                              $calPrice = $realPrice - ($realPrice*($disPer/100));

                                                if($disPer > 0){
                                                  echo number_format((float)$calPrice, 2, '.', '');
                                                }else{
                                                  echo number_format((float)$realPrice, 2, '.', '');
                                                }
                                              ?></ins>
                                    </div>

                                      <form action="cart-page.php?pid=<?php echo $pro->getid();?>" method="post" class="cart">
                                    <div class="favorite-button m-t-10">
											<a class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Wishlist" href="phones.php?pid=<?php echo htmlentities($pro->getid())?>&&action=favorite">
											    <i class="fa fa-heart"></i>
											</a>

											</a>
										</div>
									</div>
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>

                                        <?php
                                        if(isset($_SESSION["mem_id"])){
                                          if($pro->getstock() == 0){
                                        ?>
                                          <input type="button" value = "Out of stock." class="btn btn-primary disabled">
                                          <ins class="#"><?php echo '(Available Stock: ' . $pro->getstock() . ' )' ;?></ins>
                                        <?php
                                          }else{
                                        ?>
                                          <button class="add_to_cart_button" type="submit">Add to cart</button>
                                          <ins class="#"><?php echo '(Available Stock: ' . $pro->getstock() . ' )' ;?></ins>
                                        <?php
                                          }

                                        }else{
                                        ?>
                                          <input type="button" value = "Please login to add item to cart." class="btn btn-info disabled">
                                        <?php
                                        }
                                         ?>


                                        <br>
                                       <div class="col-sm-6">


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
