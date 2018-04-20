<?php
  $path = "Notification.php";
  include "inc/header.php";
  include 'class/Conn.php';
?>
   <link href="css/w3.css" rel="stylesheet" type="text/css">
   <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
<div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Notification</h2>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End Page title area -->
	
    <?php
		if($_POST) {
					
			$email = $_POST['email'];
			$class = ' class="err"';
			if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				echo "<script>alert('รูปแบบของอีเมลไม่ถูกต้อง');window.location='Notification.php'</script>";
			}
			else {
				if($_POST['subscribe']=="subscribe") {
					$sql = "SELECT COUNT(*) FROM newsletter WHERE email = '$email'";
					$rs = mysqli_query($conn, $sql);
					$data = mysqli_fetch_array($rs);
					if($data[0] != 0) {
						echo "<script>alert('อีเมลนี้ เป็นสมาชิกอยู่แล้ว');window.location='Notification.php'</script>";
					}
					else {
						$sql = "INSERT INTO newsletter VALUES('$email', CURRENT_DATE())";
						mysqli_query($conn, $sql);
						echo "<script>alert('สมัครรับข่าวสารเสร็จเรียบร้อย');window.location='Notification.php'</script>";
						$class = "";
					}
				}
				else if($_POST['subscribe']=="unsubscribe") {
					$sql = "DELETE FROM newsletter WHERE email = '$email'";
					echo "<script>alert('ยกเลิกรับข่าวสารเสร็จเรียบร้อย');window.location='Notification.php'</script>";
					mysqli_query($conn, $sql);
				}
			}
			mysqli_close($conn);
		}
		?>

    <div class="single-product-area" align="center">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">

				<div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <div class="product-content-right">
                        <div class="woocommerce">
                                <div >
                                          
                                    <form method="post">
                                    <div class="w3-row-padding">
                                    <div class="w3-half">
                                    	<input class="w3-input" type="email" name="email" placeholder="อีเมลของท่าน ที่จะใช้รับจดหมายข่าว" required>
                                    </div>
                                    <div class="w3-half">
                                        <button class="w3-button w3-green">ส่ง</button>
                                    </div>
                                    </div>
                                    <div style="float:left">
                                    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="w3-radio" type="radio" name="subscribe" value="subscribe" checked>
                                      <label>สมัครรับข่าวสารทางอีเมล</label>
                                      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <input class="w3-radio" type="radio" name="subscribe" value="unsubscribe">
                                      <label>ยกเลิกรับข่าวสาร</label></p>
                                     
                                      </div>
                                      <br>
                                      <br>
                                    </form>
                                    
                                    </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
