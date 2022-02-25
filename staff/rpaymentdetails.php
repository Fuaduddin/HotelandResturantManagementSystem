<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $bill = $_POST['bill'];
    $paymentof = $_POST['paymentof'];
    $paymentmethod = $_POST['paymentmethod'];
    $staffname = $_POST['staffname']; 
    $con = mysqli_connect("localhost","root","","hotel");
    
    $sql = "insert into paymentdetails(`name`,`email`,`phone`,`bill`,`paymentof`,`paymentmethod`,`staffname`) values('$name','$email','$phone','$bill','$paymentof','$paymentmethod','$staffname')";
    
    $query = mysqli_query($con,$sql);
    if($query)
    {
        header("location:rpaymentdetails.php");
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
        <title> Royal Hotel Payment Details</title>
        <link rel="stylesheet" href="login.css">
    </head>
    <body>
        <div class="login-title">
            <h1> Payment Details</h1>
            <h2>Give all the information carefully</h2>
        </div>
        <div class="login-form">
            <form id="login-form" method="POST" action="rpaymentdetails.php" enctype="multipart/form-data">
                <input name="name" type="name" class="form-login" placeholder="Full Name" required><br />
                <input name="email" type="email" class="form-login" placeholder="E-mail" required><br />
                <input name="phone" type="phone" class="form-login" placeholder="Phone Number" required><br />
                <input name="bill" type="bill" class="form-login" placeholder="Total" required><br />
                <input name="paymentof" type="payment" class="form-login" placeholder="Payment Of" required><br />
                <input name="paymentmethod" type="Paymentmethod" class="form-login" placeholder="paymentmethod" required><br />
               <input name="staffname" type="staffname" class="form-login" placeholder="Staff Name" required><br />
                <input type="submit" name="submit" class="form-login submit" value="Registration">
                <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 380px">Back to <a href="whome.php" style="color: white">HOME</a></p>
            </form>
        </div>
    </body>
</html>