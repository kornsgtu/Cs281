<?php
class Product{
  private $_pid;
  private $_pname;
  private $_info;
  private $_price;
  private $_pimg;
  private $_stock;
  private $_discount;

  public function setid($pid)
  {
    $this->_pid = $pid;
  }
  public function setname($pname)
  {
    $this->_pname = $pname;
  }
  public function setinfo($info)
  {
    $this->_info = $info;
  }
  public function setprice($price)
  {
    $this->_price = $price;
  }
  public function setimg($pimg)
  {
    $this->_pimg = $pimg;
  }
  public function setstock($stock)
  {
    $this->_stock = $stock;
  }
  public function setdiscount($discount)
  {
    $this->_discount = $discount;
  }

  public function getid()
  {
    return $this->_pid;
  }
  public function getname()
  {
    return $this->_pname;
  }
  public function getinfo()
  {
    return $this->_info;
  }
  public function getprice()
  {
    return $this->_price;
  }
  public function getimg()
  {
    return $this->_pimg;
  }
  public function getstock()
  {
    if($this->_stock>0)
    {
      return $this->_stock;
    }else
    {
      echo "<script>alert('สินค้าบางชิ้นจำหน่ายหมดแล้วจ้า');</script>";

    }

  }
  public function getdiscount()
  {
    return $this->_discount;
  }



  public function __construct($id,$name,$price,$info,$img,$stock,$discount)
  {

      $this->_pid = $id;
      $this->_pname = $name;
      $this->_info = $info;
      $this->_price = $price;
      $this->_pimg =  $img;
      $this->_stock = $stock;
      $this->_discount = $discount;

  }

  public function addProduct($conn)
  {
    $sql = "INSERT INTO product
              (pid, pname, pdetail, pprice, pimg, stock, discount)
              VALUES
              ('".$this->_pid."','".$this->_pname."','".$this->_info."','".$this->_price."','".$this->_pimg."','".$this->_stock."','".$this->_discount."')";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('บักทึกแล้วจ้าาา');window.location='addproductPage.php'</script>";
  }

  public function getListProd($conn)
  {

      $sql = "SELECT * FROM product  ";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

      $tempArr = array();

      while ($data = $rs->fetch_array()) {

          $prod = new Product($data['pid'],$data['pname'],$data['pprice'],$data['pdetail'],$data['pimg'],$data['stock'],$data['discount']);
          array_push($tempArr,$prod);
      }

      return $tempArr;
  }

  public function updateProduct($conn) {
    $sql = "UPDATE product
              SET
              pprice = '".$this->_price."', stock = '".$this->_stock."' WHERE pid = '".$this->_pid."'";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Update complete.');window.location='manageProduct.php'</script>";

  }

  public function updatePromotion($conn) {
    $sql = "UPDATE product
              SET
              discount = '".$this->_discount."' WHERE pid = '".$this->_pid."'";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Update complete.');window.location='managePromotion.php'</script>";

  }

  public function getProductById($conn,$pid)
  {
    $sql = "SELECT * FROM product WHERE pid = '".$pid."'";
    $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

    $data = $rs->fetch_array();

    $this->_pid = $data['pid'];
    $this->_pname = $data['pname'];
    $this->_info = $data['pdetail'];
    $this->_price = $data['pprice'];
    $this->_pimg =  $data['pimg'];
    $this->_stock = $data['stock'];
    $this->_discount = $data['discount'];
  }

  public function getProductByName($conn,$keyWord)
  {

      $sql = "SELECT * FROM product WHERE pname LIKE '%".$keyWord."%' ";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

      $tempArr = array();

      while ($data = $rs->fetch_array()) {

          $prod = new Product($data['pid'],$data['pname'],$data['pprice'],$data['pdetail'],$data['pimg'],$data['stock'],$data['discount']);
          array_push($tempArr,$prod);
      }

      return $tempArr;
  }

  public function deleteProduct($conn) {
    $sql = "DELETE FROM product WHERE pid = '".$this->_pid."'";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('Delete complete.');window.location='manageProduct.php'</script>";

  }


}


?>
