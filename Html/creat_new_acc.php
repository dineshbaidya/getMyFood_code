<?php
    $server_login = "localhost";
    $username_login = "root";
    $password_login = ""; 
    $database_login = "login";
 
    $con = mysqli_connect($server_login, $username_login, $password_login,$database_login);
    $creat_acc= false;
    // $exist_check_value = false;
    if(!$con){
        die ('Connection Failed Due To '. mysqli_connect_error());
    } 

    // echo 'Connection Success! with `'.$database_login.'` database <br>';

    if(isset($_POST['sign-up'])){

        $login_name=$_POST['login-name'];
        $login_address=$_POST['login-address'];
        $login_email=$_POST['login-email'];
        $login_password=$_POST['login-password'];

        $sql_login = "INSERT INTO `login`.`login` (`name`, `address`, `email`, `password`, `created`) VALUES ('$login_name', '$login_address', '$login_email', '$login_password', current_timestamp());";

            if($con->query($sql_login)==true){
            //  echo "Succesfully inserted !";
            $creat_acc= true;
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
    <link rel="icon" href="../Images/logo.png" type="image/x-icon">
    <title>getMyFood - Best Food Ordering Website</title>
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" media="screen and (max-width : 440px)" href="../CSS/responsive.css">
    <style>
       #creat_acc_success{
        background-color: rgb(59, 209, 21);
        padding-top: 10px;
        height: 35px;
        width: 96%;
        margin: auto;
        margin-top: -15px;
        margin-bottom: 30px;
        text-align: center;
        font-family: 'Kalam', cursive;
        color: white;
        font-size: 1rem;
        text-shadow: 1px 1px 3px black;
    } 
    #creat_acc_error{
        background-color: red;
        padding-top: 10px;
        height: 35px;
        width: 96%;
        margin: auto;
        margin-top: -15px;
        margin-bottom: 30px;
        text-align: center;
        font-family: 'Kalam', cursive;
        color: white;
        font-size: 1rem;
        text-shadow: 1px 1px 3px black;
    }
    </style>
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
<div class="Creat-New-container">
    <h2 class="Creat-new">Creat New Account</h2>
    <?php
    if($creat_acc == true){
        echo "<p id='creat_acc_success'>Your Account Successfully Created Please Login !</p>";
    }
    // else{
    //     if($exist_check_value == true){
    //         echo "<p id='creat_acc_error'>This Account Already Exist Please Try Another or Login !</p>";
    //     }
    // }
    
    ?>
<form action="creat_new_acc.php" method="POST">

    <input name="login-name" class="creat-input" type="text" placeholder="Enter Your Name" required>
    <input type="text" name="login-address" class="creat-input" placeholder="Enter Your Address" required>
    <input type="email" name="login-email" class="creat-input" placeholder="Enter Your Email" required>
    <input type="password" name="login-password" class="creat-input" placeholder="Choose Your Password" required>
    <br>
    <input id="check" type="checkbox" required>
    <p id="accept">I Accept Your Terms & Conditions</p>
    <input name="sign-up" class="login-btn" type="submit" value="Sign Up">

</form>
    <a href="login.php">Already have an Account?</a>

</div>
<a name="Services"></a>
<div class="blank-nav"></div>
<footer id="creat-footer">
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
