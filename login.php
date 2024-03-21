<?php
    // getting username and password into PHP variable

    $kori_ime=filter_input(INPUT_POST, 'kor_ime');
    $lozinkaa=filter_input(INPUT_POST, 'lozinka');

    $kori_ime_admin=filter_input(INPUT_POST, 'kor_ime_admin');
    $lozinka_admin=filter_input(INPUT_POST, 'lozinka_admin');

    include_once("connection.php");       //connection to the DB 

    // if enter username and password matches username and password from the database user is logged in
    
 if(null!==($kori_ime && $lozinkaa)){
    $upit= "SELECT * FROM users WHERE korisnicko_ime= '$kori_ime' and lozinka='$lozinkaa'";
    $rezultat= mysqli_query($konekcija, $upit);
    $korisnik= mysqli_fetch_array($rezultat, MYSQLI_ASSOC);
    if($korisnik){
      session_start();
      $_SESSION['korisnik'] = "yes";
      header("Location: pocetna.php");
      die();
    }
 }


 if(null!==($kori_ime_admin && $lozinka_admin)){
  $upitt= "SELECT * FROM adminn WHERE korisnicko_ime= '$kori_ime_admin' and lozinka='$lozinka_admin'";
  $rezultatt= mysqli_query($konekcija, $upitt);
  $admin= mysqli_fetch_array($rezultatt, MYSQLI_ASSOC);
  if($admin){
    session_start();
    $_SESSION['admin'] = "yes";
    header("Location: admin.php");
    die();
  }
}


?>
<!DOCTYPE html>
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
    <title>Prijava</title>
</head>
<body>  

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <img class="navslika" src="img/pngtree-food-logo-png-image_5687686.png" alt=""><b><i>RESTORAN GEA</b></i>  </a>
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

<img src="img/dish-restaurant-dining-food-wallpaper.jpg" alt="">

    <div class="forma">

<h2 class="naslov_forme"> <b>Prijavite se ovde</b></h2> <br><br>


<form action="login.php" id="Iform" method="post">
<input type="text" placeholder="Korisnicko ime" class="unos" name="kor_ime" id="username"> <br><br>
<input type="password" placeholder="lozinka" class="unos" name="lozinka" id="password"> <br><br>
 <br><br>
 <input class="dugme" type="submit" value="Prijavi me" name="posalji" > 
 
</form>

</div>

    <div class="forma">
    <h2 class="naslov_forme"> <b>Admin Login</b></h2> <br><br>
<form action="login.php" method="post">

    <input type="text" placeholder="Korisnicko ime" class="unos" name="kor_ime_admin"> <br><br>
    <input type="password" placeholder="lozinka" class="unos" name="lozinka_admin"> <br><br>
    
     <br><br>
     <input class="dugme" type="submit" value="Prijavi me"> 
</form>

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
