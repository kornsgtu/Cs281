<?php
    $path = "delivery-page.php";
    include "inc/header.php";

?>
<div class="product-big-title-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-bit-title text-center">
                    <h2>Delivery</h2>
                </div>
            </div>
        </div>
    </div>
</div> <!-- End Page title area -->

<?php
include "class/Conn.php";
include "class/Member.php";



$mem = new Member($_SESSION['mem_id'],"","","","","","");
$mem->getMemById($conn);

?>
<div class="single-product-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="product-content-right">
                    <div class="woocommerce">
                        <form enctype="multipart/form-data" action="delivery.php" class="checkout" method="post" name="checkout">

                            <div id="customer_details" class="col12-set">
                                <div class="col-12">
                                    <div class="woocommerce-billing-fields">
                                        <h3>Address to Transpot</h3>
                                        <p id="billing_company_field" class="form-row form-row-wide">
                                            <label class="" for="billing_company">First name</label>
                                            <br><?=$mem->getname()?></br>
                                        </p>

                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">Last name
                                            </label>
                                            <br><?=$mem->getlname()?></br>
                                        </p>

                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">E-mail
                                            </label>
                                            <br><?=$mem->getemail()?></br>
                                        </p>
                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">address
                                            </label>
                                            <br><?=$mem->getaddress()?></br>
                                        </p>
                                        <p id="billing_first_name_field" class="form-row form-row-first validate-required">
                                            <label class="" for="billing_first_name">shipping address
                                            </label>
                                            <textarea name="caddress" rows="4" cols="50"></textarea>
                                        </p>
                                        <div class="clear"></div>
                                        <div class="clear"></div>
                                    </div>
                                    <div class="form-row place-order">

                                        <input type="submit" data-value="Place order" value="update" id="place_order" name="woocommerce_checkout_place_order" class="button alt">
                                        <input type="button" value="Comfirm" id="btnPayment" name="payments" class="button">

                                    </div>

                                </div>
                              </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <?php
          include "inc/end.php"

    ?>
    <script>

      $('#btnPayment').click(function() {
          window.location='epayment.php';
      });

    </script>
