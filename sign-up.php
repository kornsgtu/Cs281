<?php

  include "class/Conn.php";
  include "class/Member.php";

  if(!filter_var($_REQUEST['cmail'], FILTER_VALIDATE_EMAIL)) {
    echo "<script>alert('รูปแบบของอีเมลไม่ถูกต้อง');window.location='sign-up-page.php'</script>";
  }
  else{
      $id = $_REQUEST['cusername'];
      $pwd = $_REQUEST['cpassword'];
      $name =$_REQUEST['cfirstname'];
      $lname =$_REQUEST['clastname'];
    $email =$_POST['cmail'];
    $address = $_REQUEST['caddress'];
    $type = 1;

    $mem = new Member($id,$pwd,$name,$lname,$type,$address,$email);
    $mem->register($conn);
  }

?>
