<?php
// if user is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['korisnik'])){
  header("Location: login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/pocetna.css?v=<?php echo time();?>">
    <title>Restoran Gea- Početna</title>
</head>
<body>
  
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
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme">  </h6>
  </div>
</nav>


<div class="apsclass"></div>
<div class="container text-center">
  <a href="predjela.php">
  <div class="menii">
    <p class="naslovv"> <b> Predjela <b></p>
  <div class="row">
    <div class="col">
      <img src="img/3-Ingredient-Appetizers-38e65f4cf4d04135b26c591181f854d4.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/cold-appetizers-cat.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
    <img src="img/331244_slanirolatshutterstock-1209091720_ff.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/dsc_0275a.jpg" alt="" class="slikaa">
    </div>
  </div>
  
</div>
</div>
</a>

<div class="apsclass"></div>
<div class="container text-center">
  <a href="glavnajela.php">
  <div class="menii">
    <p class="naslovv"> <b> Glavna jela <b></p> 
<div class="row">
    <div class="col">
      <img src="img/25473-the-perfect-basic-burger-DDMFS-4x3-56eaba3833fd4a26a82755bcd0be0c54.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/umk8i7ko_pasta_625x300_01_April_21.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
    <img src="img/default-pasta.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/FRESH_PA_i1140.jpg" alt="" class="slikaa">
    </div>
  </div>
</div>
</div>
</a>
  
  <div class="apsclass"></div>
<div class="container text-center">
  <a href="pica.php">
  <div class="menii">
    <p class="naslovv"> <b> Pića <b></p>
  <div class="row">
    <div class="col">
      <img src="img/pexels-photomix-company-96974.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/TOH-coffee-vs-espresso-GettyImages-1413384122-JVedit.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
    <img src="img/water-quality-banner.jpg" class="slikaa" alt="">
    </div>
    <div class="col">
      <img src="img/What-is-Alcohol-by-Volume-or-ABV.jpg" alt="" class="slikaa">
    </div>
  </div>
  
</div>
</div>
</a>

<footer>
<div class="container text-center">
    <div class="row">
     <div class="col-sm">
     <p> <a class="footer-brand" href="index.php"><img class="navslikaa" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
      <br> <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/BNnrySycdJL8EWss9"> <b>Cara Lazara 1C - Pančevo</b> </a>
      <br>
      <p> <spam class="tel"> <b>TELEFON -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">013/ 111 45 505</b> </a></p>
      <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/s8V43fP77CoKsC1Q9"> <b>Cara Dušana 51 - Beograd</b> </a>
      <br> 
      <p> <spam class="tel"> <b>TELEFON -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">011/ 333 78 901</b> </a></p>
     </div>
      <div class="col-sm">
     <p class="foonas"> <b>RADNO VREME</b></p>
     <br><br>
     <p class="kon"><b>Ponedeljak - Subota :</b>  <br> <b>07:00 - 00:00</b> </p>
     <br>
     <p class="kon"> <b>Nedelja:</b>  <br> <b>16:00 - 00:00</b></p>
     <hr>
    <a target="_blank" href="https://www.facebook.com/?locale=sr_RS"><div class="drumreze"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></div></a> 
    <a target="_blank" href="https://www.instagram.com/"><div  class="drumreze"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></div></a> 
    <a target="_blank" href="https://twitter.com/?lang=sr"><div target="_blank" class="drumreze"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></div></a>
     </div> 
</div>
</footer>  

</body>
</html>
<script type="text/javascript" src="js/time.js"></script> 