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
<!DOCTYPE html>
<html>
    <head>
        <title> Royal Hotel</title>
        <link rel="stylesheet" href="contact.css">
        
    </head>
    <body>
        <div class=contact-right-part>
            <div class="message-title" style="margin-top: 100px; color: #fff; text-transform: uppercase;">
                <h1 style="font-size: 16px; line-height: 10px;">Say Hello</h1>
                <h2 style="font-size: 14px;">We are alwas ready to serve you</h2>
            </div>
        
            <div  class="message-form">
                <form id="message-form" method="POST" action="ucontact.php" style="margin-top: 50px">
                    <input name="name" type="text" class="form-message" placeholder="Write your full name" required><br />
                
                    <input name="email" type="email" class="form-message" placeholder="Your E-mail" required><br />
                    
                    <input name="subject" type="subject" class="form-message" placeholder="Subject" required><br />
                
                    <textarea name="message" class="form-message" placeholder="Write your message" row="4" required></textarea><br />
                
                    <input type="submit" class="form-message submit" value="Send Your Message">
                    
                  <?php
                       if($query)
                       {
                        echo "<div style='color: white'>";
                                echo "We try to give you E-mail as soon as possible. Thank you!!!";
                            echo "</div>";
                        }
                        else
                        {
                            echo "Try Again";
                        }
                    ?>
                    <p style="text-align: right; font-size: 18px; font-family: cursive; color: white; padding-right: 90px">Back to <a href="profile.php" style="color: white">HOME</a></p>
                </form>
            </div>
        </div>
    </body>
</html>