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
    <link rel="stylesheet" href="css/pocetna.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/predjela.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Glavna jela</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="pocetna.php"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="korpa" href="korpa.php"> <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i> <b><i>KORPA</b></i> </a>
      <form action="logout.php">
      <button type="submit" class="logout" value="Odjavi se">Odjavi se</button>
</form>
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>POČETNA</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme">  </h6>
  </div>
</nav>



<div class="predjelo">
    <img src="img/exquisite-cover.jpg" alt="" class="predjelosl">
    <h1 class="naslovpre"> <b><i> Glavna jela</b></i> </h1>
</div>

<h1 class="naslovpred"> <b> <i> Ovde mozete naručiti Glavno jelo <br> spremljeno samo za Vas</b> </i></h1>

<?php
  
  include_once("connection.php");       //connection to the DB 

  // Getting data from the DB 

  $prvopredjelo= "SELECT * FROM ponuda WHERE id=9";  
  $rezultatprvopredejlo= mysqli_query($konekcija, $prvopredjelo);            //1.card 
  $rezultatprvopredejloo=mysqli_fetch_assoc($rezultatprvopredejlo);   /////////////////////////////////////////////////

  $drugopredjelo= "SELECT * FROM ponuda WHERE id=10";
  $rezultatdrugopredejlo= mysqli_query($konekcija, $drugopredjelo);         //2.card
  $rezultatdrugopredejloo=mysqli_fetch_assoc($rezultatdrugopredejlo);  ////////////////////////////////////////////////

  $trecepredjelo= "SELECT * FROM ponuda WHERE id=11";
  $rezultattrecepredejlo= mysqli_query($konekcija, $trecepredjelo);         //3.card 
  $rezultattrecepredejloo=mysqli_fetch_assoc($rezultattrecepredejlo); ////////////////////////////////////////////////

  $cetvrtopredjelo= "SELECT * FROM ponuda WHERE id=12";
  $rezultatcetvrtopredejlo= mysqli_query($konekcija, $cetvrtopredjelo);    //4.card 
  $rezultatcetvrtopredejloo=mysqli_fetch_assoc($rezultatcetvrtopredejlo);  ////////////////////////////////////////////////

  $petopredjelo= "SELECT * FROM ponuda WHERE id=13";
  $rezultatpetopredejlo= mysqli_query($konekcija, $petopredjelo);          //5.card 
  $rezultatpetopredejloo=mysqli_fetch_assoc($rezultatpetopredejlo); ////////////////////////////////////////////////

  $sestopredjelo= "SELECT * FROM ponuda WHERE id=14";
  $rezultatsestopredejlo= mysqli_query($konekcija, $sestopredjelo);          //6.card 
  $rezultatsestopredejloo=mysqli_fetch_assoc($rezultatsestopredejlo);  ////////////////////////////////////////////////

  $sedmopredjelo= "SELECT * FROM ponuda WHERE id=15";
  $rezultatsedmopredejlo= mysqli_query($konekcija, $sedmopredjelo);          //7.card 
  $rezultatsedmopredejloo=mysqli_fetch_assoc($rezultatsedmopredejlo);  ////////////////////////////////////////////////

  $osmopredjelo= "SELECT * FROM ponuda WHERE id=16";
  $rezultatosmopredejlo= mysqli_query($konekcija, $osmopredjelo);          //8.card 
  $rezultatosmopredejloo=mysqli_fetch_assoc($rezultatosmopredejlo)

?>



<div class="karticepred">
  <div class="container text-center">
  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatprvopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " .  $rezultatprvopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatprvopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatprvopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=prvakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatdrugopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " .  $rezultatdrugopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatdrugopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatdrugopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=drugakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  .  $rezultattrecepredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " .   $rezultattrecepredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ".  $rezultattrecepredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .   $rezultattrecepredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=trecakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatcetvrtopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " .  $rezultatcetvrtopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatcetvrtopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatcetvrtopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=cetvrtakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
  </div>
</div>
</div>

<div class="karticepred">
  <div class="container text-center">
  <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatpetopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultatpetopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatpetopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatpetopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=petakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatsestopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultatsestopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatsestopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatsestopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=sestakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
    <?php echo " <img src='uploads/"  . $rezultatsedmopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " . $rezultatsedmopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatsedmopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatsedmopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=sedmakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
    <div class="col">
    <div class="card">
  < <?php echo " <img src='uploads/"  . $rezultatosmopredejloo['fotografija'] ." ' class='card-img-top' alt='...'> " ?>
  <div class="card-body">
  <?php echo "   <h5 class='card-title'>   " .  $rezultatosmopredejloo['naziv'] . "    </h5>   "  ?> 
  <?php echo " <p class='card-text'> ". $rezultatosmopredejloo['tekst'] ." <br> " ?>
  <?php  echo "<h4>Cena:" .  $rezultatosmopredejloo['cena'] . "RSD</h4>   </p>" ?>
    <a href="#" class="btn btn-primary" onclick=osmakartica()><b>Dodaj u korpu</b></a>
  </div>
</div>
    </div>
  </div>
</div>
</div>


<footer>
  <div class="container text-center">
    <div class="row">
     <div class="col">
     <p> <a class="footer-brand" href="#"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""><b><i>Restoran Gea</b></i>  </a> </p>
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

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>

</body>
</html>
<script>
  //set the locaStorace to transfer the data on different page
function prvakartica(){
    let nazivprvi= "<?php echo $rezultatprvopredejloo['naziv']?>" 
    console.log(nazivprvi);
    localStorage.setItem('nazivprviii', nazivprvi);
    let cenaprvi = "<?php echo $rezultatprvopredejloo['cena']?>" 
    console.log(cenaprvi);
    localStorage.setItem('cenaprviii', cenaprvi);            //1. card
  if (nazivprvi, cenaprvi){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  function drugakartica(){
    let nazivdrugi= "<?php echo $rezultatdrugopredejloo['naziv']?>" 
    console.log(nazivdrugi);
    localStorage.setItem('nazivdrugiii', nazivdrugi);
    let cenadrugi = "<?php echo $rezultatdrugopredejloo['cena']?>" 
    console.log(cenadrugi);
    localStorage.setItem('cenadrugiii', cenadrugi);            //2. card
  if (nazivdrugi, cenadrugi){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  function trecakartica(){
    let nazivtreci= "<?php echo $rezultattrecepredejloo['naziv']?>" 
    console.log(nazivtreci);
    localStorage.setItem('nazivtreciii', nazivtreci);
    let cenatreci = "<?php echo $rezultattrecepredejloo['cena']?>" 
    console.log(cenatreci);
    localStorage.setItem('cenatreciii', cenatreci);            //3. card
  if (nazivtreci, cenatreci){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  function cetvrtakartica(){
    let nazivcetvrti= "<?php echo $rezultatcetvrtopredejloo['naziv']?>" 
    console.log(nazivcetvrti);
    localStorage.setItem('nazivcetvrtiii', nazivcetvrti);
    let cenacetvrti = "<?php echo $rezultatcetvrtopredejloo['cena']?>" 
    console.log(cenacetvrti);
    localStorage.setItem('cenacetvrtiii', cenacetvrti);            //4. card
  if (nazivcetvrti, cenacetvrti){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  
  function petakartica(){
    let nazivpeti= "<?php echo $rezultatpetopredejloo['naziv']?>" 
    console.log(nazivpeti);
    localStorage.setItem('nazivpetiii', nazivpeti);
    let cenapeti = "<?php echo $rezultatpetopredejloo['cena']?>" 
    console.log(cenapeti);
    localStorage.setItem('cenapetiii', cenapeti);            //5. card
  if (nazivpeti, cenapeti){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  function sestakartica(){
    let nazivsesti= "<?php echo $rezultatsestopredejloo['naziv']?>" 
    console.log(nazivsesti);
    localStorage.setItem('nazivsestiii', nazivsesti);
    let cenasesti = "<?php echo $rezultatsestopredejloo['cena']?>" 
    console.log(cenasesti);
    localStorage.setItem('cenasestiii', cenasesti);            //6. card
  if (nazivsesti, cenasesti){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  function sedmakartica(){
    let nazivsedmi= "<?php echo $rezultatsedmopredejloo['naziv']?>" 
    console.log(nazivsedmi);
    localStorage.setItem('nazivsedmiii', nazivsedmi);
    let cenasedmi = "<?php echo $rezultatsedmopredejloo['cena']?>" 
    console.log(cenasedmi);
    localStorage.setItem('cenasedmiii', cenasedmi);            //7. card
  if (nazivsedmi, cenasedmi){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  function osmakartica(){
    let nazivosmi= "<?php echo $rezultatosmopredejloo['naziv']?>" 
    console.log(nazivosmi);
    localStorage.setItem('nazivosmiii', nazivosmi);
    let cenaosmi = "<?php echo $rezultatosmopredejloo['cena']?>" 
    console.log(cenaosmi);
    localStorage.setItem('cenaosmiii', cenaosmi);            //8. card
  if (nazivosmi, cenaosmi){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
  
  
  function osmakarticaa(naziv,cena,localnaziv, localcena){
    let nazivosmi= naziv;
    console.log(nazivosmi);
    localStorage.setItem(localnaziv, nazivosmi);
    let cenaosmi = cena;
    console.log(cenaosmi);
    localStorage.setItem(localcena, cenaosmi);            //8. card
  if (nazivosmi, cenaosmi){
    alert("Proizvod je dodat u korpu!");
  }
  else{
    alert("Proizvod nije dodat u korpu!");
  }
    return false;
  }
  
</script> 
<script type="text/javascript" src="js/time.js"></script> 