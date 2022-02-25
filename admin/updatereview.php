<?php
session_start();

if(isset($_GET['del'])){
    $id = $_GET['del'];
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    $sql = "Delete from review where id=$id";
    
    $query = mysqli_query($con,$sql);
    
   if($query){
		  echo "<script type='text/javascript'> alert(' Review is removed')</script>";
            echo '<script>window.location="updatereview.php"</script>';
		}else{
			echo '<script>alert("There is an error while deleting the data!")</script>';
		}
}
?>
<!DOCTYPE html>
<html>
<head>
     
    <title>ROYAL HOTEL HOTEL</title>
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
                        <a  href="settings.php"><i class="fa fa-dashboard"></i>Rooms Status</a>
                    </li>
					<li>
                        <a  href="room.php"><i class="fa fa-plus-circle"></i>Add Room</a>
                    </li>
                    <li>
                        <a  href="paymentdetails.php"><i class="fa fa-desktop"></i>Customer Payment Status</a>
                    </li>
                    <li>
                        <a  href="blockusers.php"><i class="fa fa-desktop"></i>
                        Update or Delete Staff Login</a>
                    </li>
                      <li>
                        <a class="active-menu" href="updatereview.php"><i class="fa fa-desktop"></i>Update Or Delete Review</a>
                    </li>
                      
                      <li>
                        <a   href="updateitem.php"><i class="fa fa-pencil-square-o"></i> Update Food Item</a>
                    </li>
                    <li>
                        <a  href="roomdel.php"><i class="fa fa-pencil-square-o"></i>Update or Delete Room</a>
                    </li>
					<li>
                        <a href="blockstaff.php"><i class="fa fa-plus-circle"></i>Update or Delete Staff </a>
                    </li>
                    <li>
                        <a    href="blockadmin.php"><i class="fa fa-pencil-square-o"></i> Update or Delete Admin</a>
                    </li>
                    <li>
                        <a  href="http://localhost/hotel/user/blockuser.php"><i class="fa fa-pencil-square-o"></i> Update or Delete User</a>
                    </li>
                    <li>
                        <a   href="updatedatabase.php"><i class="fa fa-pencil-square-o"></i>Back TO Update Database</a>
                    </li>
                </ul>
                    

                    
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
			 <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                           Update Review<small> </small>
                        </h1>
                    </div>
                </div> 
                 <!-- /. ROW  -->
				 
				 
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
											<th>Email</th>
                                            <th>Review</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>    
									 <?php
                    $con = mysqli_connect("localhost","root","","hotel");
    
                    $sql = "select id, name,email, review from review order by id desc";//ORDER BY id desc
                    $result = mysqli_query($con, $sql);
                    
                    $num = mysqli_num_rows($result);
                    
                    echo "Total number of reviews ", $num;
                    
                    if($num>0)
                    {
                        while($row = mysqli_fetch_assoc($result))
                        {
                                            echo "<td>";
                                            echo $row["name"];
                                        echo "</td>";
                                        echo "<td>";
                                            echo $row["email"];
                                        echo "</td>";
                                             echo "<td>";
                                            echo $row["review"];
                            echo "</td>";
                            ?>     
                    <br />
                                       <td>
                                   
                                    <a href="updatereview.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn text-danger">Delete</a>
                                    <?php
                                echo "</td>";
                            echo "</tr>";
                        }
                    }
                    else
                    {
                        echo "There is no review yet.";
                    }
                    mysqli_close($con);
                ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
                </div>
               
            </div>
        
               
    </div>
    
   
</body>
</html>
