<?php
include("connect.php");
//include("function.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Staff Login</title>
	<link rel="stylesheet" type="text/css" href="style_login.css">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>

<body>

	<div class="header">
		<h1> Royal Hotel</h1>
	</div>
	<div class="pagetitle">
		<h2>Staff Login</h2>
		<h6>Our Coustomer is Our Piroty</h6>
	</div>


<div>

	<form method="post" action="login.php">
		<!---<div class="container">--->
			<div class="loginform">
				<div class="row">
					<div class="col-sm-4">
						<p>Fill up the form with correct values.</p>
						<hr class="mb-1">
						<label for="email"><b>Email Address</b></label>
						<input class="form-control" id="email"  type="email" name="email" required>

						<label for="password"><b>Password</b></label>
						<input class="form-control" id="password"  type="password" name="password" required>
						<hr class="mb-1">

						<div class="buttons">
							<button type="submit" class="btn btn-primary" name="login">Sign In</button>
							<a href="http://localhost/hotel/" class="btn btn-secondary " role="button" aria-pressed="true">Cancel</a>
						</div>
						<!--<input class="btn btn-secondary" type="button" id="cancel" name="cancel" value="Cancel">-->
					</div>
				</div>
			</div>
		<!---</div>--->
	</form>
    </div>
    <?php
   
   if(isset($_POST['login'])){

		 $email = $_POST['email'];
		 $password = $_POST['password'];

		 $query = "SELECT * FROM users WHERE email= '".$email."' AND password='".$password."' LIMIT 1";
		 $results = mysqli_query($conn, $query);

		 if(mysqli_num_rows($results)==1){
		 	

		$row=mysqli_fetch_array($run);

	 	$user_data = mysqli_fetch_assoc($results);

		 	if ($user_data['user_type'] == 'Resturant') {

					$_SESSION['user'] = $user_data;
					header('location:resturant.php');		  
			}
			elseif($user_data['user_type'] == 'Reception'){
					$_SESSION['user'] = $user_data;

					header('location:reception.php');
			}
			elseif($user_data['user_type'] == 'Waiter'){
					$_SESSION['user'] = $user_data;

					header('location:waiter.php');
			}
			else{
		    		echo '<script>alert("Failed to sign in!")</script>';
		    }

		 	echo"<script>window.location='login.php'</script>";


		 }else{
		    echo '<script>alert("Invalid email or password!")</script>';
		 }

	 }
?>

</body>
</html>