<?php 
  include('db.php');
?>

<!DOCTYPE html>
<html>
<head>
  <title>User Page</title>
  <link rel="stylesheet" type="text/css" href="style_admin.css">
  <link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body>

  <div class="header">
      <h1> Royal Hotel User Panel</h1>
  </div>

  <div class="pagetitle">
  </div>

  <div class="background">
      <div class="row">
        <div class="column">
          <ul>
              
              <li><a href="http://localhost/hotel/user/reservation.php">Room Booking</a></li>
              <li><a href="http://localhost/hotel/admin/food_menu.php"> Food Menu</a></li>
          </ul>
        </div>
        <div class="column">
          <ul>
             
              <li><a href="http://localhost/hotel/admin/cart_irl.php"> Room Services</a></li>
              <li><a href="http://localhost/hotel/user/review.php"> Review</a></li>
              
            <hr class="mb-1">
          </ul>
        </div>
      
  </div>
  <div class="logout_button" style="padding-left: 155px;">
        <a href="profile.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #747571; ">Back to  Profile</a>
        <a href="logout.php" class="btn btn-secondary " role="button" style="width: 242px; height: 50px; padding-top: 10px; margin-top:2px; margin-left:2px; margin-right:2px; margin-bottom: :2px; background-color: #AD0000; ">Log Out</a>
      </div>
</div>

</body>
</html>