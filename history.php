<?php

    $path = "history.php";

    include "class/Conn.php";
    include "class/Product.php";
    include "class/cart.php";
    include "class/cartDetail.php";
    include "class/Payment.php";

    include "inc/header.php";
    $arraysongaun = array();
    $cartArr = array();

    $sql = "SELECT * FROM cart inner Join payment WHERE payment.cart_id = cart.cart_id AND mem_id = '".$_SESSION['mem_id']."'";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
    while($data=$rs->fetch_object()) {
      $payment = new Payment();
      $payment->setpaymentId($data->payment_id);
      $payment->setcartId($data->cart_id);
      $payment->settotalPrice($data->total);
      $payment->setstatus($data->status);
      $cart = new cart();
      $cart->setDate($data->cart_date);
      $cart->setMemID($data->mem_id);

      array_push($arraysongaun,$payment);
      array_push($cartArr,$cart);
    }


?>

<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>History</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->


<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

            <div class="col-md-8">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form method="post" action="history-update.php">
                            <table cellspacing="0" width="800" align="center">
                                <thead>
                                    <tr>
                                        <th>Order No.</th>
                                        <th>Member</th>
                                        <th>Price</th>
                                        <th>Time</th>
                                        <th>Status</th>
                                        <th>detail</th>
                                    </tr>
                                </thead>
                                <tbody>
<?php

                    for($i=0;$i< count($arraysongaun);$i++) {

                        //$detailList = $cartArr[$i]->getCartListByMember($conn,$cartArr[$i]->getMemID());
                        $pay = $arraysongaun[$i];
                        $cart = $cartArr[$i];

?>
                                    <tr>
                                        <td>
                                          <span><?php echo $pay->getpaymentId()?></span>
                                        </td>

                                        <td>
                                            <span ><?php echo $cart->getMemID()?></span>
                                        </td>

                                        <td>
                                            <span ><?php echo $pay->gettotalPrice()?></span>
                                        </td>

                                        <td>
                                          <span ><?php echo $cart->getDate()?></span>
                                        </td>

                                        <td>
                                          <span ><?php echo $pay->getstatus()?></span>
                                        </td>
                                        <td>
                                          <span ><a href="payment-detail.php?cartId=<?=$pay->getcartId()?>">detail</a></span>
                                        </td>
                                    </tr>
<?php
                          }  // for($i=0;$i< count($arraysongaun);$i++) {
?>
                                </tbody>
                            </table>
                        </form>
                        <div class="cart-collaterals">

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
