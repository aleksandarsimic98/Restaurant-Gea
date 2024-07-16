<?php
// Collecting form data and insert into PHP variable
$imee=filter_input(INPUT_POST, 'ime');
$prezimee=filter_input(INPUT_POST, 'prezime');
$emaill=filter_input(INPUT_POST, 'email');
$kor_imee=filter_input(INPUT_POST, 'kor_ime');
$lozinkaa=filter_input(INPUT_POST, 'lozinka');
$godinee=filter_input(INPUT_POST, 'godine');

include_once("connection.php");       //connection to the DB

//insert into database if everything is set
if(null==!($imee && $prezimee && $emaill && $kor_imee && $lozinkaa && $godinee)){
  $upit= "INSERT INTO users (ime, prezime, email, korisnicko_ime, lozinka, godine) VALUES ('$imee', '$prezimee', '$emaill', '$kor_imee', '$lozinkaa', '$godinee')"; 
  mysqli_query($konekcija, $upit);
  header ("Location: sign-up.php", true, 303);
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
    <link rel="stylesheet" href="css/sign-up.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <title>Registracija</title>
</head>
<body>
<img src="img/dish-restaurant-dining-food-wallpaper-min.jpg" alt=""> 

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      
    </button>
      <a class="navbar-navv" href="sign-up.php"> <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>Sign Up</b></i> </a>
      <a class="navbar-navvv" href="login.php"> <i class="fa-solid fa-user" style="color: #ffffff;"></i> <b><i>Login</b></i> </a>
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme">  </h6>
  </div>
</nav>



<div class="forma">
    <h2 class="naslov_forme"><i> <b>Prijavite se ovde</b></i></h2> <br><br>
    <div id="uzbuna" class="alert alert-danger" role="alert" style="display:none">
    
  <p id="alerttekst">Neuspešno prijavljivanje, morate popuniti sva polja</p>
</div>

<div id="uspeh" class="alert alert-success" role="alert" style="display:none">
    
    <p id="alerttekst">Uspešno prijavljivanje</p>
  </div>

<form id="myForm" action="sign-up.php" method="post" enctype='multipart/form-data'>
    <input class="unos" type="text" placeholder="Unesite Ime" name="ime" id="imee" value="<?php echo "$imee"?>">  <input type="text" class="unos" placeholder="Unesite Prezime" name="prezime" id="prezimee" value="<?php echo "$prezimee"?>" > <br><br>
    <input class="unoss" type="email" placeholder="email"  name="email" id="emaill" value="<?php echo "$emaill"?>"> <br><br>
    <input class="unoss" type="text" placeholder="Korisnicko ime"  name="kor_ime" id="kor_imee" value="<?php echo "$kor_imee"?>" > <br><br>
    <input class="unoss" type="password" placeholder="lozinka"  name="lozinka" id="lozinkaa" value="<?php echo "$lozinkaa"?>"> <br><br>
    <input class="unoss" type="number" placeholder="Godine" name="godine" min=1 id="godinee"  value="<?php echo "$godinee"?>"> <br><br>
     <br><br><br>
    <input  class="dugme" type="button" value="Prijavi me" onclick="validacija()">
</form>


</div>
<footer>
  <div class="container text-center">
    <div class="row">
     <div class="col">
     <p> <a class="footer-brand" href="#"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a> </p>
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


<script type="text/javascript" src="js/signup-validation.js"></script> 
<script type="text/javascript" src="js/time.js"></script> 







