<?php

  class CartDetail
  {

    private $_detailId;
    private $_cartId;
    private $_prod;
    private $_amount;
    private $_vat ;
    private $_final;
    private $_total;

    public function setDetailId($id)
    {
        $this->_detailId = $id;
    }

    public function setCartID($id)
    {
        $this->_cartID = $id;
    }

    public function setProd($prod)
    {
      $this->_prod = $prod;
    }
    public function setAmount($amount)
    {
      $this->_amount = $amount;
    }
    public function setVat()
    {
      $vat = $this->_prod->getprice() * $this->_amount;
      $this->_vat  =  $vat * (7/100) ;
    }
    public function setFinal()
    {
      $this->_final  = ($this->_prod->getprice()*$this->_amount) + $this->_vat;
    }

    public function setTotal()
    {
      $this->_total  = $final;
    }

    public function getDetailId($id)
    {
        return $this->_detailId;
    }

    public function getCartID($id)
    {
        return $this->_cartID;
    }

    public function getProd()
    {
      return $this->_prod;
    }
    public function getAmount()
    {
      return $this->_amount;
    }
    public function getVat()
    {
      return $this->_vat;
    }
    public function getFinal()
    {
      return $this->_final;
    }

    public function __construct()
    {

    }

    public static function getDetailByCartID($conn,$cartID)
    {

        $reVal = array();
        $sql = "SELECT * FROM cart_detail WHERE cart_id = '".$cartID."'";
        $rs = $conn->query() or die();
        while($data = $rs->fetch_object()) {

          $prod = new Product("","","","","","","");
          $prod->getProductById($conn,$data->product_id);

          $detail = new CartDetail();
          $detail->setDetailId($data->detail_id);
          $detail->setCartID($cartID);
          $detail->setProd($prod);
          $detail->setAmount($data->cart_amount);
          $detail->setVat();
          $detail->setFinal();


          array_push($reVal, $detail);

        }

        return $reVal;
    }

  }
?>
