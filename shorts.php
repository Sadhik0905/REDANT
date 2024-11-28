<!-- Secondary Contact -->

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
<html>
  <head>
    <meta charset="utf-8">
    <title>SHORTS | REDANTS</title>
    <link rel="icon" href="img/logo.PNG">
    <link rel="stylesheet" href="categories.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  </head>
  <body>

    <!--Navigation Bar-->
<div class="total-body">
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
    <!--Search Box-->
    <div class="whole-Container">
        <div class="boxcontainer">
            <table class="elements-Container">
                <tr>
                    <td>
                        <input type="text" placeholder="Search" class="search">
                    </td>
                    <td>
                        <a href="#"><i class="fa fa-search"></i></a>
                    </td>
                </tr>
            </table>
        </div>
    </div>


    <div class="main-container">

    <!--First Container-->
        <div class="row">
            <div class="card-container">
            <div class="container">
                <div class="image">
                    <img src="img/Categories/shorts/1.jpeg" alt="">
                </div>
                <div class="card-content">
                    <div class="wrapper">
                        <div class="title">
                            Tripr Shorts</div>
                            <p>
                                Men's Full Length Cement color Phant</p>
                            <span class="price">Rs.499</span>
                    <div class="content size">
                    <div class="name size-name">
        Size</div>
        <div class="size-value">
                    <span class="color">XS</span>
                    <span class="color">S</span>
                    <span class="active">M</span>
                    <span class="color">L</span>
                    <span class="color">XL</span>
                    </div>
        </div>
        <div class="content colour">
                    <div class="name colour-name">
        Colour</div>
        <div class="colour-value">
                    <span class="white" data-color="white" ></span>
                    <span class="blue active" data-color="white" ></span>
                    <span class="yellow" data-color="white" ></span>
                    </div>
        </div>
        <div class="btns">
                    <button>Buy now</button>
                    <button>Add to cart</button>
                </div>
        </div>
        </div>
        </div>
    </div>


        <!--Second Container-->

        <div class="card-container">
        <div class="container">
            <div class="image">
                <img src="img/Categories/shorts/2.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="wrapper">
                    <div class="title">
                        River Hill</div>
                        <p>
                            Men's Army type Night Phant</p>
                        <span class="price">Rs.999</span>
                <div class="content size">
                <div class="name size-name">
    Size</div>
    <div class="size-value">
                <span class="color">XS</span>
                <span class="color">S</span>
                <span class="active">M</span>
                <span class="color">L</span>
                <span class="color">XL</span>
                </div>
    </div>
    <div class="content colour">
                <div class="name colour-name">
    Colour</div>
    <div class="colour-value">
                <span class="white" data-color="white" ></span>
                <span class="blue active" data-color="white" ></span>
                <span class="yellow" data-color="white" ></span>
                </div>
    </div>
    <div class="btns">
                <button>Buy now</button>
                <button>Add to cart</button>
            </div>
    </div>
    </div>
    </div>
    </div>

        <!--Third Container-->
        <div class="card-container">
        <div class="container">
            <div class="image">
                <img src="img/Categories/shorts/3.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="wrapper">
                    <div class="title">
                        BIS Creations</div>
                        <p>
                            Black Color White Stripes Phant</p>
                        <span class="price">Rs.1299</span>
                <div class="content size">
                <div class="name size-name">
    Size</div>
    <div class="size-value">
                <span class="color">XS</span>
                <span class="color">S</span>
                <span class="active">M</span>
                <span class="color">L</span>
                <span class="color">XL</span>
                </div>
    </div>
    <div class="content colour">
                <div class="name colour-name">
    Colour</div>
    <div class="colour-value">
                <span class="white" data-color="white" ></span>
                <span class="blue active" data-color="white" ></span>
                <span class="yellow" data-color="white" ></span>
                </div>
    </div>
    <div class="btns">
                <button>Buy now</button>
                <button>Add to cart</button>
            </div>
    </div>
    </div>
    </div>
    </div>


</div>

    <!--Fourth container-->
    <div class="row">
        <div class="card-container">
                <div class="container">
                    <div class="image">
                        <img src="img/Categories/shorts/4.jpeg" alt="">
                    </div>
                    <div class="card-content">
                        <div class="wrapper">
                            <div class="title">
                                Pinache</div>
                                <p>
                                    Men's Printed 1/2 Short</p>
                                <span class="price">Rs.599</span>
                        <div class="content size">
                        <div class="name size-name">
            Size</div>
            <div class="size-value">
                        <span class="color">XS</span>
                        <span class="color">S</span>
                        <span class="active">M</span>
                        <span class="color">L</span>
                        <span class="color">XL</span>
                        </div>
            </div>
            <div class="content colour">
                        <div class="name colour-name">
            Colour</div>
            <div class="colour-value">
                        <span class="white" data-color="white" ></span>
                        <span class="blue active" data-color="white" ></span>
                        <span class="yellow" data-color="white" ></span>
                        </div>
            </div>
            <div class="btns">
                        <button>Buy now</button>
                        <button>Add to cart</button>
                    </div>
            </div>
            </div>
            </div>
            </div>

                    <!--Fifth Container-->
                    <div class="card-container">
                    <div class="container">
                        <div class="image">
                            <img src="img/Categories/shorts/5.jpeg" alt="">
                        </div>
                        <div class="card-content">
                            <div class="wrapper">
                                <div class="title">
                                    ADIDAS</div>
                                    <p>
                                        Black Color White Dots Short</p>
                                    <span class="price">Rs.489</span>
                            <div class="content size">
                            <div class="name size-name">
                Size</div>
                <div class="size-value">
                            <span class="color">XS</span>
                            <span class="color">S</span>
                            <span class="active">M</span>
                            <span class="color">L</span>
                            <span class="color">XL</span>
                            </div>
                </div>
                <div class="content colour">
                            <div class="name colour-name">
                Colour</div>
                <div class="colour-value">
                            <span class="white" data-color="white" ></span>
                            <span class="blue active" data-color="white" ></span>
                            <span class="yellow" data-color="white" ></span>
                            </div>
                </div>
                <div class="btns">
                            <button>Buy now</button>
                            <button>Add to cart</button>
                        </div>
                </div>
                </div>
                </div>
                </div>


                <!--Sixth Conatiner-->
                <div class="card-container">
                <div class="container">
                    <div class="image">
                        <img src="img/Categories/shorts/6.jpeg" alt="">
                    </div>
                    <div class="card-content">
                        <div class="wrapper">
                            <div class="title">
                                ROWBOW Originals</div>
                                <p>
                                    Men's Light Black Shorts</p>
                                <span class="price">Rs.899</span>
                        <div class="content size">
                        <div class="name size-name">
            Size</div>
            <div class="size-value">
                        <span class="color">XS</span>
                        <span class="color">S</span>
                        <span class="active">M</span>
                        <span class="color">L</span>
                        <span class="color">XL</span>
                        </div>
            </div>
            <div class="content colour">
                        <div class="name colour-name">
            Colour</div>
            <div class="colour-value">
                        <span class="white" data-color="white" ></span>
                        <span class="blue active" data-color="white" ></span>
                        <span class="yellow" data-color="white" ></span>
                        </div>
            </div>
            <div class="btns">
                        <button>Buy now</button>
                        <button>Add to cart</button>
                    </div>
            </div>
            </div>
            </div>
            </div>
    </div>

        <!--Seventh Conatiner-->
    <div class="row">
        <div class="card-container">
                        <div class="container">
                            <div class="image">
                                <img src="img/Categories/shorts/7.jpeg" alt="">
                            </div>
                            <div class="card-content">
                                <div class="wrapper">
                                    <div class="title">
                                        Abdullha Garment</div>
                                        <p>
                                            Full Cotton Black Shorts</p>
                                        <span class="price">Rs.1199</span>
                                <div class="content size">
                                <div class="name size-name">
                    Size</div>
                    <div class="size-value">
                                <span class="color">XS</span>
                                <span class="color">S</span>
                                <span class="active">M</span>
                                <span class="color">L</span>
                                <span class="color">XL</span>
                                </div>
                    </div>
                    <div class="content colour">
                                <div class="name colour-name">
                    Colour</div>
                    <div class="colour-value">
                                <span class="white" data-color="white" ></span>
                                <span class="blue active" data-color="white" ></span>
                                <span class="yellow" data-color="white" ></span>
                                </div>
                    </div>
                    <div class="btns">
                                <button>Buy now</button>
                                <button>Add to cart</button>
                            </div>
                    </div>
                    </div>
                    </div>
                    </div>

                        <!--Eighth Conatiner-->
                        <div class="card-container">
                        <div class="container">
                            <div class="image">
                                <img src="img/Categories/shorts/8.jpeg" alt="">
                            </div>
                            <div class="card-content">
                                <div class="wrapper">
                                    <div class="title">
                                        DDD</div>
                                        <p>
                                            Silky Black Color 1/2 Shorts</p>
                                        <span class="price">Rs.899</span>
                                <div class="content size">
                                <div class="name size-name">
                    Size</div>
                    <div class="size-value">
                                <span class="color">XS</span>
                                <span class="color">S</span>
                                <span class="active">M</span>
                                <span class="color">L</span>
                                <span class="color">XL</span>
                                </div>
                    </div>
                    <div class="content colour">
                                <div class="name colour-name">
                    Colour</div>
                    <div class="colour-value">
                                <span class="white" data-color="white" ></span>
                                <span class="blue active" data-color="white" ></span>
                                <span class="yellow" data-color="white" ></span>
                                </div>
                    </div>
                    <div class="btns">
                                <button>Buy now</button>
                                <button>Add to cart</button>
                            </div>
                    </div>
                    </div>
                    </div>
                    </div>

                    <!--Nineth Conatiner-->
                    <div class="card-container">
                    <div class="container">
                        <div class="image">
                            <img src="img/Categories/shorts/9.jpeg" alt="">
                        </div>
                        <div class="card-content">
                            <div class="wrapper">
                                <div class="title">
                                    U.S. Polo Assn</div>
                                    <p>
                                        Brown Jenes 1/2 Shorts</p>
                                    <span class="price">Rs.1099</span>
                            <div class="content size">
                            <div class="name size-name">
                Size</div>
                <div class="size-value">
                            <span class="color">XS</span>
                            <span class="color">S</span>
                            <span class="active">M</span>
                            <span class="color">L</span>
                            <span class="color">XL</span>
                            </div>
                </div>
                <div class="content colour">
                            <div class="name colour-name">
                Colour</div>
                <div class="colour-value">
                            <span class="white" data-color="white" ></span>
                            <span class="blue active" data-color="white" ></span>
                            <span class="yellow" data-color="white" ></span>
                            </div>
                </div>
                <div class="btns">
                            <button>Buy now</button>
                            <button>Add to cart</button>
                        </div>
                </div>
                </div>
                </div>
            </div>
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
                <a href="#"><img src="img/instagram.png" alt=""></i></a>
                <a href="#"><img src="img/twitter.png" alt=""></i></a>
                <a href="#"><img src="img/linkedin.png" alt=""></i></a>
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
            
            <form action="shorts.php" method="post">

                <input type="email" required name="mail" class="text-input contact-input" placeholder="Your Email">
                <textarea name="message" required  class="text-input contact-input" placeholder="Enter your Message"></textarea>
                <button type="submit" class="button">
                    &#x2709;
                    Send
                </button>

            </form>
            
        </div>
    </div>
    <div class="footer-bottom">
       <p> &copy; REDANTS.com | Created by REDANTS Team  </p>
    </div>
</div>


</body>
</html>