<!DOCTYPE html>
<html>
    <head>
        <title> User login</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1>Login</h1>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="login.php">
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="password" type="password" class="form-login" placeholder="Password" required><br />
                
                <input type="submit" name="submit" class="form-login submit" value="Login"><br />
                  <p style="text-align: right; font-size: 18px; font-family: cursive; color:white; padding-right: 380px">If you are not registered, click on registration <a href="http://localhost/hotel/user/registration.php" style="color: white">registration</a></p>
                <p style="text-align: right; font-size: 18px; font-family: cursive; color:white; padding-right: 380px">Back to <a href="http://localhost/hotel/" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>

<?php
session_start();
$con = mysqli_connect("localhost","root","","hotel");

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $sql = "select * from user where email='".$email."' AND password='".$password."' limit 1";
    
    $query = mysqli_query($con,$sql);
    
    $row = mysqli_fetch_assoc($query);
    
    //echo "<p style='color: white'>".$row["id"]."</p>";
    $uid = $row["id"];
    
    if(mysqli_num_rows($query)==1)
    {
        
        $_SESSION['userid'] = $uid;
        echo "<script type='text/javascript'> alert('You Have Been login')</script>";
        echo '<script>window.location="profile.php"</script>';
    }
    else
    {
        echo "<script type='text/javascript'> alert('Your Email or Password is Wrong Plase Try again.')</script>";
    }
}
?>