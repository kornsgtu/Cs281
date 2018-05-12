<?php
class Coupon{
  private $_cpid;
  private $_code;

  public function setcpid($cpid)
  {
    $this->_pid = $pid;
  }
  public function setcode($code)
  {
    $this->_pid = $pid;
  }
  public function getcpid()
  {
    return $this->_cpid;
  }
  public function getcode()
  {
    return $this->_code;
  }

  public function __construct($cpid,$code)
  {
    $this->_cpid = $cpid;
    $this->_code = $code;

  }

  public function getListCoup($conn)
  {

      $sql = "SELECT * FROM coupon  ";
      $rs = $conn->query($sql) or die($sql."<br>".$conn->error);

      $tempArr = array();

      while ($data = $rs->fetch_array()) {

          $coup = new Coupon($data['cpid'],$data['code']);
          array_push($tempArr,$coup);
      }

      return $tempArr;
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
