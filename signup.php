
<?php

$showErr = false;
$showAlert = false;
$passErr = false;
$sqlErr = false;
$user;
if(isset($_POST['email'])){
     if($_SERVER["REQUEST_METHOD"]=="POST"){
       //  require "_dbconnect.php";
       $server = "localhost";
       $username = "root";
       $password = "";
       $db = "REDANT";

       $conn = mysqli_connect($server, $username, $password, $db);

       $fname = $_POST['fname'];
       $user = $fname;
       $lname = $_POST['lname'];
       $email = $_POST['email'];
       $passwd = $_POST['password'];
       $repasswd = $_POST['repassword'];

       if(!$conn)
         $showErr = true;
        elseif($passwd != $repasswd)
          $passErr = true;
       else{
          $hash = password_hash($passwd,PASSWORD_DEFAULT);

        $sql = "INSERT INTO `users` (`FirstName`, `LastName`, `Email`, `password`, `Date`) VALUES ( '$fname', '$lname', '$email', '$hash', current_timestamp())";

        //  $sql = "INSERT INTO `users`(`EMAIL`, `PASSWORD`, `TIME`) VALUES('$email', '$passwd', current_timestamp())";

         $result = mysqli_query($conn,$sql);

         if($result)
           $showAlert = true;
          else
            $sqlErr = true;


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
 <link rel="stylesheet" href="signup-styles.css">
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
                   <li><a href="#"><img src="img/userlogo.png" width="30px" height="30px"></a></li>
               </ul>
               <!-- <a href="#"><img src="img/cart.png" width="25px" height="25px"> </a> -->
           </nav>
     </div>

<?php
 if($showErr)
    echo "<script> alert('Error..! Something happend please try again.')</script>"; 
//    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//    <strong>Error</strong> Something happend please try again.
//    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//  </div>';

 if($showAlert){
    echo "<script> alert('Success $user Your account created..! Login now')</script>";
 }

 if($sqlErr)
    echo "<script> alert('Can't signup.. Email already exists..!!')</script>";
   

 if($passErr)
   echo "<script> alert('Try Again.! Your password didnot match ')</script>"

// '<div class="alert alert-warning alert-dismissible fade show" role="alert">
//    <strong>Try Again</strong> Your password didnot match 
//    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
//  </div>';

//  echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
//  <strong>Success</strong> Your account created..! Login now
//  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
// </div>';

?>

     <!-- Login Form -->
         <div class="center">
           <h1>Sign Up</h1>
           <form   method="post">
            <div class="txt_field">
               <input type="name" required name="fname">
               <span></span>
               <label>First Name</label>
             </div>

             <div class="txt_field">
               <input type="name" required name="lname">
               <span></span>
               <label>Last Name</label>
             </div>

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

             <div class="txt_field">
               <input type="password" required name="repassword">
               <span></span>
               <label>Re-Password</label>
             </div>
             <!-- <div class="pass">Forgot Password?</div> -->
             <input type="submit" value="Signup">
             <div class="signup_link">
             Already having account? <a href="login.php">Login</a>
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
