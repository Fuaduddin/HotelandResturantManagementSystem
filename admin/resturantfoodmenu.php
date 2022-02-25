
<?php
    include("connect.php");
?>

<!DOCTYPE html>
<html>

<head>
    
    <title>Royal Hotel</title>
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
                        <a href="http://localhost/hotel/staff/check_online_order.php"><i class="fa fa-dashboard"></i>Room Service Order</a>
                    </li>
                    <li>
                        <a  href=" http://localhost/hotel/staff/rpaymentdetails.php"><i class="fa fa-qrcode"></i>Payment Details</a>
                    </li>
                    <li>
                        <a class="active-menu" href="resturantfoodmenu.php"><i class="fa fa-dashboard"></i>Food Menu</a>
                    </li>
                    <li>
                        <a href=" http://localhost/hotel/staff/login.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                            Our Menu
                        </h1>
                    </div>
                </div>
                <div class="fooditems" id="fooditems">
   <div class="background ">
  		<div class="fooditems">
			<?php
	            $query = "SELECT * FROM item WHERE itype='food' ORDER BY pname ASC";
	            $result = mysqli_query($conn,$query);
	            if(mysqli_num_rows($result) > 0) {

	                while ($row = mysqli_fetch_array($result)) {

	                    ?>
	                    <div style="float: left; width: 25%; background-color:white;">

                            <div class="item">
                            	<div class="foodpic">
	                                <img src="<?php echo 'imgs/' . $row['image'] ?>" width="150" height="200" alt='Profile pic' class="img-responsive"><br /><br />
	                            </div>
	                            <div class="description">
	                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
	                            </div>
	                            <div class="pricetag">
	                                <h5 class="text-danger">Tk.<?php echo $row["price"]; ?></h5>
	                            </div>                            
                            </div>
	                        
	                    </div>
	                    
	                    <?php
	                }
	                
	            }
	        ?>
        </div>

        <div class="beverage">
			<?php
	            $query = "SELECT * FROM item WHERE itype='beverage' ORDER BY pname ASC ";
	            $result = mysqli_query($conn,$query);
	            if(mysqli_num_rows($result) > 0) {

	                while ($row = mysqli_fetch_array($result)) {

	                    ?>
	                    <div style="float: left; width: 25%; background-color: WHITE;">

	                            <div class="item">
	                            	<div class="foodpic">
                                        <img src="<?php echo 'imgs/' . $row['image'] ?>" class="border border-dark img-thumbnail">
		                            </div>
		                            <div class="description">
		                                <h5 class="text-info"><?php echo $row["pname"]; ?></h5>
		                            </div>
		                            <div class="pricetag">
		                                <h5 class="text-danger">Tk.<?php echo $row["price"]; ?></h5>
		                            </div>                            
	                            </div>
	                        
	                    </div>
	                    
	                    <?php
	                }
	                
	            }
	        ?>
        </div>
	</div>


</body>

</html>





