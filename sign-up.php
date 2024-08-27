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

<!-- BEGIN head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/sign-up.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <title>Sign Up</title>
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>

<!-- BEGIN cover image -->

  <img class="coverimg" src="img/dish-restaurant-dining-food-wallpaper-min.jpg" alt="cover image"> 

<!-- END cover image -->

<!-- BEGIN Navbar -->

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

<!-- BEGIN Form -->

<div class="forma">
  <h2 class="naslov_forme"><i> <b>Sign Up</b></i></h2> <br><br>
  <div id="uzbuna" class="alert alert-danger" role="alert" style="display:none">
    <p id="alerttekst">Unsuccessful registration, you must fill in all fields.</p>
  </div>
  <div id="uspeh" class="alert alert-success" role="alert" style="display:none">
    <p id="alerttekst">Successful registration</p>
  </div>
  <form id="myForm" action="sign-up.php" method="post" enctype='multipart/form-data'>
    <input class="unos" type="text" placeholder="First Name" name="ime" id="imee" value="<?php echo "$imee"?>"> <br> <input type="text" class="unos" placeholder="Last Name" name="prezime" id="prezimee" value="<?php echo "$prezimee"?>" > <br>
    <input class="unoss" type="email" placeholder="E-mail"  name="email" id="emaill" value="<?php echo "$emaill"?>"> <br>
    <input class="unoss" type="text" placeholder="Username"  name="kor_ime" id="kor_imee" value="<?php echo "$kor_imee"?>" > <br>
    <input class="unoss" type="password" placeholder="Password"  name="lozinka" id="lozinkaa" value="<?php echo "$lozinkaa"?>"> <br>
    <input class="unoss" type="number" placeholder="Age" name="godine" min=1 id="godinee"  value="<?php echo "$godinee"?>"> <br>
    <br><br>
    <input  class="dugme" type="button" value="Sign Up" onclick="validacija()">
  </form>
</div>

<!-- END Form -->

<!-- BEGIN Footer -->

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

<!-- END Footer -->

</body>

<!-- END body -->

</html>

<script type="text/javascript" src="js/time.js"></script> 

<script>
function validacija(){
    // Validation of the form , checkin that everything is right
      imeee=document.getElementById("imee").value;
      prezimeee=document.getElementById("prezimee").value;
      emailll=document.getElementById("emaill").value;
      kor_imeee=document.getElementById("kor_imee").value;
      lozinkaaa=document.getElementById("lozinkaa").value;
      godineee=document.getElementById("godinee").value;
      
    if(imeee==='' || imeee===null || prezimeee==='' || prezimeee===null || emailll==='' || emailll===null || kor_imeee==='' || kor_imeee===null || lozinkaaa==='' || lozinkaaa===null || godineee==='' || godineee===null){
      alert("Unsuccessful registration, you must fill in all fields");
      document.getElementById("uzbuna").style.display="block"; 
      document.getElementById("uspeh").style.display="none";
    }
    else{
      alert("Successful registration");
      document.getElementById("uspeh").style.display="block";
      document.getElementById("uzbuna").style.display="none"; 
    }
  
  // other part PHP is checking
   
    var formData = new FormData(document.getElementById('myForm'));
      $.ajax({
          type: 'POST',
          url: 'sign-up.php',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
              // Handle the server response here
              console.log(response);
          }
      });
  
  }

</script>







