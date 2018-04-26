<?php

  class cart
  {

    private $_prod;
    private $_amount;

    public function setProd($prod)
    {
      $this->_prod = $prod;
    }
    public function setAmount($amount)
    {
      $this->_amount = $amount;
    }

    public function getProd()
    {
      return $this->_prod;
    }
    public function getAmount()
    {
      return $this->_amount;
    }

    public function __construct()
    {

    }

    public static function updateProduct(&$cartList,$pro_id,$amount) {

      for($i=0;$i< count($cartList);$i++) {

          if($cartList[$i]->getProd()->getid() == $pro_id) {
            //unset($cartList[$i]);
            //array_splice($cartList, $i, 1);

            $cartList[$i]->setAmount($amount);
            break;
          }

      }

    }

    public static function delProduct(&$cartList,$pro_id) {

      for($i=0;$i< count($cartList);$i++) {

          if($cartList[$i]->getProd()->getid() == $pro_id) {
            //unset($cartList[$i]);
            array_splice($cartList, $i, 1);
            break;
          }

      }

    }

    public static function  addProduct(&$cartList,$pro_id,$pro_amount,$conn) {

        $id = $pro_id;
        $name = "";
        $price = "";
        $info = "";
        $img = "";
        $stock = "";

        $pro = new Product($id,$name,$price,$info,$img,$stock);
        $pro->getProductById($conn,$pro_id);

        $cItem = new cart();
        $cItem->setProd($pro);
        $cItem->setAmount($pro_amount);

        $addDup = false;


        for($i=0;$i< count($cartList);$i++) {

            if($cartList[$i]->getProd()->getid() == $pro->getid()) {
              $addDup = true;
              break;
            }

        }

        if($addDup ) {

            $cartList[$i]->setAmount($cartList[$i]->getAmount()+1);

        } else {

            array_push($cartList,$cItem);

        }


    }

    public function addcart($conn,$name)
    {
/*
      $sql2 ="INSERT INTO cart (cname,cimg, cprice)VALUES
      ('".$this->_cname."','".$this->_cimg."','".$this->cprice."')
      SELECT cname,cimg, cprice FROM product WHERE cname == '$name';"


      $conn->query($sql2) or die($sql."<br>".$conn->error);
      echo "<script>alert('เอาใส่ตะกร้าแล้วจ้าาา');window.location='cart-page.php'</script>";

      $sql = "SELECT * FROM product WHERE pname = '".$this->name."'";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);     //save information from table to object
      $data = $rs->fetch_array();  //mysqli_fecth_array($object);
      if(!$data){
                 echo "<script>alert('error na ja.');window.history.back()</script>";
       }else{
          session_start();
	        $_SESSION["pname"] = $data['pname'];
	        session_write_close();
	        if($_SESSION["pname"] = $data['pname']){
		            echo "<script>alert('add successful.');window.location='index.php'</script>";
	        }else{
		            echo "<script>alert(' error.');window.location='index.php'</script>";
	        }
*/
    }

  }
?>
