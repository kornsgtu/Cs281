<?php

  class cart
  {

    private $_cname;
    private $_cprice;
    private $_cimg;
    private $_cstock;

    public function setname($cname)
    {
      $this->_cname = $cname;
    }
    public function setprice($cprice)
    {
      $this->_cprice = $cprice;
    }
    public function setimg($cimg)
    {
      $this->_cimg = $cimg;
    }
    public function setstock($cstock)
    {
      $this->_ctock = $cstock;
    }
    public function getname()
    {
      return $this->_cname;
    }
    public function getprice()
    {
      return $this->_cprice;
    }
    public function getimg()
    {
      return $this->_cimg;
    }
    public function getstock()
    {
      return $this->_cstock;
    }

    public function __construct($cname,$cprice,$cimg,$cstock)
    {

        $this->_cname = $cname;
        $this->_cprice = $cprice;
        $this->_cimg =  $cimg;
        $this->_cstock = $cstock;

    }
    public function addcart($conn,$name)
    {

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

    }

  }
?>
