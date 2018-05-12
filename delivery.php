<?php
  session_start();
  include "class/Conn.php";
  include "class/Member.php";


  $id = $_SESSION["mem_id"];
  $address = $_REQUEST['caddress'];

if($address!=""){
    $mem = new Member($id,"","","","","","");
    $mem->getMemById($conn);
    $mem->setaddress($address);

    $mem->updateMemById($conn);

}

?>
