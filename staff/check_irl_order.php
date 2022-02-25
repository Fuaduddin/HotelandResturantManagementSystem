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
                        <a  href="http://localhost/hotel/admin/wcart_irl.php"><i class="fa fa-dashboard"></i>Take Order</a>
                    </li>
                  
					<li>
                        <a class="active-menu" href="check_irl_order.php"><i class="fa fa-bar-chart-o"></i>Check Order</a>
                    </li>  
                    <li>
                        <a  href="cacle_irl_order.php"><i class="fa fa-bar-chart-o"></i>Cancle Order</a>
                    </li> 
                    <li>
                        <a href="http://localhost/hotel/admin/waiterfoodmenu.php"><i class="fa fa-bar-chart-o"></i>Food Menu</a>
                    </li> 
              
                    <li>
                        <a href="login.php"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
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
                            Check Order 
                        </h1>
                    </div>
                </div>
                
	
		<?php 
			$query = "SELECT * FROM irl_order WHERE  served = 0 ORDER BY order_no";
            $result = mysqli_query($conn,$query);
            while ($row = mysqli_fetch_assoc($result)) {
            	$order_no = $row["order_no"]; echo "<br>";
					?>
				<hr class="mb-1">
				<form method="post" action="check_irl_order.php">
					Order No: 
					<input class="form-control" id="order_num" type="text" name="order_num" value="<?php echo $order_no; ?>" style="width: 50px;" readonly>
	            	<h5><b>Customer name: <?php echo $row["name"]; echo "<br>"; ?></b></h5>
	            	<b>Table No: <?php echo $row["tableno"]; echo "<br>"; ?></b>
	            	<b>Date and Time: <?php echo date("d-m-Y h:i:sa"); echo "<br>"; ?></b>
	            	<br>
						
					<?php
					echo "<table border='1'>";

					$query2 = "SELECT item_name, quantity, unit_price, total_price FROM irl_order_item WHERE order_no = '$order_no'";
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
					<input class="btn btn-success" type="submit" id="done" name="done" value="Order Complete">
					<hr class="mb-1">
				</form>
				<?php
			}
				

		 ?>
	</div>

<?php
	
	if(isset($_POST["done"])){
		$order_num = $_POST["order_num"];
		$querry0 =  "UPDATE irl_order SET served = 1 WHERE  order_no = $order_num";

		if(mysqli_query($conn, $querry0)){
			echo '<script>window.location="check_irl_order.php"</script>';
		}
	}

?>

            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
   


</body>

</html>