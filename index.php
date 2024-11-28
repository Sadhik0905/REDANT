<?php

    if(isset($_POST['mail'])){
        $server = "localhost";
        $username = "root";
        $password = "";
        $db = "REDANT";

        $conn = mysqli_connect($server, $username, $password, $db);

        if(!$conn)
            echo "Check the server. Connection not established ".$mysqli_connect_error();

        $email = $_POST['mail'];
        $message = $_POST['message'];

        $sql = "INSERT INTO `contact_2` (`Email`, `Message`, `Date`) VALUES ('$email', '$message', current_timestamp());";

        if($conn->query($sql) == true)
            echo '<script>alert("Form has been submitted Successfully\nThanks for contacting us..!")</script>';
        else
            echo "Error : $sql <br> $conn->error";

        $conn->close();



    }

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="img/logo.PNG">
    <title>HOME | REDANTS</title>
    <link rel="stylesheet" href="index-style.css">
    <link href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <!--Nav Bar-->

    <div class="header">
        <div class="navigation">
            <div class="navi">
                <div class="logo">
                   <a href="index.php"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
                </div>
                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="category.php">Categories</a></li>
                        <li><a href="our-team.php">Our Team</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <li><a href="login.php">Login</a></li>
                    </ul>
                    <a href="#"><img src="img/cart.png" width="25px" height="25px"> </a> 
                </nav>
            </div>
        

            <div class="content">
                <div class="conts">
                    <h1>Dont Wait For Opportunity...<br>Create It!!</h1>
                    <p>
                        Remember to put on your own oxygen mask before assisting others. <br> Self-care is essential if you want to have any meaningful impact on the world around you.
                    </p>
                    <a href="category.php" class="button">Buy Now &#8594;</a>
                </div>
                <div class="conts">
                    <img src="img/Home/home-img.png">
                </div>
            </div>
        </div>
    </div>

    
<!--Categories Section-->
    <div class="categories" id="pro">
        <div class="small-cont">
            <div class="row">
                <div class="col-3">
                    <img src="img/Home/category-1.jpg">
                </div>
                <div class="col-3">
                    <img src="img/Home/category-2.jpg">
                </div>
                <div class="col-3">
                    <img src="img/Home/category-3.jpg">
                </div>
            </div>
        </div>
    </div>

    <!--Featured Products-->
    <div class="small-cont" id="prod">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col4">
                <img src="img/Home/product-6.jpg">
                 <h4>Balck Printed T-Shirt</h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                 </div>
                 <p>Rs.599/-</p>
            </div>

            <div class="col4">
                <img src="img/Home/product-3.jpg">
                 <h4>Cement Color Night Phant</h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                 </div>
                 <p>Rs.699/-</p>
            </div>

            <div class="col4">
                <img src="img/Home/product-10.jpg">
                 <h4>Red Printed Black Shoes</h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                 </div>
                 <p>Rs.899/-</p>
            </div>

            <div class="col4">
                <img src="img/Home/product-9.jpg">
                 <h4>Roadster Analog Watch</h4>
                 <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                 </div>
                 <p>Rs.4599/-</p>
            </div>
            
        </div>

        <!--Recent Products-->
            <h2 class="title">Recent Products</h2>

            <!--1nd Row-->
            <div class="row">
                <div class="col4">
                    <img src="img/Home/product-2.jpg">
                     <h4>HRX Balck Shoes</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                     </div>
                     <p>Rs.888/-</p>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-4.jpg">
                     <h4>Puma Navy Blue T-Shirt</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>Rs.777/-</p>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-8.jpg">
                     <h4>FOSSIL Black Color Watch</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </div>
                     <p>Rs.3999/-</p>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-5.jpg">
                     <h4>Nike Cement color Shoes</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>Rs.4599/-</p>
                </div>
                
            </div>

                <!--2nd Row-->


            <div class="row">
                <div class="col4">
                    <img src="img/Home/product-12.jpg">
                     <h4>Dazzie Black Color Night Phant</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                        <p>Rs.599/-</p>
                     </div>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-1.jpg">
                     <h4>PUMA Red Color T-Shirt</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-o"></i>
                     </div>
                     <p>Rs.659/-</p>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-11.jpg">
                     <h4>Paragon Gray Color Shoes</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                     </div>
                     <p>Rs.949/-</p>
                </div>
    
                <div class="col4">
                    <img src="img/Home/product-7.jpg">
                     <h4>HRX TRI Color Socks</h4>
                     <div class="rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                     </div>
                     <p>Rs.349/-</p>
                </div>
                
            </div>


    </div> 

    


    <!--Footer-->

    <div class="footer">
        <div class="footer-content">
            <div class="footer-section about">
                <a href="index.php"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
                <p>
                    Redant is significantly dominant in the sale of apparel (a position that was bolstered by its acquisition of Myntra), and was described as being "neck and neck" with Amazon in the sale of electronics and mobile phones.
                </p>
                <br>
                <div class="contact">
                    <span>&#128222; +91-9705954241</span>
                      <span>&#x2709; redants.support@gmail.com</span>
                </div>
                <div class="social">
                    <a href="#"><img src="img/facebook.png" alt=""></i></a>
                    <a href="#"><img src="img/instagram.png" alt=""></a>
                    <a href="#"><img src="img/twitter.png" alt=""></a>
                    <a href="#"><img src="img/linkedin.png" alt=""></a>
                </div>
            </div>
            <div class="footer-section links">
                <h2>Quick Links</h2>
                <hr>
                <ul>
                    <a href="index.php"><li>Home</li></a>
                    <a href="category.php"><li>Categories</li></a>
                    <a href="our-team.php"><li>Our Team</li></a>
                    <a href="contact.php"><li>Contact</li></a>
                    <a href="login.php"><li>Login</li></a>
                </ul>
            </div>
            <div class="footer-section contact-form">
                <h2>Contact Us</h2>
                
                <form action="index.php" method="post">

                    <input type="email"  name="mail" required class="text-input contact-input" placeholder="Your Email">
                    <textarea name="message" required  class="text-input contact-input" placeholder="Enter your Message"></textarea>
                    <button type="submit" class="button">&#x2709;Send</button>
                
                </form>
            </div>
        </div>
        <div class="footer-bottom">

           <p> &copy; REDANTS.com | Created by REDANTS Team  </p>
           
        </div>
    </div>


    
</body>
</html>