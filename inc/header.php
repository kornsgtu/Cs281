<?php
    session_start();
?>
<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Smart Phone 4.0 Thailand</title>

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body>

    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="user-menu">
                        <h1><a href="./"><img src="img/banner.png"></a></h1>
                    </div>
                </div>

                <div class="col-md-14">
                  <div class="header-right">
                      <ul class="list-unstyled list-inline">
                          <li class="dropdown dropdown-small">
                              <?php
                                if(isset($_SESSION["mem_type"])){
                                      if($_SESSION["mem_type"]==0){
                                        echo 'Welcome Admin!';
                              ?>
                                        <li>
                                        <a href="cart.html"><i class="fa fa-user"></i>
                                          <?php
                                              if(isset($_SESSION["mem_id"])){
                                                  echo $_SESSION["mem_id"];
                                              }else{
                                                  echo 'Please login';
                                              }
                                          ?>
                                        </a></li>

                              <?php
                                          echo '<li><a href="addproductPage.php"><i class=""></i>Add Product</a></li>';
                                          echo '<li><a href="manageProduct.php"><i class=""></i>Manage Product</a></li>';
                                        }else{
                                        ?>
                                          <li><a href="cart.php"><i class="fa fa-user"></i>
                                            <?php
                                              if(isset($_SESSION["mem_id"])){
                                                  echo $_SESSION["mem_id"];
                                                  ?>
                                                    </a></li>
                                                    <?php
                                              }

                                              else{
                                                  echo 'Please login';
                                              }

                                        }
                                        ?>

                                        <?php
                                      echo '<li><a href="logout.php"><i class="fa fa-user"></i> Logout</a></li>';

                                }else{
                                    echo '<li><a href="Login.html"><i class="fa fa-user"></i> Login</a></li>';
                                }
                              ?>

                              <?php
                                if(isset($_SESSION["mem_type"])){
                                      if($_SESSION["mem_type"]==0){
                                      }

                                }else{
                                    echo '<li><a href="sign-up.html"><i class="fa fa-user"></i> Sign-up</a></li>';
                                }
                              ?>
                              <!--<li><a href="#"><i class="fa fa-heart"></i> Wishlist</a></li>-->
                              <li><a>|</a></li>
                              <li><a href="cart.php"><i class="fa fa-shopping-cart"></i> My Cart</a></li>
                          </li>

                      </ul>
                  </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->

    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logo.png"></a></h1>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="shopping-item">
                    <a><img src="img/banner.png"></a>

                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->

    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                      <?php
                        $file = basename($path, ".php"); // $file is set to "index"
                      ?>
                        <li <?=($file == "index")? " class=\"active\"" : "" ; ?>><a href="index.php">Home</a></li>
                        <li <?=($file == "shop")? " class=\"active\"" : "" ; ?>><a href="shop.php">Shop page</a></li>
                        <li<?=($file == "single-product")? " class=\"active\"" : "" ; ?>><a href="single-product.php">Single product</a></li>
                        <li<?=($file == "cart")? " class=\"active\"" : "" ; ?>><a href="cart.php">Cart</a></li>
                        <li<?=($file == "billing")? " class=\"active\"" : "" ; ?>><a href="checkout.php">Checkout</a></li>
                    </ul>
                    <p></p>
                    <input type="text" placeholder="Search products..." >
                    <input type="submit" value="Search">
                </div>
            </div>
        </div>
    </div> <!-- End mainmenu area -->
