<?php
    session_start();
    //echo $_SESSION['userid'];
    $id = $_SESSION['userid'];
   
    $con = mysqli_connect("localhost","root","","hotel");
            
    $sql = "select * from user where id = $id";
                
    $query = mysqli_query($con,$sql);
            
    $row = mysqli_fetch_assoc($query);
                    
?>
<!DOCTYPE html>
<html>
<head>
      
    <title>ROYAL HOTEL HOTEL</title>
	<!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     
</head>
<body>
    <div id="wrapper">
        
        <nav class="navbar navbar-default top-navbar" role="navigation">
        <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
     User Panel
    </button>
    <div class="dropdown-menu">
      <a class="dropdown-item" href="userpanel.php">User Panel</a>
      <a class="dropdown-item" href="ucontact.php">Contact</a>
      <a class="dropdown-item" href="logout.php">Log Out</a>
    </div> 
            </div>
            
        </nav>
    </div>
         <!-- /. NAV SIDE  -->
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                    <?php
                    echo "<p style=' font-size: 20px; padding-top: 10px'>"."Hi "."<i>".$row["name"]."</i>"."</p>";
                ?>
                        </h1>
                    </div>
                </div> 
            <div class="container" style="text-align: center">
        
            <img src="<?php echo 'imgs/' . $row['image'] ?>" width="200" height="220" alt='Profile pic' class="border border-dark img-thumbnail"><br /><br />
            <?php
                echo "<i style='font-size: 20px'>"."<b>".$row["name"]."</i>"."</b>"."<br /><br />";
                
                echo $row["email"]."<br />";
                echo $row["contact"]."<br />";
                echo $row["address"];
                echo "<br />";
                echo "<br />";
                          
            ?>
            <hr>
        
        </div>
        </div>
           
      
   
</body>
</html>