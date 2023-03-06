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
    <h1 class="getMyFood-head">getMyFood.Com</h1>
    <div class="order-now">
      <div class="details-order">
        <div class="Order-details-container">

<?php
    $server_order = "localhost";
    $username_order = "root";
    $password_order = ""; 
    $database_order = "order";
    
    $con = mysqli_connect($server_order, $username_order, $password_order,$database_order);
    if(!$con){
        die ('Connection Failed Due To '. mysqli_connect_error());
    } 

    // echo 'Connection Success! with `'.$database_order.'` database <br>';

    $order_done= false;

        if(isset($_POST['place-order'])){

        $order_food_name=$_POST['Order-food-name'];
        $oder_name=$_POST['order-name'];
        $order_phone=$_POST['order-phone'];
        $order_city=$_POST['order-city'];
        $order_pin=$_POST['order-pin'];
        $order_house=$_POST['order-house'];
        $order_quantity=$_POST['order-quantity'];
        $order_address=$_POST['order-address'];

        $sql_order="INSERT INTO `order`.`order_food` (`food_name`, `name`, `phone`, `city`, `pin_code`, `house_no`, `quantity`, `address`, `date&time`) VALUES ('$order_food_name', '$oder_name', '$order_phone', '$order_city','$order_pin', '$order_house', '$order_quantity', '$order_address', current_timestamp());";

            if($con->query($sql_order)==true){
            //  echo "Succesfully inserted !";
            $order_done= true;
            }
            else{
            echo "<br> Error : ".$con->error;
        }

            $con->close();
        }
?>

<?php

if($order_done==true){
    echo "<div class='done-msg' id='order-successfull'>
        <img src='../Images/success2.gif' alt='Successfull' class='sucessfull'>
        <p class='success'>Successfull</p>
        <h1 class='done-msg'>
            Your Order Placed Succesfully We Will Deliver It Very Soon..<br>Thank You for Using getMyFood.com
        </h1>
    </div>";
}

?>

    <form action="order.php" method="POST">
            <select class="order-details" id="drop_down_food" name="Order-food-name" type="text" placeholder="Select Your Food" required>
                <option selected disabled>--Select Your Food--</option>
                <option value="Momo">Momo</option>
                <option value="Chaumin">Chaumin</option>
                <option value="Chicken Biriyani">Chicken Biriyani</option>
                <option value="Burger">Burger</option>
                <option value="Bucket Chicken">Bucket Chicken</option>
                <option value="Fried Chicken">Fried Chicken</option>
                <option value="Sandwich">Sandwich</option>
                <option value="Mutton Ghee">Mutton Ghee</option>
                <option value="Pizza">Pizza</option>
                <option value="Rice and Chicken">Rice and Chicken</option>
            </select>

            <input class="order-details" name="order-name" type="text" placeholder="Your Name" required>
            <input class="order-details" name="order-phone" type="text" placeholder="Contact Number" required>
            <input class="order-details" name="order-city" type="text" placeholder="City" required>
            <input class="order-details" name="order-pin" id="Pin" type="text" placeholder="Pincode" required>
            <input class="order-details" name="order-house" id="house-no" type="text" placeholder="House No." required>
            <input class="order-details" name="order-quantity" id="quantity" type="Number" placeholder="Quantity of Food" required>
            <input class="order-details" id="Msg" name="order-address" type="text" placeholder="Address" required>
            <input id="user-checkbox" type="checkbox" name="Work" required><p id="accept">I Accept Your Terms & Conditions.</p>
            <br>
            <div class="Place-Order">
            <input name="place-order" id="Order-place" type="submit" value="Place Order">
        </div>
    </form>
        </div>
      </div>
    </div>
    <?php
    if($order_done==true){
        echo "<div class='blank-nav'></div>";
    }
    ?>
    <a name="Services"></a>
    <footer id="order-footer">
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