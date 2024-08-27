<?php
//if user is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['korisnik'])){
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
  <link rel="stylesheet" href="css/pocetna.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>

<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="pocetna.php"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="korpa" href="korpa.php"> <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i> <b><i>Cart</b></i> </a>
    <form action="logout.php">
      <button type="submit" class="logout" value="Logout">Logout</button>
    </form>
    <a class="navbar-navvvv" href="pocetna.php" id="home"> <i class="fa-solid fa-house"  style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
    <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
    <h6 class="vreme"></h6>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
        <li class="nav-item">
          <a class="nav-link" href="pocetna.php"><i class="fa-solid fa-house"
          style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="korpa.php"><i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
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
  <a href="predjela.php" class="food">
  <div class="menii">  
    <div class="row">
      <div class="col">
        <img src="img/3-Ingredient-Appetizers-38e65f4cf4d04135b26c591181f854d4.jpg" class="slikaa" alt="">
        <p class="naslovv"> <b> Appetizers <b></p>
      </div>
    </div>
  </div>
</div>
</a>

<div class="apsclass"></div>
<div class="container text-center">
  <a href="glavnajela.php" class="food">
  <div class="menii"> 
    <div class="row">
      <div class="col">
        <img src="img/25473-the-perfect-basic-burger-DDMFS-4x3-56eaba3833fd4a26a82755bcd0be0c54.jpg" class="slikaa" alt="">
        <p class="naslovv"> <b> Main dishes <b></p>
      </div>
    </div>
  </div>
</div>
</a>
  
<div class="apsclass"></div>
<div class="container text-center">
  <a href="pica.php" class="food">
  <div class="menii">
    <div class="row">
      <div class="col">
        <img src="img/pexels-photomix-company-96974.jpg" class="slikaa" alt="">
        <p class="naslovv"> <b> Drinks <b></p>
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
        <p> <a class="footer-brand" href="index.php"><img class="navslikaa" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
        <br> <br>
        <a class="kon" target="_blank" href="https://maps.app.goo.gl/jBWd4Kxz4QDXiCZr9"> <b>123 Main Street, New York</b> </a>
        <br>
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">578-444</b> </a></p>
        <br>
        <a class="kon" target="_blank" href="https://maps.app.goo.gl/qMntydyRixXXWLrs5"> <b>456 Elm Street, New York</b> </a>
        <br> 
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">293-332</b> </a></p>
      </div>
      <div class="col-sm">
        <p class="foonas"> <b>WORKING TIME</b></p>
        <br><br>
        <p class="kon"><b>Monday - Friday :</b>  <br> <b>09:00h - 23:00h</b> </p>
        <br>
        <p class="kon"> <b>Saturday - Sunday:</b>  <br> <b>12:00h - 00:00h</b></p>
        <hr>
        <a target="_blank" href="https://www.facebook.com/?locale=sr_RS"><div class="drumreze"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://www.instagram.com/"><div  class="drumreze"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://twitter.com/?lang=sr"><div target="_blank" class="drumreze"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></div></a>
      </div> 
    </div>
  </div>
</footer>   

<!-- END footer -->

</body>

<!-- END body -->

</html>
<script type="text/javascript" src="js/time.js"></script> 
