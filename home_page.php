<?php
//if user is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- BEGIN head -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>Restaurant Gea</title>
  <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/home_page.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>

<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home_page.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="cart" href="cart.php"> <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i> <b><i>Cart</b></i> </a>
    <form action="logout.php">
      <button type="submit" class="logout" value="Logout">Logout</button>
    </form>
    <a class="navbar-navvvv" href="home_page.php" id="home"> <i class="fa-solid fa-house"  style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
    <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
    <h6 class="vreme"></h6>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
        <li class="nav-item">
          <a class="nav-link" href="home_page.php"><i class="fa-solid fa-house"
          style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
          <b style="color: #ffffff;"><i>Cart</i></b></a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180" 
          style="color: #ffffff;"></i> <b> Logout</b> </a>
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

<!-- BEGIN type food select -->

<div class="apsclass"></div>
<div class="container text-center">
  <a href="appetizers.php" class="food">
  <div class="menu">  
    <div class="row">
      <div class="col">
        <img src="img/3-Ingredient-Appetizers-38e65f4cf4d04135b26c591181f854d4.jpg" class="image" alt="appetizers">
        <p class="heading"> <b> Appetizers <b></p>
      </div>
    </div>
  </div>
</div>
</a>

<div class="apsclass"></div>
<div class="container text-center">
  <a href="main_dishes.php" class="food">
  <div class="menu"> 
    <div class="row">
      <div class="col">
        <img src="img/25473-the-perfect-basic-burger-DDMFS-4x3-56eaba3833fd4a26a82755bcd0be0c54.jpg" class="image" alt="main dishes">
        <p class="heading"> <b> Main dishes <b></p>
      </div>
    </div>
  </div>
</div>
</a>
  
<div class="apsclass"></div>
<div class="container text-center">
  <a href="drinks.php" class="food">
  <div class="menu">
    <div class="row">
      <div class="col">
        <img src="img/pexels-photomix-company-96974.jpg" class="image" alt="drinks">
        <p class="heading"> <b> Drinks <b></p>
      </div>
    </div>
  </div>
</div>
</a>

<!-- END type food select -->

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
