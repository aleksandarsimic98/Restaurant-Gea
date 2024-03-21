<?php
// if admin is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  die();
}

include_once("connection.php");       //connection to the DB 

// if button 'poslato' is set delete that row (from DB and also from admin page)

if(isset($_POST['poslato'])){
    $izbrisii=$_POST['userr'];
  //  $izbrisiii=$_POST['stavke'];
    

    $izvrsi="DELETE FROM porudzbina_info WHERE id=$izbrisii";
    mysqli_query( $konekcija,$izvrsi);
   
    $izvrsii="DELETE FROM porudzbina_stavkee WHERE id=$izbrisii";
    mysqli_query( $konekcija,$izvrsii);

    $izvrsiii="DELETE FROM ukupno WHERE id=$izbrisii";
    mysqli_query( $konekcija,$izvrsiii);
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
    <title>Admin Naruceno</title>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="navslika" src="img/pngtree-food-logo-png-image_5687686.png" alt=""><b><i>RESTORAN GEA ADMIN</b></i>  </a>
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


<h1 class="naslov_forme"><b><i>Naručeno</i></b></h1> <br>



<div class="container text-center">
    <div class="row">
     <div class="col">
<table class="table">
  <th>Id</th>
  <th>Ime i prezime</th>
  <th>Adresa</th>
  <th>Grad</th>
  <th>Poštanski broj</th>
  <th>Email</th>
  <th>Telefon</th>
  <th>Vreme naručivanja</th>
  <th>Naručeni proizvodi</th>
  <th>Ukupno</th>
  <th></th>

<?php

include_once("connection.php");       //connection to the DB 

//getting everything from 'porudzbina_info' and 'porudzbina_stavkee' and insert that into html table
//to show details of purchaser and what is ordered

  $upitt="SELECT * FROM porudzbina_info";
  $rezultat = mysqli_query($konekcija, $upitt);
  
while($red=mysqli_fetch_assoc($rezultat)){
echo "
<tbody>

  <tr>
  <td>".  $red["id"]  . "</td>
  <td>".  $red["ime_prezime"]  . "</td>
  <td>".  $red["adresa"]  . "</td>
  <td>".  $red["grad"]  . "</td>
  <td>".  $red["posta"]  . "</td>
  <td>".  $red["email"]  . "</td>
  <td>".  $red["telefon"]  . "</td>
  <td>".  $red["vreme_narucivanja"]  . "</td>

  <td>
    <table class='table'>
        <thead>
          <tr>
              <th scope='col'>Naziv</th>
              <th scope='col'>kolicina</th>
              <th scope='col'>Cena</th>
          </tr>";
          
          $upittt="SELECT * FROM porudzbina_stavkee WHERE id=$red[id]";
          $rezultatt = mysqli_query($konekcija, $upittt);
          while($redd=mysqli_fetch_assoc($rezultatt)){
                echo "
                  <tr>
                    <td>".  $redd["naziv"]  . "</td>
                    <td>". $redd["kolicina"] ."</td>
                    <td>". $redd["cena"] .' ' . 'RSD'."</td>
                    <form action='naruceno.php' method='post'>
                    <input type='hidden' name='stavke' value='". $redd["id"] ."'>    
                    </form>
                  </tr>
                ";
          }  
          
echo"
        </thead>
     </table>
  </td>
";
$ukupno="SELECT * FROM ukupno WHERE id=$red[id]";
$rezultattt = mysqli_query($konekcija, $ukupno);
while($rd=mysqli_fetch_assoc($rezultattt)){ 
echo "

<td>". $rd["ukupan_racun"]   . ' ' . 'RSD'. "</td>
<form action='naruceno.php' method='post'>
   <input type='hidden' name='userr' value='". $red["id"] ."'>   
  <th> <input type='submit' name='poslato' class='brisanje'  value='Poslato'></th>
</form>
  </tr>

</tbody>
" ;
}}
?>
</table>
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
