<?php
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    $sql = "insert into contact(`name`,`email`,`subject`,`message`) values('$name','$email','$subject','$message')";
    
    $query = mysqli_query($con,$sql);
}
?>
<header>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="css.css">
</header>    <!-- **************** Navigation Section ******************** -->
<nav>
<a href="http://localhost/hotel/index.php" class="logo"><span>Royal Hotel</span><br><span>and Resturant</span></a>
<ul class="navigation">
<li class="nav-item active"><a href="http://localhost/hotel/index.php" class="nav-link">Home</a></li>
<li class="nav-item"><a href="http://localhost/hotel/user/rooms.html" class="nav-link">Rooms & Packages</a></li>
<li class="nav-item"><a href="resturant.html" class="nav-link">Restaurant</a></li>
<li class="nav-item"><a href="http://localhost/hotel/user/service.html" class="nav-link">Services</a></li>
<li class="nav-item"><a href="http://localhost/hotel/user/ruleandregulation.html" class="nav-link">Rules & Regulation</a></li>
<li class="nav-item"><a href="http://localhost/hotel/user/login.php" class="nav-link">Member</a></li>
<li class="nav-item"><a href="wcontact.php" class="nav-link">Contact Us</a></li>
<li class="nav-item"><a href="http://localhost/hotel/staff/login.php" class="nav-link">Staffs</a></li>
<li class="nav-item"><a href="http://localhost/hotel/admin/adlogin.php" class="nav-link">Admin</a></li>
</ul>
</nav>
    <!-- **************** Header Section ******************** -->
<header>
        
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="images/bg_1.jpg" alt="First slide" height="60%" width="100%">
                    <div class="carousel-caption">
                        <h1>Contact Us</h1>
                    </div>
                </div>
            </div>

    </header>

      <!-- ****************  Explore Section ******************** -->
    

      <!-- ****************  Projects Section ******************** -->
<div class="contact">     
  <div class="container">
    <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Contact Information</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p><span>Address:</span> Aftabnagar,Dhaka,Bangladesh</p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	           <span>Phone:</span>  <p style="text-align: left;  color: black;"><a href="tel://1234567920">+880 11 22 3344</a></p>
                
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p class="color=black"><span>Email:</span> <p style="text-align: left;  color: black;"><a href="mailto:info@yoursite.com">royalhotel@gmail.com</a></p>
	          </div>
          </div>
          <div class="col-md-3 d-flex">
          	<div class="info bg-white p-4">
	            <p style="text-align: left;  color: black;"><span>Website</span><p style="text-align: left;  color: black;"> <a href="#">www.royalhotel.com</a></p>
	          </div>
          </div>
        </div>
    </div>
 <h2 style= " text-align:center;  color: black">We are alwas ready to serve you</h2>
 
  <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
            <form method="POST" action="wcontact.php" class="bg-white p-3 contact-form">
              
                <input name="name" type="text"class="form-message" placeholder="Your Name">
                <input name="email" type="email" class="form-message" placeholder="Your Email">
                <input name="subject" class="form-control" placeholder="Subject">
                <textarea name="message" id="form-message" cols="40" rows="7" class="form-control" placeholder="Message"></textarea>
                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </form>
          </div>
        </div>
</div>

<h2 style= " text-align:center;  color: black">You Also Can Contact Us Personaly</h2>
<div class="row">
  <div class="column">
    <div class="card">
    <img src="images/fuadjpg.jpg" alt="First slide" height="20%" width="100%">
  <div class="container">
    <h4><b>Fuad Uddin</b></h4> 
    <p>2016-2-60-078</p>
      <a href="https://www.facebook.com/fuaduddin.ador" class="fa fa-facebook"></a>
      <a href="https://www.instagram.com/fuad_uddin_ador_prince/" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-google"></a>
  </div>
      </div>
    </div>
<div class="column">
<div class="card">
    <img src="images/jannat.jpg" alt="First slide" height="40%" width="100%">
  <div class="container">
    <h4><b>Jannatul Maowa</b></h4> 
    <p>2017-2-60-40</p> 
       <a href="https://www.facebook.com/jouti.jafrin/" class="fa fa-facebook"></a>
      <a href="https://www.instagram.com/jannatulmaoya42/" class="fa fa-instagram"></a>
      <a href="#" class="fa fa-google"></a>
      
  </div>
    
</div>
</div>
</div>

 <div class="container-fluid">
        <div class="row no-gutters justify-content-center pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2><span>Instagram</span></h2>
          </div>
        </div>
        <div class="row no-gutters">
          <div class="col-sm-12 col-md ftco-animate">
            <img src="images/insta-1.jpg" alt="Second slide" height="300px" width="90%">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
           
          </div>
          <div class=" col-md ftco-animate">
            <img src="images/insta-2.jpg" alt="Second slide" height="300px" width="90%">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <img src="images/insta-3.jpg" alt="Second slide" height="300px" width="90%">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <img src="images/insta-4.jpg" alt="Second slide" height="300px" width="90%">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
            
          </div>
          <div class="col-sm-12 col-md ftco-animate">
            <img src="images/insta-44.jpg" alt="Second slide" height="300px" width="90%">
              <div class="icon d-flex justify-content-center">
                <span class="icon-instagram align-self-center"></span>
              </div>
        
          </div>
        </div>
      </div>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Royal Hotel</h2>
              <p>Indulge in comfort and luxury in your free time.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Useful Links</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Booking</a></li>
                <li><a href="#" class="py-2 d-block">Restaurant</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Privacy</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">About Us</a></li>
                <li><a href="#" class="py-2 d-block">Contact Us</a></li>
                <li><a href="#" class="py-2 d-block">Services</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text"> Aftabnagar,Dhaka,Bangladesh</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+880 11 22 3344</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">royalhotel@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
         
        </div>
      </div>
    </footer>