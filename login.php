
<?php

   $showErr = false;
   $showAlert = false;
   $passErr = false;
   $user;
   if(isset($_POST['email'])){
        if($_SERVER["REQUEST_METHOD"]=="POST"){
          //  require "_dbconnect.php";
          $server = "localhost";
          $username = "root";
          $password = "";
          $db = "REDANT";

          $conn = mysqli_connect($server, $username, $password, $db);

          $email = $_POST['email'];
          $passwd = $_POST['password'];

          if(!$conn)
            $showErr = true;
          else{
            $sql = "SELECT * FROM users WHERE Email='$email'";
            // $sql = "INSERT INTO `users`(`EMAIL`, `PASSWORD`, `TIME`) VALUES('$email', '$passwd', current_timestamp())";

            $result = mysqli_query($conn,$sql);

            
              $num = mysqli_num_rows($result);

            if($num==1){
              while($row=mysqli_fetch_assoc($result)){
                if(password_verify($passwd,$row['password']))
                    $showAlert = true;
                else  
                  $passErr = true;
              }
            }
            else  
              $passErr = true;
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
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Login | Redant</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="login-styles.css">
  </head>
  <body>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


    <div class="main-container">
        <!-- Nav bar -->
        <div class="navi">
              <div class="logo">
                <a href="index.html"> <img src="img/logo.PNG" alt="logo" width="125px"> </a>
              </div>
              <nav>
                  <ul>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="category.php">Categories</a></li>
                      <li><a href="our-team.php">Our Team</a></li>
                      <li><a href="contact.php">Contact</a></li>
                      <li><a style="color:red;" href="login.php">Login</a></li>
                      <li><a href="#"><img src="img/cart.png" width="30px" height="30px"></a></li>
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
      <strong> Success</strong> you loggedin successful 
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';

    if($passErr)
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Oops..! </strong> your Email/password is incorrect. Please check again...
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
?>

        <!-- Login Form -->
            <div class="center">
              <h1>Login</h1>
              <form   method="post">
                <div class="txt_field">
                  <input type="email" required name="email">
                  <span></span>
                  <label>Email</label>
                </div>
                <div class="txt_field">
                  <input type="password" required name="password">
                  <span></span>
                  <label>Password</label>
                </div>
                <div class="pass">Forgot Password?</div>
                <input type="submit" value="Login">
                <div class="signup_link">
                  Not a member? <a href="signup.php">Signup</a>
                </div>
              </form>
            </div>
            </div>
    


  <!-- Footer -->

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

                    <input type="email"  name="subcntmail" required class="text-input contact-input" placeholder="Your Email">
                    <textarea name="subcntmessage" required  class="text-input contact-input" placeholder="Enter your Message"></textarea>
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
