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
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Restoran Gea</title>
</head>
<body>
  
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt="Logo Restaurant Gea"> </a>
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
                    <a class="nav-link" href="sign-up.php"><i class="fa-solid fa-user-plus"
                            style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Sign Up</i></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.php"><i class="fa-solid fa-user"
                            style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Login</i></b></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php"><i class="fa-solid fa-house"
                            style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
                </li>
                <hr class="hamline">
            </ul>
            
        </div>
  </div>

</nav>


<div class="caros">

<div class="container text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
  <div class="row">
    <div class="col-sm">
    <div id="carouselExampleCaptions" class="carousel slide">
  
  <div class="carousel-inner">
    <div class="carousel-item active">

    <div class="row">
    <div class="col-sm-8">
    <img id="carimg" src="img/carousel/dd3d416-326cc8e4-ec52-451f-bcd2-5fba96dea4b3.png" width="530px"  class="d-block w-100" alt="...">
    </div>
    <div class="col-sm">
        <h5 class="text">First slide label</h5>
        <hr class="text">
        <p class="text">Some representative placeholder content for the first slide.</p>
      
    </div>
  </div>

    </div>
    <div class="carousel-item">

    <div class="row">
    <div class="col-sm-8">
    <img id="carimg" src="img/carousel/pngimg.com - breakfast_PNG24.png" width="530px"  class="d-block w-100" alt="image carousel">
    </div>
    <div class="col-sm">
      
    <h5 class="text">Second slide label</h5>
    <hr class="text">
    <p class="text">Some representative placeholder content for the second slide.</p>
    </div>
  </div>

    </div>
    <div class="carousel-item">

    <div class="row">
    <div class="col-sm-8">
    <img id="carimg" src="img/carousel/coffeeand-croissants-breakfast-7g3c924j3r32w7h5.png" width="530px" class="d-block w-100" alt="...">
    </div>
    <div class="col-sm">
    <h5 class="text">Third slide label</h5>
    <hr class="text">
    <p class="text">Some representative placeholder content for the third slide.</p>
    </div>
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

</div>




<div class="container text-center">
  <div class="row justify-content-center"> <!-- Center the column horizontally -->
    <div class="col-12 text-center"> <!-- Center the content inside the column -->
      <img class="preliv" src="img/orange-color-paint-splash-isolated-on-transparent-background-ai-generative-png.png" alt="">
    </div>
  </div>
</div>



<?php
  // Getting data from the DB  

  include_once("connection.php");       //connection on DB

  $prvakartica= "SELECT * FROM ponuda WHERE id=11";  
  $rezultaprvakartica= mysqli_query($konekcija, $prvakartica);            //1. card
  $rezultaprvakarticaa=mysqli_fetch_assoc($rezultaprvakartica);   /////////////////////////////////////////////////

  $drugakartica= "SELECT * FROM ponuda WHERE id=14";  
  $rezultadrugakartica= mysqli_query($konekcija, $drugakartica);            //2. card
  $rezultadrugakarticaa=mysqli_fetch_assoc($rezultadrugakartica);   /////////////////////////////////////////////////

  $trecakartica= "SELECT * FROM ponuda WHERE id=9";  
  $rezultatrecakartica= mysqli_query($konekcija, $trecakartica);            //3. card
  $rezultatrecakarticaa=mysqli_fetch_assoc($rezultatrecakartica);   /////////////////////////////////////////////////

  $cetvrtakartica= "SELECT * FROM ponuda WHERE id=18";  
  $rezultacetvrtakartica= mysqli_query($konekcija, $cetvrtakartica);            //4. card
  $rezultacetvrtakarticaa=mysqli_fetch_assoc($rezultacetvrtakartica);   /////////////////////////////////////////////////

?>

<div class="kartice">
  <h3 class="headingprod" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">Most Popular</h3>
  <div class="container text-center">
  <div class="row" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
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

<div class="burger" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
<div class="container text-center">
  <div class="row">
    <div class="col-md-6">
      <img class="burger_prez" src="img/menuproduct_burger_cheeseburger.png" alt="">
    </div>
    <div class="col-md-6">
      <h2 class="burger_naslov"> <b>Burger</b> </h2>
      <p class="tekst">Join us today and discover why our burgers have become a local favorite. Whether you're dining in with friends, grabbing a quick bite on the go, or ordering for delivery, [Your Restaurant Name] guarantees a burger experience like no other. Visit us at [Your Address] or order online for convenient pickup or delivery. Taste the difference quality makes—bite into perfection with every burger at [Your Restaurant Name].</p>
    </div>
  </div>
</div>
</div>

<div class="pasta" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
  <div class="container text-center">
  <div class="row">
    <div class="col-md-6">
      <h2 class="burger_naslov2"> <b>Pasta</b> </h2>
      <p class="tekst2">At [Restaurant Name], we believe in the art of pasta-making, blending traditional techniques with innovative twists. Whether you're craving a comforting plate of handmade Tagliatelle or a vibrant seafood Spaghetti, our menu promises a delightful journey through Italian cuisine. Visit us to savor pasta perfection in [City], where every meal is a celebration of taste and quality.</p>
    </div>
    <div class="col-md-6">
      <img class="burger_prez2" src="img/pngimg.com - pasta_PNG102.png" alt="">
    </div>
  </div>
</div>
</div>

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


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


</body>


</html>

<script type="text/javascript" src="js/time.js"></script> 
<script>
  // Wait for the document to load before running the script
  document.addEventListener('DOMContentLoaded', function() {
    // Find the carousel element
    var carousel = document.getElementById('carouselExampleCaptions');

    // Initialize an index to track the current slide
    var slideIndex = 0;

    // Function to advance to the next slide
    function nextSlide() {
      // Get all carousel control buttons
      var carouselButtons = carousel.querySelectorAll('.carousel-control-next');

      // Trigger click event on the next button
      carouselButtons.forEach(function(button) {
        button.click();
      });

      // Increment the slide index
      slideIndex++;

      // Reset slide index to 0 when it reaches the last slide
      if (slideIndex >= carouselButtons.length) {
        slideIndex = 0;
      }
    }

    // Automatically advance the carousel every 10 seconds
    var carouselInterval = setInterval(nextSlide, 7000); // 10 seconds in milliseconds

   
  });
</script>


