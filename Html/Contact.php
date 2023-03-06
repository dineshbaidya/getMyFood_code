<?php
    $server = "localhost";
    $username = "root";
    $password = ""; 
    $database = "contact";
    
    $con = mysqli_connect($server, $username, $password,$database);
    if(!$con){
        die ('Connection Failed Due To '. mysqli_connect_error());
    } 

    // echo 'Connection Success! <br>';
        $contact_data = false;

            if(isset($_POST['submit'])){
                
            $name=$_POST['name'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $address=$_POST['address'];
            $subject=$_POST['subject'];
            $massage=$_POST['massage'];

            $sql="INSERT INTO `getmyfood`.`contact` (`name`, `email`, `phone`, `address`, `subject`, `massage`, `sl no`, `Date & Time`) VALUES ('$name', '$email', '$phone', '$address', '$subject', '$massage', NULL, current_timestamp());";

            // echo $sql;         
            if($con->query($sql)==true){
                // echo "Succesfully inserted !";
                $contact_data=true;
            }
            else{
            echo "<br> Error : ".$con->error;
            }

            $con->close();
        }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/logo.png" type="image/x-icon">
    <title>getMyFood - Best Food Ordering Website</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" media="screen and (max-width : 440px)" href="../CSS/responsive.css">
</head>
<body>
    <navbar id="navbar">
        <div class="logo">
            <img src="../Images/logo.png" alt="getMyFood Logo">
        </div>
        <ul>
            <li class="items"><a href="../index.php">Home</a></li>
            <li class="items"><a href="foodItems.php">Food Items</a></li>
            <li class="items"><a href=#Services>Services</a></li>
            <li class="items"><a href="Contact.php">Contact Us</a></li>
            <li class="items"><a href="AboutUs.php">About Us</a></li>
        </ul>
        <div class="login">
            <a href="login.php"><p id="login">Login</p></a>
        </div>
    </navbar>
    <div class="blank-nav"></div>
    <div id="contact-page">
        <div class="Contact-Form">
            <h1 id="primary1">Contact Form</h2>
<?php
if($contact_data==true){
    echo"<div class='done-msg' id='order-successfull'>
    <img src='../Images/success2.gif' alt='Successfull' class='sucessfull'>
    <p class='success'></p>
    <h1 class='done-msg'>
        Your Data Successfully Inserted To Our Database, Our Team Will Contact You Soon..<br>Thank You for Using getMyFood.com
    </h1>
</div>";
}
?>
                <div class="contact-details">
                    <form action="contact.php" method="post">
                    <input name="name"  class="User-input" type="text" placeholder="Your Name" required>
                    <input name="email" class="User-input"  type="email" placeholder="Your Email" required>
                    <input name="phone" class="User-input"  type="text" placeholder="Contact Number" required>
                    <input name="address" class="User-input"  type="text" placeholder="City" required>
                    <input name="subject" class="User-input"  type="text" placeholder="Massage Subject" required>
                    <input name="massage" class="User-input" id="Msg"  type="text" placeholder="Massage For Us" required>
                    <input id="user-checkbox" type="checkbox" name="Work" required><p>I Accept Your Terms & Conditions.</p>
                    <br>
                    <div class="send-msg">
                    <input name="submit" type="submit" value="Send" id="Send">
                    </div>
                    </form>
                </div>
        </div>
    </div>    
<?php
    if($contact_data==true){
        echo "<br>";
        echo "<div class='blank-nav'></div>";
    }
?>
    <a name="Services"></a>
    <footer id="Contact-footer">
        <div class="social-media">
            <h1 class="getMyFood">getMyFood.Com</h1>
            <div class="social-logos">
                <a href="https://www.facebook.com/dinesh.baidya.946" target="_blank"><img src="../Images/png/Facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/soulmate_of_ush/" target="_blank"><img src="../Images/png/Insta.png" alt="Insta"></a>
                <a href="https://twitter.com/I_am_Rishi_27" target="_blank"><img src="../Images/png/twiter.png" alt="Twiter"></a> 
                <a href="https://wa.me/+918538086292?text=Hello%20Rishi!%20I%20got%20your%20number%20from%20getMyFood.com" target="_blank"><img src="../Images/png/whatsapp.png" alt="Whatsapp"></a>
            </div>
        </div>
        <div class="footer-container">
            <div id ="footer-sub-container" class="support">
                <h3>Support</h3>
                <p>Contact Us</p>
                <p>FAQ</p>
                <p>About Us</p>
                <p>Report a Bug</p>
                <p>Delivery Delay</p>
            </div>
            <div id ="footer-sub-container" class="Services">
                <h3>Clarification</h3>
                <p>Clients</p>
                <p>Food Quality</p>
                <p>Food Review</p>
                <p>Awards</p>
            </div>
            <div id ="footer-sub-container" class="Company">
                <h3>Company</h3>
                <p>Privecy Policies</p>
                <p>Terms & Conditions</p>
            </div>
        </div>
    </footer>
    <?php
    $server_email = "localhost";
    $username_email = "root";
    $password_email = ""; 
    $database_email = "email_sub";
    
    $con = mysqli_connect($server_email, $username_email, $password_email,$database_email);
    if(!$con){
        die ('Connection Failed Due To '. mysqli_connect_error());
    } 

    // echo 'Connection Success! with '.$database_email.'<br>';

            if(isset($_POST['subscribe'])){

            $email_sub=$_POST['email_sub'];


            $sql_subscribe="INSERT INTO `email_sub`.`email_sub` (`email_sub`, `No.`, `Date & Time`) VALUES ('$email_sub', NULL, current_timestamp());";
    
            // echo $sql_subscribe;

            if($con->query($sql_subscribe)==true){
            // echo "Succesfully inserted !";
            }
            else{
            echo "<br> Error : ".$con->error;
            }

            $con->close();
        }
    ?>
    <div class="email-subscription">
    <form action="../index.php" method="post">
        <input id="mail" name="email_sub" class="User-input"  type="email" placeholder="Enter Your Email">
        <input name="subscribe" type="submit" value="Subscribe" id="Subscribe">
        </Form>
        <h2 class="copyright">&copy; Copyright 2022-2027. All Right Reserved by www.getMyFood.com</h2>
    </div>
</body>
</html>