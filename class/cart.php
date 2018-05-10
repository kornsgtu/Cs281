<?php

  class cart
  {

    private $_cartId;
    private $_itemList;
    private $_memId;
    private $_date;


    public function setCartID($id)
    {
      $this->_cartId = $id;
    }
    public function setItemList($list)
    {
      $this->_itemList = $list;
    }
    public function setMemID($memID)
    {
      $this->_memId  =  $memID ;
    }
    public function setDate($date)
    {
      $this->_date  = $date;
    }

    public function getCartID()
    {
      return $this->_cartId;
    }
    public function getItemList()
    {
      return $this->_itemList;
    }
    public function getMemID()
    {
      return $this->_memId;
    }
    public function getDate()
    {
      return $this->_date;
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
            $cartList[$i]->setvat($vat);
            $cartList[$i]->setfinal($vat,$amount);
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

        $cItem = new CartDetail();
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

    public function cartConfirm($conn)
    {

      // add cart data
      $sql = "INSERT INTO cart
                (mem_id, cart_date)
                VALUES
                ('" . $this->_memId . "',NOW())";
      $conn->query($sql) or die();
      $this->_cartId = $conn->insert_id;

      for($i=0;$i< count($this->_itemList);$i++) {

          $sql = "INSERT INTO cart_detail
                    (cart_id, product_id
                        , cart_amount,cart_vat)
                    VALUES
                    ('".$this->_cartId."', '".$this->_itemList[$i]->getProd()->getid()."'
                        , '".$this->_itemList[$i]->getAmount()."', '".$this->_itemList[$i]->getVat()."') ";

          $conn->query($sql) or die();

          echo $sql ="UPDATE product SET
                  stock = stock-".$this->_itemList[$i]->getAmount()."
                  WHERE pid = '".$this->_itemList[$i]->getProd()->getid()."'";
          $conn->query($sql) or die();

        }


    }

    public static function getCartListByMember($conn,$memID){

        $reArr = array();

        $sql = "SELECT
                  *
                FROM cart
                WHERE mem_id='".$memID."'";
        $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
        while($data=$rs->fetch_object()) {
            $cart = new cart();
            $cart->setCartID($data->cart_id);
            $cart->setItemList(CartDetail::getDetailByCartID($conn,$data->cart_id));
            $cart->setMemID($data->mem_id);
            $cart->setDate($data->cart_date);
            array_push($reArr,$cart);
        }

        return $reArr;
    }

  }
?>
