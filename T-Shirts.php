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
    <title>T-Shirts | REDANTS</title>
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
                    <img src="img/Categories/T-Shirts/1.jpeg" alt="">
                </div>
                <div class="card-content">
                    <div class="wrapper">
                        <div class="title">
                            Allen Solly</div>
                            <p>
                                Men's Blue color T-Shirt</p>
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


        <!--Second Container-->

        <div class="card-container">
        <div class="container">
            <div class="image">
                <img src="img/Categories/T-Shirts/2.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="wrapper">
                    <div class="title">
                        AMERICAN CREW</div>
                        <p>
                            Red-Brown Color 1/4 sleve T-Shirt</p>
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
                <img src="img/Categories/T-Shirts/3.jpeg" alt="">
            </div>
            <div class="card-content">
                <div class="wrapper">
                    <div class="title">
                        EYEBOGLER</div>
                        <p>
                            Light-Green Color Full-Sleves T-Shirt</p>
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


</div>

    <!--Fourth container-->
    <div class="row">
        <div class="card-container">
                <div class="container">
                    <div class="image">
                        <img src="img/Categories/T-Shirts/4.jpeg" alt="">
                    </div>
                    <div class="card-content">
                        <div class="wrapper">
                            <div class="title">
                                Urbano Fashion</div>
                                <p>
                                    Red Color Avengers T-Shirt</p>
                                <span class="price">Rs.799</span>
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
                            <img src="img/Categories/T-Shirts/5.jpeg" alt="">
                        </div>
                        <div class="card-content">
                            <div class="wrapper">
                                <div class="title">
                                    US Polo Association</div>
                                    <p>
                                        White Color Face Hider printed T-shirt</p>
                                    <span class="price">Rs.959</span>
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
                        <img src="img/Categories/T-Shirts/6.jpeg" alt="">
                    </div>
                    <div class="card-content">
                        <div class="wrapper">
                            <div class="title">
                                Van Heusen</div>
                                <p>
                                    Sky-Blue Color Attitude T-Shirt</p>
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
    </div>

        <!--Seventh Conatiner-->
    <div class="row">
        <div class="card-container">
                        <div class="container">
                            <div class="image">
                                <img src="img/Categories/T-Shirts/7.jpeg" alt="">
                            </div>
                            <div class="card-content">
                                <div class="wrapper">
                                    <div class="title">
                                        FIRST CLASSE</div>
                                        <p>
                                            Special Yellow Color Shiva T-Shirt</p>
                                        <span class="price">Rs.1599</span>
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
                                <img src="img/Categories/T-Shirts/8.jpeg" alt="">
                            </div>
                            <div class="card-content">
                                <div class="wrapper">
                                    <div class="title">
                                        ZEYO</div>
                                        <p>
                                            Men's Influencer T-Shirt</p>
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
                            <img src="img/Categories/T-Shirts/9.jpeg" alt="">
                        </div>
                        <div class="card-content">
                            <div class="wrapper">
                                <div class="title">
                                    Maniac</div>
                                    <p>
                                        Men's Black color Rowdy Printed T-Shirt</p>
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
            
            <form action="T-Shirts.php" method="post">

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










<!-- <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
  <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
  </symbol>
  <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
  </symbol>
  <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
    <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
  </symbol>
</svg>

<div class="alert alert-primary d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Info:"><use xlink:href="#info-fill"/></svg>
  <div>
    An example alert with an icon
  </div>
</div>
    <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    An example success alert with an icon
  </div>
</div>
<div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example warning alert with an icon
  </div>
</div>
<div class="alert alert-danger d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    An example danger alert with an icon
  </div>
</div>








<div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    An example success alert with an icon
  </div>
</div> -->