<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <title>Restoran Gea</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="navslika" src="img/pngtree-food-logo-png-image_5687686.png" alt=""><b><i>RESTORAN GEA</b></i>  </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
    </button>
      <a class="navbar-navv" href="sign-up.php"> <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>REGISTRACIJA</b></i> </a>
      <a class="navbar-navvv" href="login.php"> <i class="fa-solid fa-user" style="color: #ffffff;"></i> <b><i>PRIJAVA</b></i> </a>
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>POČETNA</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
       <h6 class="vreme">  </h6>
  </div>
</nav>


<div class="dobrodoslica">
    <h1> <b class="prvired"> <i>Dobrodosli na web stranicu restorana Gea!</i> </b>  <br> <b class="drugired"> <i>Najsvezija i najukusnija hrana u regionu</i> </b>  </h1>
</div>

<br>

<div class="container text-center">
  <div class="row">
    <div class="col">
    <div id="carouselExampleCaptions" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/carousel/CH_27.06.18_highres-55-Resized-2.jpg"  height="530px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel/NOTMC_19437_a33b9d01-3e7f-4a66-a923-a4143ee39292.jpg" height="530px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/carousel/3.jpg" height="530px" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
    </div>
  </div>
</div>
<div class="container text-center">
  <div class="row">
<img class="preliv" src="img/orange-color-paint-splash-isolated-on-transparent-background-ai-generative-png.png" alt="">
</div>
</div>


<?php
  // Getting data from the DB  

  include_once("connection.php");       //connection on DB

  $prvakartica= "SELECT * FROM ponuda WHERE id=11";  
  $rezultaprvakartica= mysqli_query($konekcija, $prvakartica);            //1. card
  $rezultaprvakarticaa=mysqli_fetch_assoc($rezultaprvakartica);   /////////////////////////////////////////////////

  $drugakartica= "SELECT * FROM ponuda WHERE id=14";  
  $rezultadrugakartica= mysqli_query($konekcija, $drugakartica);            //1. card
  $rezultadrugakarticaa=mysqli_fetch_assoc($rezultadrugakartica);   /////////////////////////////////////////////////

  $trecakartica= "SELECT * FROM ponuda WHERE id=9";  
  $rezultatrecakartica= mysqli_query($konekcija, $trecakartica);            //1. card
  $rezultatrecakarticaa=mysqli_fetch_assoc($rezultatrecakartica);   /////////////////////////////////////////////////

  $cetvrtakartica= "SELECT * FROM ponuda WHERE id=18";  
  $rezultacetvrtakartica= mysqli_query($konekcija, $cetvrtakartica);            //1. card
  $rezultacetvrtakarticaa=mysqli_fetch_assoc($rezultacetvrtakartica);   /////////////////////////////////////////////////

?>

<div class="kartice">
  <div class="container text-center">
  <div class="row">
    <div class="col-md-3">
    <div class="card" >
  <?php echo " <img src='uploads/"  . $rezultaprvakarticaa['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
    <?php echo "   <h5 class='card-title'>   " . $rezultaprvakarticaa['naziv'] . "    </h5>   "  ?> 
    <?php echo " <p class='card-text'> ". $rezultaprvakarticaa['tekst'] ." <br> " ?>
     <?php
    echo "<h4>Cena:" .  $rezultaprvakarticaa['cena'] . "RSD</h4>   </p>" 
    ?>
    
  </div>
</div>
    </div>
    <div class="col-md-3">
    <div class="card" >
    <?php echo " <img src='uploads/"  . $rezultadrugakarticaa['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultadrugakarticaa['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultadrugakarticaa['tekst'] ." <br> " ?>
 <?php  echo "<h4>Cena:" .  $rezultadrugakarticaa['cena'] . "RSD</h4>   </p>" ?>
    
  </div>
</div>
    </div>
    <div class="col-md-3">
    <div class="card" >
    <?php echo " <img src='uploads/"  . $rezultatrecakarticaa['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultatrecakarticaa['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatrecakarticaa['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatrecakarticaa['cena'] . "RSD</h4>   </p>" ?>
    
  </div>
</div>
    </div>
    <div class="col-md-3">
    <div class="card" >
    <?php echo " <img src='uploads/"  . $rezultacetvrtakarticaa['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultacetvrtakarticaa['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultacetvrtakarticaa['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultacetvrtakarticaa['cena'] . "RSD</h4>   </p>" ?>
    
  </div>
</div>
    </div>
  </div>
</div>
</div>

<div class="burger">
<div class="container text-center">
  <div class="row">
    <div class="col">
      <img class="burger_prez" src="img/menuproduct_burger_cheeseburger.png" alt="">
    </div>
    <div class="col">
      <h2 class="burger_naslov"> <b>Burger</b> </h2>
      <p class="tekst">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla in quis consectetur itaque et alias veritatis cum atque dolor voluptates voluptatibus labore tempora nam repellendus ex, neque vero ratione ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam similique pariatur tempora itaque, ea cumque voluptates omnis voluptate, sunt quasi obcaecati repellendus perferendis quos facilis nisi mollitia tempore quaerat ducimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta iure unde dolore, reprehenderit voluptate maxime totam dolor dignissimos rerum quam tempora eos necessitatibus ipsa, aspernatur perspiciatis facere natus. Ea, alias?</p>
    </div>
  </div>
</div>
</div>

<div class="pasta">
  <div class="container text-center">
  <div class="row">
    <div class="col">
      <h2 class="burger_naslov2"> <b>Pasta</b> </h2>
      <p class="tekst2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla in quis consectetur itaque et alias veritatis cum atque dolor voluptates voluptatibus labore tempora nam repellendus ex, neque vero ratione ipsum. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Aperiam similique pariatur tempora itaque, ea cumque voluptates omnis voluptate, sunt quasi obcaecati repellendus perferendis quos facilis nisi mollitia tempore quaerat ducimus? Lorem ipsum dolor sit amet consectetur, adipisicing elit. Soluta iure unde dolore, reprehenderit voluptate maxime totam dolor dignissimos rerum quam tempora eos necessitatibus ipsa, aspernatur perspiciatis facere natus. Ea, alias?</p>
    </div>
    <div class="col">
      <img class="burger_prez2" src="img/pngimg.com - pasta_PNG102.png" alt="">
    </div>
  </div>
</div>
</div>

<footer>
  <div class="container text-center">
    <div class="row">
     <div class="col">
     <p> <a class="footer-brand" href="#"><img class="navslika" src="img/pngtree-food-logo-png-image_5687686.png" alt=""><b><i>Restoran Gea</b></i>  </a> </p>
      <br> <br><br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/BNnrySycdJL8EWss9"> <b>Cara Lazara 1C - Pančevo</b> </a>
      <br> <br>
      <p> <spam class="tel"> <b>TELEFON -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">013/ 111 45 505</b> </a></p>
      <br><br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/s8V43fP77CoKsC1Q9"> <b>Cara Dušana 51 - Beograd</b> </a>
      <br> <br>
      <p> <spam class="tel"> <b>TELEFON -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">011/ 333 78 901</b> </a></p>
      <i class="fa-regular fa-copyright" style="color: #ffffff;"></i> <i class="autor">Sva prava su zadržana. Aleksandar Simić 2023</i>
      
     </div>
      <div class="col">
     <p class="foonas"> <b>RADNO VREME</b></p>
     <br><br><br><br><br>
     <p class="kon"><b>Ponedeljak - Subota :</b>  <br> <b>07:00 - 00:00</b> </p>
     <br> 
     <p class="kon"> <b>Nedelja:</b>  <br> <b>16:00 - 00:00</b></p>
     
       <div class="drumrezee">
    <a target="_blank" href="https://www.facebook.com/?locale=sr_RS"><div class="drumreze"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></div></a> 
    <a target="_blank" href="https://www.instagram.com/"><div  class="drumreze"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></div></a> 
    <a target="_blank" href="https://twitter.com/?lang=sr"><div target="_blank" class="drumreze"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></div></a> 
     </div>
     </div>

 <div class="container text-center">
    <div class="row">
     <div class="col">
    <hr class="footerlinija">
    </div>
    </div>
   </div>
</footer>  

</body>


</html>

<script type="text/javascript" src="js/time.js"></script> 