<?php
// if admin is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  die();
}


include_once("connection.php");       //connection to the DB 

if (isset($_POST['izbrisi'])) {
    // Check if the 'izbrisi' button is clicked, then deleting the user
    $idToDelete = $_POST['idToDelete'];
    $deleteQuery = "DELETE FROM users WHERE id = $idToDelete";
    mysqli_query($konekcija, $deleteQuery);
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
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time();?>">
    <title>Restoran Gea Admin</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-navv" href="naruceno.php"> <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>NARUČENO</b></i> </a>
      <a class="navbar-navvvv" href="admin.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>KORISNICI</b></i> </a>
      <form action="logout.php">
      <button type="submit" class="logout" value="Odjavi se" >Odjavi se</button>
</form>
<h6 class="vreme">  </h6>
  </div>
</nav>


<h1 class="naslov_forme"><b> <i>Korisnici</i> </b></h1> <br><br>


<div class="container text-center">
    <div class="row">
     <div class="col">
<table class="table">
  <th>Id</th>
  <th>Ime</th>
  <th>Prezime</th>
  <th>E-mail</th>
  <th>Korisničko ime</th>
  <th>Lozinka</th>
  <th>Godine</th>
  <th>Vreme</th>
  <th>Izbriši</th>

<?php


include_once("connection.php");       //connection to the DB
  
//writing the users from DB into table 

  $upitt="SELECT * FROM users";
  $rezultat = mysqli_query($konekcija, $upitt);

while($red=mysqli_fetch_assoc($rezultat)){
echo "
<tbody>
  <tr>
  <th> ".  $red["id"]  . "</th>
  <th>".  $red["ime"]  . "</th>
  <th>".  $red["prezime"]  . "</th>
  <th>".  $red["email"]  . "</th>
  <th>".  $red["korisnicko_ime"]  . "</th>
  <th>".  $red["lozinka"]  . "</th>
  <th>".  $red["godine"]  . "</th>
  <th>".  $red["vreme"]  . "</th>
  
<form action='admin.php' method='post'>
<input type='hidden' name='idToDelete' value='" . $red["id"] . "'>
  <th> <input type='submit' name='izbrisi' class='brisanje' value='Izbriši'></th>
</form>
  </tr>
</tbody>
" ;

}
?>
</table>
</div>
</div>
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
<script>

  // Alert if 'izbrisi' button is clicked 
function izbrisi(){
   alert("Korisnik je izbrisan");
}
</script>

<script type="text/javascript" src="js/time.js"></script> 
