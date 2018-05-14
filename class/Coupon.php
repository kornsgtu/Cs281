<?php
class Coupon{
  private $_cpid;
  private $_code;
  private $_cdis;

  public function setcpid($cpid)
  {
    $this->_cpid = $cpid;
  }
  public function setcode($code)
  {
    $this->_code = $code;
  }
  public function setcdis($cdis)
  {
    $this->_cdis = $cdis;
  }
  public function getcpid()
  {
    return $this->_cpid;
  }
  public function getcode()
  {
    return $this->_code;
  }
  public function getcdis()
  {
    return $this->_cdis;
  }

  public function __construct($cpid,$code,$cdis)
  {
    $this->_cpid = $cpid;
    $this->_code = $code;
    $this->_cdis = $cdis;

  }

  public function getListCoup($conn)
  {

      $sql = "SELECT * FROM coupon  ";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

      $tempArr = array();

      while ($data = $rs->fetch_array()) {

          $coup = new Coupon($data['cpid'],$data['code'],$data['cdis']);
          array_push($tempArr,$coup);
      }

      return $tempArr;
  }

  public function addCoupon($conn)
  {
    $sql = "INSERT INTO coupon
              (cpid, code, cdis)
              VALUES
              ('".$this->_cpid."','".$this->_code."','".$this->_cdis."')";
    $conn->query($sql) or die($sql."<br>".$conn->error);
    echo "<script>alert('New Coupon added.');window.location='promotionCoupon.php'</script>";
  }

  function randomCouponCode() {

    $chars = "abcdefghijkmnopqrstuvwxyz023456789";
    srand((double)microtime()*1000000);
    $i = 0;
    $pass = '' ;

    while ($i <= 7) {
        $num = rand() % 33;
        $tmp = substr($chars, $num, 1);
        $pass = $pass . $tmp;
        $i++;
    }
    return $pass;

  }


  }
?>
