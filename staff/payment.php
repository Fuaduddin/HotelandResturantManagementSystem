<?php
session_start();

if(isset($_GET['del'])){
$id = $_GET['del'];
    
 $con = mysqli_connect("localhost","root","","hotel");
    
$sql = "Delete from payment where id=$id";
    
$query = mysqli_query($con,$sql);
if($query){
echo "<script type='text/javascript'> alert('Your Customer have paid it's balance)</script>";
echo '<script>window.location="payment.php"</script>';
}
else
{
echo mysqli_error($con);
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
<a  href="receptionroomdetails.php"><i class="fa fa-dashboard"></i>Room Details</a>
</li>
<li>
<a  class="active-menu" href="payment.php"><i class="fa fa-desktop"></i>Payment Details Of Rooms</a>
</li>
<li>
<a href="receptionpaymentdetails.php"><i class="fa fa-desktop"></i>Payment System</a>
</li>
<li>
<a   href="logout.php"><i class="fa fa-pencil-square-o"></i> Loge Out </a>
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
Payment Details<small> Slips</small>
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
<th>Room type</th>
<th>Bed Type</th>
<th>Check in</th>
<th>Check out</th>
<th>No of Room</th>
<th>Meal Type</th>
<th>Room Rent</th>
<th>Bed Rent</th>
<th>Meals </th>
<th>Gr.Total</th>
<th>Print</th>
<th>Payment</th>
                                            
</tr>
</thead>
<tbody>    
<?php 
include ('db.php');
$sql="select * from payment";
$re = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($re))
{
										
$id = $row['id'];
											
if($id % 2 ==1 )
{
echo"<tr class='gradeC'>
<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
<td>".$row['troom']."</td>
<td>".$row['tbed']."</td>
<td>".$row['cin']."</td>
<td>".$row['cout']."</td>
<td>".$row['nroom']."</td>
<td>".$row['meal']."</td>	
<td>".$row['ttot']."</td>
<td>".$row['mepr']."</td>
<td>".$row['btot']."</td>
<td>".$row['fintot']."</td>
<td>
<a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
<td>";
 ?>
 <a href="payment.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn btn-primary">Paid</a>
<?php
echo "</td>";
echo "</tr>";   
                                                    
}
else
{
echo"<tr class='gradeU'>
<td>".$row['title']." ".$row['fname']." ".$row['lname']."</td>
<td>".$row['troom']."</td>
<td>".$row['tbed']."</td>
<td>".$row['cin']."</td>
<td>".$row['cout']."</td>
<td>".$row['nroom']."</td>
<td>".$row['meal']."</td>
<td>".$row['ttot']."</td>
<td>".$row['mepr']."</td>
<td>".$row['btot']."</td>
<td>".$row['fintot']."</td>
<td>
<a href=print.php?pid=".$id ." <button class='btn btn-primary'> <i class='fa fa-print' ></i> Print</button></td>
<td>";
?>
 <a href="payment.php?del=<?php echo $row["id"];?>" style="text-align: right; font-family: cursive" class="btn btn-primary">Paid</a>
 <?php
echo "</td>";
echo "</tr>";   
											
}
										
}
										
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
