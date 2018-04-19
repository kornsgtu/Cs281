<?php

  class cart
  {
    private $_id;

    private $_product;

    public function setid($id)
    {
      $this->_id = $id;
    }
    public function setproduct($product)
    {
      $this->_product = $product;
    }
    public function getid()
    {
      return $this->_pid;
    }

    public function getproduct()
    {
      return $this->_product;
    }

    public function __construct($id,$product)
    {

        $this->_pid = $id;
        $this->_product = $product;


    }

  }
?>
