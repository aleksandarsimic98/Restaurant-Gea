<?php
    // getting username and password into PHP variable
    $user_username=filter_input(INPUT_POST, 'user_username');
    $user_password=filter_input(INPUT_POST, 'user_password');
    $admin_username=filter_input(INPUT_POST, 'admin_username');
    $admin_password=filter_input(INPUT_POST, 'admin_password');

    include_once("connection.php");       //connection to the DB 

    // if enter username and password matches username and password from the database user is logged in //
    
 if(null!==($user_username && $user_password)){
    $query= "SELECT * FROM users WHERE username= '$user_username' and psw='$user_password'";
    $user_result= mysqli_query($connection, $query);
    $user= mysqli_fetch_array($user_result, MYSQLI_ASSOC);
      if($user){
        session_start();
         $_SESSION['user'] = "yes";
         header("Location: home_page.php");
         die();
    }
 }

 if(null!==($admin_username && $admin_password)){
  $admin_query= "SELECT * FROM adminn WHERE admin_username= '$admin_username' and psw='$admin_password'";
  $admin_result= mysqli_query($connection, $admin_query);
  $admin= mysqli_fetch_array($admin_result, MYSQLI_ASSOC);
    if($admin){
     session_start();
     $_SESSION['admin'] = "yes";
     header("Location: admin.php");
     die();
  }
}
?>
<!DOCTYPE html>

<!-- BEGIN head -->

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/login.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <title>Login</title>
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>  

<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-navv" href="sign-up.php"> <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>Sign Up</b></i> </a>
      <a class="navbar-navvv" href="login.php"> <i class="fa-solid fa-user" style="color: #ffffff;"></i> <b><i>Login</b></i> </a>
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme">  </h6>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
              <li class="nav-item">
                <a class="nav-link" href="index.php"><i class="fa-solid fa-house"
                style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php"><i class="fa-solid fa-user"
                style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Login</i></b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sign-up.php"><i class="fa-solid fa-user-plus"
                style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Sign Up</i></b></a>
              </li>
              <hr class="hamline">
              <li class="nav-item">
                <a class="tele" href=""> <i class="fa-solid fa-phone" 
                style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
              </li>
              <li class="nav-item">
                <p class="worktime"><b>Mon-Fri..................09h-23h</b></p>
              </li>
              <li class="nav-item">
                <p class="worktime"><b>Sat-Sun..................12h-00h</b></p>
              </li>     
      </ul> 
    </div>
  </div>
</nav>

<!-- END Navbar -->

  <img class="coverimg" src="img/dish-restaurant-dining-food-wallpaper-min.jpg" alt="cover image">

<!-- BEGIN User login form -->

<div class="form">
  <h2 class="heading"> <b>User Login</b></h2> <br><br>
  <form action="login.php" id="Iform" method="post">
    <input type="text" placeholder="Username" class="enter" name="user_username" id="username"> <br>
    <input type="password" placeholder="Password" class="enter" name="user_password" id="password"> <br><br>
    <br>
    <input class="button" type="submit" value="Login"> 
  </form>
</div>

<!-- END User login form -->

<!-- BEGIN Admin login form -->

<div class="form">
  <h2 class="heading"> <b>Admin Login</b></h2> <br><br>
  <form action="login.php" method="post">
    <input type="text" placeholder="Username" class="enter" name="admin_username"> <br>
    <input type="password" placeholder="Password" class="enter" name="admin_password"> <br><br>
    <br>
    <input class="button" type="submit" value="Admin Login"> 
  </form>
</div>

<!-- END Admin login form -->

<!-- BEGIN footer -->

<footer>
  <div class="container text-center">
    <div class="row">
     <div class="col-sm">
        <p> <a class="footer-brand" href="index.php"><img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
        <br> <br>
        <a class="address_and_number" target="_blank" href="https://maps.app.goo.gl/jBWd4Kxz4QDXiCZr9"> <b>123 Main Street, New York</b> </a>
        <br>
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="address_and_number">578-444</b> </a></p>
        <br>
        <a class="address_and_number" target="_blank" href="https://maps.app.goo.gl/qMntydyRixXXWLrs5"> <b>456 Elm Street, New York</b> </a>
        <br> 
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="address_and_number">293-332</b> </a></p>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.1770537226935!2d-73.83348987655775!3d40.762245923609576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2600f928bb159%3A0x939edd86cd71a6ef!2zMTIzIE1haW4gU3QsIEZsdXNoaW5nLCBOWSAxMTM1NCwg0KHRmNC10LTQuNGa0LXQvdC1INCU0YDQttCw0LLQtQ!5e0!3m2!1ssr!2srs!4v1725635944076!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-sm">
        <p class="working_time"> <b>WORKING TIME</b></p>
        <br><br>
        <p class="address_and_number"><b>Monday - Friday :</b>  <br> <b>09:00h - 23:00h</b> </p>
        <br>
        <p class="address_and_number"> <b>Saturday - Sunday:</b>  <br> <b>12:00h - 00:00h</b></p>
        <hr>
        <a target="_blank" href="https://www.facebook.com/?locale=sr_RS"><div class="social_networks"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://www.instagram.com/"><div  class="social_networks"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://twitter.com/?lang=sr"><div target="_blank" class="social_networks"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></div></a>
      </div> 
    </div>
  </div>
</footer> 

<!-- END footer -->

</body>

<!-- END body -->

</html>
<script type="text/javascript" src="js/time.js"></script> 
