<?php
// if user is not logged in can't access to this page //
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
  die();
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- BEGIN head -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/home_page.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/products.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Drinks</title>
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>
 
<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="home_page.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="cart" href="cart.php"> <i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i> <b><i>Cart</b></i> </a>
    <form action="logout.php">
      <button type="submit" class="logout" value="Logout">Logout</button>
    </form>
    <a class="navbar-navvvv" href="home_page.php" id="home"> <i class="fa-solid fa-house"  style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
    <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
    <h6 class="vreme"></h6>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
        <li class="nav-item">
          <a class="nav-link" href="home_page.php"><i class="fa-solid fa-house"
          style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fa-solid fa-basket-shopping" style="color: #ffffff;"></i>
          <b style="color: #ffffff;"><i>Cart</i></b></a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180" 
          style="color: #ffffff;"></i> <b> Logout</b> </a>
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



<?php
include_once("connection.php");       //connection to the DB
  
$first_card= "SELECT * FROM products WHERE id=17";  
$result_first_card= mysqli_query($connection, $first_card);            //1. card info from DB
$final_first_card=mysqli_fetch_assoc($result_first_card);   /////////////////////////////////////////////////

$second_card= "SELECT * FROM products WHERE id=18";  
$result_second_card= mysqli_query($connection, $second_card);            //2. card info from DB
$final_second_card=mysqli_fetch_assoc($result_second_card);   /////////////////////////////////////////////////

$third_card= "SELECT * FROM products WHERE id=19";  
$result_third_card= mysqli_query($connection, $third_card);            //3. card info from DB
$final_third_card=mysqli_fetch_assoc($result_third_card);   /////////////////////////////////////////////////

$fourth_card= "SELECT * FROM products WHERE id=20";  
$result_fourth_card= mysqli_query($connection, $fourth_card);            //4. card info from DB
$final_fourth_card=mysqli_fetch_assoc($result_fourth_card);   /////////////////////////////////////////////////

$fifth_card= "SELECT * FROM products WHERE id=21";  
$result_fifth_card= mysqli_query($connection, $fifth_card);            //5. card info from DB
$final_fifth_card=mysqli_fetch_assoc($result_fifth_card);   /////////////////////////////////////////////////

$sixth_card= "SELECT * FROM products WHERE id=22";  
$result_sixth_card= mysqli_query($connection, $sixth_card);            //6. card info from DB
$final_sixth_card=mysqli_fetch_assoc($result_sixth_card);   /////////////////////////////////////////////////

$seventh_card= "SELECT * FROM products WHERE id=23";  
$result_seventh_card= mysqli_query($connection, $seventh_card);            //7. card info from DB
$final_seventh_card=mysqli_fetch_assoc($result_seventh_card);   /////////////////////////////////////////////////

$eighth_card= "SELECT * FROM products WHERE id=24";  
$result_eighth_card= mysqli_query($connection, $eighth_card);            //8. card info from DB
$final_eighth_card=mysqli_fetch_assoc($result_eighth_card);   /////////////////////////////////////////////////

?>

<!-- BEGIN Cards -->

<div class="cards_div">
  <div class="container text-center">
    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_first_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .  $final_first_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_first_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_first_card['price'] . "USD</h4>   </p>" ?>
            <a href='#' class='btn btn-primary' onclick=first_card()>  <b>Add to Cart</b> </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_second_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
           <?php echo "   <h5 class='card-title'>   " .  $final_second_card['product'] . "    </h5>   "  ?> 
           <?php echo " <p class='card-text'> ". $final_second_card['text'] ." <br> " ?>
           <?php  echo "<h4>Price:" .  $final_second_card['price'] . "USD</h4>   </p>" ?>
           <a href="#" class="btn btn-primary" onclick=second_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  .  $final_third_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .   $final_third_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ".  $final_third_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .   $final_third_card['price'] . "USD</h4>   </p>" ?>
            <a href="#" class="btn btn-primary " onclick=third_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_fourth_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .  $final_fourth_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_fourth_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_fourth_card['price'] . "USD</h4>   </p>" ?>
            <a href="#" class="btn btn-primary" onclick=fourth_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_fifth_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .  $final_fifth_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_fifth_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_fifth_card['price'] . "USD</h4>   </p>" ?>
            <a href='#' class='btn btn-primary' onclick=fifth_card()>  <b>Add to Cart</b> </a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_sixth_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
           <?php echo "   <h5 class='card-title'>   " .  $final_sixth_card['product'] . "    </h5>   "  ?> 
           <?php echo " <p class='card-text'> ". $final_sixth_card['text'] ." <br> " ?>
           <?php  echo "<h4>Price:" .  $final_sixth_card['price'] . "USD</h4>   </p>" ?>
           <a href="#" class="btn btn-primary" onclick=sixth_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  .  $final_seventh_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .   $final_seventh_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ".  $final_seventh_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .   $final_seventh_card['price'] . "USD</h4>   </p>" ?>
            <a href="#" class="btn btn-primary " onclick=seventh_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php echo " <img src='uploads/"  . $final_eighth_card['image'] ." ' class='card-img-top' alt='drink card image'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " .  $final_eighth_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_eighth_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_eighth_card['price'] . "USD</h4>   </p>" ?>
            <a href="#" class="btn btn-primary" onclick=eighth_card()><b>Add to Cart</b></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- END Cards -->

<!-- BEGIN footer -->

<footer>
  <div class="container text-center">
    <div class="row">
     <div class="col-sm">
        <p> <a class="footer-brand" href="index.php"><img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
        <br> <br>
        <a class="address_and_number" target="_blank" href="https://maps.app.goo.gl/jBWd4Kxz4QDXiCZr9"> <b>123 Main Street, New York</b> </a>
        <br>
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="address_and_number">578-444</b> </a></p>
        <br>
        <a class="address_and_number" target="_blank" href="https://maps.app.goo.gl/qMntydyRixXXWLrs5"> <b>456 Elm Street, New York</b> </a>
        <br> 
        <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="address_and_number">293-332</b> </a></p>
        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2771.1770537226935!2d-73.83348987655775!3d40.762245923609576!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2600f928bb159%3A0x939edd86cd71a6ef!2zMTIzIE1haW4gU3QsIEZsdXNoaW5nLCBOWSAxMTM1NCwg0KHRmNC10LTQuNGa0LXQvdC1INCU0YDQttCw0LLQtQ!5e0!3m2!1ssr!2srs!4v1725635944076!5m2!1ssr!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="col-sm">
        <p class="working_time"> <b>WORKING TIME</b></p>
        <br><br>
        <p class="address_and_number"><b>Monday - Friday :</b>  <br> <b>09:00h - 23:00h</b> </p>
        <br>
        <p class="address_and_number"> <b>Saturday - Sunday:</b>  <br> <b>12:00h - 00:00h</b></p>
        <hr>
        <a target="_blank" href="https://www.facebook.com/?locale=sr_RS"><div class="social_networks"><i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://www.instagram.com/"><div  class="social_networks"><i class="fa-brands fa-instagram" style="color: #ffffff;"></i></div></a> 
        <a target="_blank" href="https://twitter.com/?lang=sr"><div target="_blank" class="social_networks"><i class="fa-brands fa-x-twitter" style="color: #ffffff;"></i></div></a>
      </div> 
    </div>
  </div>
</footer> 

<!-- END footer -->

</body>

<!-- END body -->

</html>

<script>
function first_card(){
  // put the data from DB into local storage to show that info on another page
  let first_card_name= "<?php echo $final_first_card['product']?>" 
  localStorage.setItem('nazivprviiii', first_card_name);
  let first_card_price = "<?php echo $final_first_card['price']?>" 
  localStorage.setItem('cenaprviiii', first_card_price);            //1. card 
if (first_card_name, first_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function second_card(){
  let second_card_name= "<?php echo $final_second_card['product']?>" 
  console.log(second_card_name);
  localStorage.setItem('nazivdrugiiii', second_card_name);
  let second_card_price = "<?php echo $final_second_card['price']?>" 
  localStorage.setItem('cenadrugiiii', second_card_price);            //2. card 
if (second_card_name, second_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function third_card(){
  let third_card_name= "<?php echo $final_third_card['product']?>" 
  localStorage.setItem('nazivtreciiii', third_card_name);
  let third_card_price = "<?php echo $final_third_card['price']?>" 
  localStorage.setItem('cenatreciiii', third_card_price);            //3. card 
if (third_card_name, third_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function fourth_card(){
  let fourth_card_name= "<?php echo $final_fourth_card['product']?>" 
  localStorage.setItem('nazivcetvrtiiii', fourth_card_name);
  let fourth_card_price = "<?php echo $final_first_card['price']?>" 
  localStorage.setItem('cenacetvrtiiii', fourth_card_price);            //4. card 
if (fourth_card_name, fourth_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function fifth_card(){
  let fifth_card_name= "<?php echo $final_fifth_card['product']?>" 
  localStorage.setItem('nazivpetiiii', fifth_card_name);
  let fifth_card_price = "<?php echo $final_fifth_card['price']?>" 
  localStorage.setItem('cenapetiiii', fifth_card_price);            //5. card
if (fifth_card_name, fifth_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function sixth_card(){
  let sixth_card_name= "<?php echo $final_sixth_card['product']?>" 
  localStorage.setItem('nazivsestiiii', sixth_card_name);
  let sixth_card_price = "<?php echo $final_sixth_card['price']?>" 
  localStorage.setItem('cenasestiiii', sixth_card_price);            //6. card 
if (sixth_card_name, sixth_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

function seventh_card(){
  let seventh_card_name= "<?php echo $final_seventh_card['product']?>" 
  localStorage.setItem('nazivsedmiiii', seventh_card_name);
  let seventh_card_price = "<?php echo $final_seventh_card['price']?>" 
  localStorage.setItem('cenasedmiiii', seventh_card_price);            //7. card 
if (seventh_card_name, seventh_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}
function eighth_card(){
  let eighth_card_name= "<?php echo $final_eighth_card['product']?>" 
  localStorage.setItem('nazivosmiiii', eighth_card_name);
  let eighth_card_price = "<?php echo $final_eighth_card['price']?>" 
  localStorage.setItem('cenaosmiiii', eighth_card_price);            //8. card 
if (eighth_card_name, eighth_card_price){
  alert("The product has been added to your cart.");
}
else{
  alert("The product was not added to your cart.");
}
  return false;
}

</script>
<script type="text/javascript" src="js/time.js"></script> 
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>