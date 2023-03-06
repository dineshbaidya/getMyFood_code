<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="Images/logo.png" type="image/x-icon">
    <title>getMyFood - Best Food Ordering Website</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" media="screen and (max-width : 440px)" href="CSS/responsive.css">
</head>
<body>
    <script>
        let name =prompt("Enter Your name ");
    </script>
    <navbar id="navbar">
        <div class="logo">
            <img src="Images/logo.png" alt="getMyFood_Logo">
        </div>
        <ul>
            <li class="items"><a href="index.php">Home</a></li>
            <li class="items"><a href="Html/foodItems.php">Food Items</a></li>
            <li class="items"><a href=#Services>Services</a></li>
            <li class="items"><a href="Html/Contact.php">Contact Us</a></li>
            <li class="items" id="about_right"><a href="Html/AboutUs.php">About Us</a></li>
        </ul>
        <div class="login">
            <button class="welcome_login" id="welcome_name"><script>document.write(name);</script></button>
            <a href="index.php"><button id="welcome_logout">Logout</button></a>
        </div>
    </navbar>
    <section id="home">
        <h1 class="primary">Welcome To getMyFood</h1>
        <p>This is India's One of The Biggest Online Food Ordering Website with Lots of Facilities,</p>
        <p>Such As Fast Delivary, Discount, Best Food Quality And Many More.</p>
        <a href="Html/foodItems.php"><button id="order">Order Now</button></a>
    </section>
    <div class="blank" id="home-blank">

    </div>
    <section id="Services-container">
        <h1 id="primary1">We Provide</h1>
        <div id="services">
            <div class="box">
                <img class="serviceImg" src="Images/png/discount.png" alt="Discount">
                <h2 class="secondary">Best Discount</h2>
                <p class="para">In getMyFood you'll find many discount in many ocesions, and also time to time we provide intresting discounts becouse we believe that everyone should serve good food at low budget. If you want to get notified with our discount offers you can subscribe us with your email so that we can notified you first when any discount occurs.</p>
            </div>
            <div class="box">
                <img class="serviceImg" src="Images/png/food.png" alt="Discount">
                <h2 class="secondary">Quality Foods</h2>
                <p class="para">getMyFood have many testy foods such as Momo, Chawmin, Chicken, Mutton, Egg Roll, Biriyani and many more which is very testy and also we work to improve our food's quality so that our customer can get the best quality of foods.</p>
            </div>
            <div class="box">
                <img class="serviceImg" src="Images/png/fast delivery.png" alt="Discount">
                <h2 class="secondary">Fast Delivary</h2>
                <p class="para">getMyFood provide one of the fastest delivary in all over India becouse we belive that our customers should not hungry for much time so we deliver your meal as fast as we can, also we have large amount of delivary person to delivar you meal faster.</p>
            </div>
        </div>
    </section>
    <section id="Food-items">
        <h1 id="primary2">Food Items</h1>
    <div class="list-of-foods">
        <div class="foods">
            <img src="Images/Momo.jpg">
            <h2 class="secondary2">₹80</h2>
            <p class="food-name">Momo</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
           <img src="Images/chowmein.jpg">
            <h2 class="secondary2">₹70</h2>
            <p class="food-name">Chowmein</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
           <img src="Images/biryani.jpg">
            <h2 class="secondary2">₹90</h2>
            <p class="food-name">Chichken Biryani</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
           <img src="Images/Burger.jpg">
            <h2 class="secondary2">₹100</h2>
            <p class="food-name">Burger</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods" id="food-sub-container">
           <img src="Images/Butter Chicken.jpg">
            <h2 class="secondary2">₹100</h2>
            <p class="food-name">Butter Chicken</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>

    </div>
    <div class="list-of-foods">
        <div class="foods">
            <img src="Images/Fried Chicken.jpg">
            <h2 class="secondary2">₹80</h2>
            <p class="food-name">Fried Chicken</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
            <img src="Images/sandwich.jpg">
            <h2 class="secondary2">₹75</h2>
            <p class="food-name">Sandwich</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
            <img src="Images/Mutton Ghee.jpg">
            <h2 class="secondary2">₹150</h2>
            <p class="food-name">Mutton Ghee</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods">
            <img src="Images/Pizza.jpg">
            <h2 class="secondary2">₹130</h2>
            <p class="food-name">Pizza</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
        <div class="foods" id="food-sub-container">
            <img src="Images/Rice With Chicken.jpg">
            <h2 class="secondary2">₹100</h2>
            <p class="food-name">Rice And Chicken</p>
            <a href="Html/order.php"><button class="order-now-foods">Order Now</button></a>
        </div>
    </div>
    <h5 class="Heading-5"><a href="Html/foodItems.php">View More Food Items >></a></h5>
</section>
    <section id="Our-Reviews">
        <h1 id="primary2">Our Review</h1>
        <div class="review-container">

            <div class="reviwer">
                <div class="block">
                    <img src="Images/Reviewer/1Meghna.jpg">
                </div>
                <h4 class="Reviewer-Name">Meghna Mondal</h4>
                <h1 class="Msg-Start">“</h1>
                <p class="review-Massage">The food quality of this website is very well and also the this website provide lots of discount than others websites.</p>
                <h1 class="Msg-Stop">”</h1>
            </div>

            <div class="reviwer">
                <div class="block">
                    <img src="Images/Reviewer/2Rishi.jpg">
                </div>
                <h4 class="Reviewer-Name">Rishi Baidya</h4>
                <h1 class="Msg-Start">“</h1>
                <p class="review-Massage">The Delivary is Pretty Good Becouse It's Very Fast And Their Behaviour Also Pretty Good.</p>
                <h1 class="Msg-Stop">”</h1>
            </div>

            <div class="reviwer">
                <div class="block">
                    <img src="Images/Reviewer/Subhadip.jpg">
                </div>
                <h4 class="Reviewer-Name">Subhadip Panda</h4>
                <h1 class="Msg-Start">“</h1>
                <p class="review-Massage">I rate this website 8/10 becouse it's frontent design is good.</p>
                <h1 class="Msg-Stop">”</h1>
            </div>

            <div class="reviwer">
                <div class="block">
                    <img src="Images/Reviewer/Debojit.jpg">
                </div>
                <h4 class="Reviewer-Name">Debojit Maity</h4>
                <h1 class="Msg-Start">“</h1>
                <p class="review-Massage">Well honestly the foods are very delicious.</p>
                <h1 class="Msg-Stop">”</h1>
            </div>
            <div class="reviwer">
                <div class="block">
                    <img src="Images/Reviewer/Dipesh.jpg">
                </div>
                <h4 class="Reviewer-Name">Dipesh Maity</h4>
                <h1 class="Msg-Start">“</h1>
                <p class="review-Massage">I like the foods section that each food have it's picture it make me more hungry than actual.</p>
                <h1 class="Msg-Stop">”</h1>
            </div>
        </div>    
    </section>
    <section class="blank2"></section>
    <a name="Services"></a>
    <footer>
        <div class="social-media">
            <h1 class="getMyFood">getMyFood.Com</h1>
            <div class="social-logos">
                <a href="https://www.facebook.com/dinesh.baidya.946" target="_blank"><img src="Images/png/Facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/soulmate_of_ush/" target="_blank"><img src="Images/png/Insta.png" alt="Insta"></a>
                <a href="https://twitter.com/I_am_Rishi_27" target="_blank"><img src="Images/png/twiter.png" alt="Twiter"></a> 
                <a href="https://wa.me/+918538086292?text=Hello%20Rishi!%20I%20got%20your%20number%20from%20getMyFood.com" target="_blank"><img src="Images/png/whatsapp.png" alt="Whatsapp"></a>
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
        <form action="index.php" method="post">
        <input id="mail" name="email_sub" class="User-input"  type="email" placeholder="Enter Your Email">
        <input name="subscribe" type="submit" value="Subscribe" id="Subscribe">
        </Form>
        <h2 class="copyright">&copy; Copyright 2022-2027. All Right Reserved by www.getMyFood.com</h2>
    </div>


</body>
</html>