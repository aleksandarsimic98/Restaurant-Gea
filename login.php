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
    <a class="navbar-brand" href="index.php"> <img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
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

<img class="coverimg" src="img/dish-restaurant-dining-food-wallpaper-min.jpg" alt="">

    <div class="forma">

<h2 class="naslov_forme"> <b>User Login</b></h2> <br><br>


<form action="login.php" id="Iform" method="post">
<input type="text" placeholder="Username" class="unos" name="kor_ime" id="username"> <br>
<input type="password" placeholder="Password" class="unos" name="lozinka" id="password"> <br><br>
 <br>
 <input class="dugme" type="submit" value="Login" name="posalji" > 
 
</form>

</div>

    <div class="forma">
    <h2 class="naslov_forme"> <b>Admin Login</b></h2> <br><br>
<form action="login.php" method="post">

    <input type="text" placeholder="Username" class="unos" name="kor_ime_admin"> <br>
    <input type="password" placeholder="Password" class="unos" name="lozinka_admin"> <br><br>
    
     <br>
     <input class="dugme" type="submit" value="Login"> 
</form>

</div>


<footer>
<div class="container text-center">
    <div class="row">
     <div class="col-sm">
     <p> <a class="footer-brand" href="index.php"><img class="navslikaa" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
      <br> <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/BNnrySycdJL8EWss9"> <b>Cara Lazara 1C - Pančevo</b> </a>
      <br>
      <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">013/ 111 45 505</b> </a></p>
      <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/s8V43fP77CoKsC1Q9"> <b>Cara Dušana 51 - Beograd</b> </a>
      <br> 
      <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">011/ 333 78 901</b> </a></p>
     </div>
      <div class="col-sm">
     <p class="foonas"> <b>WORKING TIME</b></p>
     <br><br>
     <p class="kon"><b>Monday - Friday:</b>  <br> <b>09:00h - 23:00h</b> </p>
     <br>
     <p class="kon"> <b>Saturday - Sunday:</b>  <br> <b>12:00h - 00:00h</b></p>
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
