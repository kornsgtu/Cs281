<?php

  class Payment{
    private $_paymentId;
    private $_cartId;
    private $_cartList;
    private $_status;
    private $_newstatus = "finish";
    private $_totalPrice;

    public function setpaymentId($paymentId)
    {
      $this->_paymentId = $paymentId;
    }
    public function setcartId($cartId)
    {
      $this->_cartId =$cartId;
    }
    public function setcartList($cartList)
    {
      $this->_cartList =$cartList;
    }
    public function setstatus($status)
    {
      $this->_status = $status;
    }
    public function settotalPrice($totalPrice)
    {
      $this->_totalPrice =$totalPrice;
    }
    public function getpaymentId()
    {
      return $this->_paymentId;
    }
    public function getcartId()
    {
      return $this->_cartId;
    }
    public function getcartList()
    {
      return $this->_cartList;
    }
    public function getstatus()
    {
      return $this->_status;
    }
    public function gettotalPrice()
    {
      return $this->_totalPrice;
    }
    public function paymentConfirm($conn)
    {
      // add payment data
      $sql = "INSERT INTO payment(payment_id, cart_id, status, total) VALUES ('.$this->_paymentId.','.$this->_cartId.','.$this->_status.','$this->_totalPrice')";
      $conn->query($sql) or die();
      $this->_paymentId = $conn->insert_id;
    }
    public static function getPaymentByCart($conn,$cartId)
    {

        $reArr = array();

        $sql = "SELECT
                  *
                FROM cart
                WHERE cart_id='".$cartId."'";
        $rs = $conn->query($sql) or die($sql."<br>".$conn->error);
        while($data=$rs->fetch_object()) {
            $payment = new Payment();
            $payment->setpaymentId($data->payment_id);
            $payment->setcartId(cart::getCartID());
            $payment->setcartList(cart::getCartListByMember($conn,$data->cart_id));


            array_push($reArr,$payment);
        }

        return $reArr;
    }
    public function updateStatus($conn)
    {
      $sql = "UPDATE payment SET
                payment_id = '".$this->_paymentId."'
                ,cart_id = '".$this->_cartId."'
                ,status = '".$this->_newstatus."'
                ,total = '".$this->_totalPrice."'
              WHERE payment_id = '".$this->_paymentId."'";
      $conn->query($sql) or die($conn->error);
    }
    
}
?>
