

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
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
<div class="login-container">
    <h2 class="login-pass">Login</h2>
<?php
    @include('config.php');
    if(isset($_POST['login'])){
    $username_login = $_POST["username_login"];
    $password_login = $_POST["password_login"];

    $sql_login = "SELECT * FROM login WHERE email='$username_login' and password='$password_login'";
    $result_login = mysqli_query($conn, $sql_login);
    $row = mysqli_fetch_array($result_login, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result_login);
    if($count==1){
        header('location:../welcome.php');
    }
    else{
        echo"
        <p class='login_failed'>Login Failed ! Invalid Username or Password</p>";
    }
}
?>
    <form action="" method="POST">
    <input class="login-input" type="text" name="username_login" placeholder="Enter Your Email" required>
    <input class="login-input" type="password" name="password_login" placeholder="Enter Your Password" required>
    <input name="login" class="login-btn" type="submit" value="Login">
    </form>
    <a href="creat_new_acc.php">Creat New Account</a>
</div>
<div class="blank-nav"></div>
<div class="blank-nav"></div>
<a name="Services"></a>
<footer id="login-footer">
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
