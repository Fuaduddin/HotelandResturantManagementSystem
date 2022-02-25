<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $password = $_POST['password'];
    
    $imagename = $_FILES['profilepic']['name']; //storing file name
    $tempimagename = $_FILES['profilepic']['tmp_name']; //storing temp name
    
    $con = mysqli_connect("localhost","root","","hotel");
    
    move_uploaded_file( $tempimagename,"imgs/$imagename");
    
    $sql = "insert into user(`name`,`email`,`contact`,`address`,`password`,`image`) values('$name','$email','$contact','$address','$password','$imagename')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        echo "<script type='text/javascript'> alert('You Scucessfully Register. Thank You')</script>";
        echo '<script>window.location="login.php"</script>';
        
    }
    else
    {
        die(mysqli_connect_error());
    }
    
    mysqli_close($con);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Royal Hotel And Resturant</title>
        <link rel="icon" href="images/icon.webp" type="image/icon">
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1>Registration</h1>
            <h2>Give all the information carefully</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="registration.php" enctype="multipart/form-data">
                <input name="name" type="name" class="form-login" placeholder="Full Name" required><br />
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="contact" type="contact" class="form-login" placeholder="Phone Number" required><br />
                <input name="address" type="address" class="form-login" placeholder="Address" required><br />
                <input name="password" type="password" class="form-login" placeholder="Password" required><br />
                <input type="file" alt="pro-pic" name="profilepic" class="form-control"><br />
                
                <input type="submit" name="submit" class="form-login submit" value="Registration">
                
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="http://localhost/hotel/" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>