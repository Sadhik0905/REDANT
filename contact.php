
        <!-- Main Contact -->
<?php
$showErr = false;
$showAlert = false;
  if(isset($_POST['name'])){
          
    
          if($_SERVER["REQUEST_METHOD"]=="POST"){
              $server = "localhost";
              $username = "root";
              $password = "";
              $db = "REDANT";
          
              $conn = mysqli_connect($server, $username, $password, $db);
              
              $name = $_POST['name'];
              $email = $_POST['email'];
              $phone = $_POST['phone'];
              $message = $_POST['message'];

              if(!$conn)
                  $showErr = true;
              else{
                  $sql = "INSERT INTO `maincontact` (`Name`, `Email`, `Phone`, `Message`, `Date`) VALUES ('$name', '$email', '$phone', '$message', current_timestamp());";
                  
                  $result = mysqli_query($conn,$sql);

                  if($result)
                      $showAlert = true;
              }

          }
        }
    

?>


          <!-- Secondary Contact -->

<?php
if(isset($_POST['subcntmail'])){
    if($_SERVER["REQUEST_METHOD"]=="POST"){
      $server = "localhost";
      $username = "root";
      $password = "";
      $db = "REDANT";

      $conn = mysqli_connect($server, $username, $password, $db);

      

      $email = $_POST['subcntmail'];
      $message = $_POST['subcntmessage'];

      $sql = "INSERT INTO `subcontact` (`Email`, `Message`, `Date`) VALUES ('$email', '$message', current_timestamp());";

      $result = mysqli_query($conn,$sql);
      
  }
}
?>

















<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CONTACT | REDANTS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="icon" href="img/logo.PNG">
    <link rel="stylesheet" href="contact-style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=B612:ital,wght@0,400;0,700;1,400;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  </head>
  <body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
     <script type="text/javascript" src="contact-validate.js"></script> 
        <div class="navi">
          <div class="logo">
            <a href="index.php"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
          </div>
          <nav>
              <ul>
                  <li><a href="index.php">Home</a></li>
                  <li><a href="category.php">Categories</a></li>
                  <li><a href="our-team.php">Our Team</a></li>
                  <li><a style="color:red;" href="contact.php">Contact</a></li>
                  <li><a href="login.php">Login</a></li>
                  <li><a href="#"><img src="img/userlogo.png" width="30px" height="30px"></a></li>
              </ul>
              <!-- <a href="#"><img src="img/cart.png" width="25px" height="25px"> </a> -->
          </nav>
      </div>


    <?php
        if($showErr)
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Error</strong> Something happend please try again.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';

        if($showAlert)
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success</strong> Your form has been submitted..!!
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    ?>



      <div class="main-container">
            <div class="contact-section">

              <h1>Contact Us</h1>
              <div class="border"></div>

              <form action="contact.php" onsubmit="return validate()" class="contact-form" method="post">
                <input name="name" type="text" id="nme" required class="contact-form-text" placeholder="Name">
                <input name="email" type="email" required id="email"   class="contact-form-text" placeholder="Email">
                <input name="phone" type="text" required  class="contact-form-text" id="number" placeholder="Phone">
                <textarea name="message" id="message" required class="contact-form-text" placeholder="Your Message"></textarea>
                <input type="submit" class="contact-form-btn" value="Send">
              </form>

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
                      <a href="#"><img src="img/facebook.png" alt=""></a>
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
                  
                  <form action="contact.php" method="post">
                      <input type="email" required name="subcntmail" class="text-input contact-input" placeholder="Your Email">
                      <textarea name="subcntmessage" required   class="text-input contact-input" placeholder="Enter your Message"></textarea>
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
