<?php 
	include("connect.php");
?>
<!DOCTYPE html>
<html>

<head>
    
    <title>Administrator</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
           
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="resturantroomservice.php"><i class="fa fa-dashboard"></i>Room Service Order</a>
                    </li>
                    <li>
                        <a  href="rpaymentdetails.php"><i class="fa fa-qrcode"></i>Payment Details</a>
                    </li>
                    <li>
                        <a href="http://localhost/hotel/admin/resturantfoodmenu.php"><i class="fa fa-dashboard"></i>Food Menu</a>
                    </li>
                    <li>
                        <a href="http://localhost/hotel/staff/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                   </ul>
            </div>
 </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Check Room Service  Order 
                        </h1>
                    </div>
                </div>
                
	
	<?php 
			
			$query = "SELECT * FROM online_order WHERE delivered = 0  ORDER BY order_no";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$order_no = $row["order_no"]; echo "<br>";
					?>
				<hr class="mb-1">
				<form method="post" action="check_online_order.php">
					<h6><b>Order No:</b></h6> 
					<input class="form-control" id="order_num" type="text" name="order_num" value="<?php echo $order_no; ?>" style="width: 50px;" readonly>
	            	<h5><b>Customer name: <?php echo $row["name"]; echo "<br>"; ?></b></h5>
	            	<b>Room Type: <?php echo $row["type"]; echo "<br>"; ?></b>
                    <b>Bedding Type : <?php echo $row["bed"]; echo "<br>"; ?></b>
	            	
	            	<b>Submission time: <?php echo $row["subtime"]; echo "<br>"; ?> </b>
	            	<br>
						
					<?php
					echo "<table border='1'>";

					$query2 = "SELECT item_name, quantity, unit_price, total_price FROM online_order_item WHERE order_no = '$order_no'";
	            	$result2 = mysqli_query($conn,$query2);
	            	echo "<td>Item Name</td> <td>Quantity</td> <td>Unit Price</td> <td>Total Price</td>";
					while ($row2 = mysqli_fetch_assoc($result2)) {
						echo "<tr>";
						foreach ($row2 as $field2 => $value2) {
							echo "<td>" . $value2 . "</td>";
						}
					}
					echo "</table>"; ?>
					<br>
					<b>Total Bill: <?php echo $row["bill"]; echo "<br>"; ?></b>
					<br>
					<input class="btn btn-success" type="submit" id="done" name="done" value="Served">
					<hr class="mb-1">
				</form>
				<?php
			}
				

		 ?>
	</div>

<?php
	
	if(isset($_POST["done"])){
		$order_num = $_POST["order_num"];
		$time = date("d-m-Y h:i:sa");
		
		$querry0 =  "UPDATE online_order SET delivered = 1 WHERE  order_no = $order_num";

		if(mysqli_query($conn, $querry0)){
			 echo "<script type='text/javascript'> alert('Delivery completed')</script>";
			echo '<script>window.location="check_online_order.php"</script>';
		}
	}

?>


            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>


</body>

</html>