<!DOCTYPE html>
<html lang="en">

<!-- BEGIN head -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Experience a culinary journey at Gea, where fresh, locally-sourced ingredients meet innovative flavors in a stylish, welcoming atmosphere. Perfect for an unforgettable dining experience in New York City.">
    <meta name="keywords" content="restaurant, gea, food, drinks, fast food, good service, fresh, traditional">
    <meta name="author" content="Aleksandar Simic">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/normalize.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="css/lightbox.min.css">
    <title>Restaurant Gea</title> 
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>

<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary" loading="lazy">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Logo Restaurant Gea"> </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-navv" href="sign-up.php"> <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>Sign Up</b></i> </a>
      <a class="navbar-navvv" href="login.php"> <i class="fa-solid fa-user" style="color: #ffffff;"></i> <b><i>Login</b></i> </a>
      <a class="navbar-navvvv" href="index.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme"></h6>
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

<!-- BEGIN Carousel -->

<div class="caros_background" loading="lazy">
  <div class="container text-center" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
    <div class="row">
      <div class="col-sm">
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-8">
                    <img id="carimg" src="img/carousel/dd3d416-326cc8e4-ec52-451f-bcd2-5fba96dea4b3-short.png" width="530px"  class="d-block w-100" alt="Carousel image">
                </div>
                <div class="col-sm">
                  <h5 class="carousel_text">Fast Food</h5>
                  <hr class="carousel_text">
                  <p class="carousel_text">From 5 USD</p>
                </div>
             </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-8">
                  <img id="carimg" src="img/carousel/pngimg.com - breakfast_PNG24-short.png" width="530px"  class="d-block w-100" alt="Carousel image">
                </div>
                 <div class="col-sm">
                   <h5 class="carousel_text">Breakfast</h5>
                   <hr class="carousel_text">
                   <p class="carousel_text">From 7 USD</p>
                  </div>
              </div>
            </div>
            <div class="carousel-item">
              <div class="row">
                <div class="col-sm-8">
                  <img id="carimg" src="img/carousel/coffeeand-croissants-breakfast-7g3c924j3r32w7h5-short.png" width="530px" class="d-block w-100" alt="Carousel image">
                </div>
                <div class="col-sm">
                  <h5 class="carousel_text">Coffee and Croissants</h5>
                  <hr class="carousel_text">
                  <p class="carousel_text">In Gea Restaurant you can enjoy in delicious Coffee and Croissants</p>
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

<!-- END Carousel -->

<!-- BEGIN Design Image -->

<div class="container text-center" loading="lazy">
  <div class="row justify-content-center">
    <div class="col-12 text-center"> 
      <img class="orange_design" src="img/new-optim.png" alt="Design Image">
    </div>
  </div>
</div>

<!-- END Design Image -->

<?php
  // Getting data from the DB for cards 
  include_once("connection.php");       //connection on DB

  $first_card= "SELECT * FROM products WHERE id=1";  
  $result_first_card= mysqli_query($connection, $first_card);            //1. card info from DB
  $final_first_card=mysqli_fetch_assoc($result_first_card);   /////////////////////////////////////////////////

  $second_card= "SELECT * FROM products WHERE id=14";  
  $result_second_card= mysqli_query($connection, $second_card);            //2. card info from DB
  $final_second_card=mysqli_fetch_assoc($result_second_card);   /////////////////////////////////////////////////

  $third_card= "SELECT * FROM products WHERE id=9";  
  $result_third_card= mysqli_query($connection, $third_card);            //3. card info from DB
  $final_third_card=mysqli_fetch_assoc($result_third_card);   /////////////////////////////////////////////////

  $fourth_card= "SELECT * FROM products WHERE id=18";  
  $result_fourth_card= mysqli_query($connection, $fourth_card);            //4. card info from DB
  $final_fourth_card=mysqli_fetch_assoc($result_fourth_card);   /////////////////////////////////////////////////

?>

<!-- BEGIN Promo Cards -->


    <h3 class="headingprod" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" loading="lazy">Most Popular</h3>
  <div class="container text-center" loading="lazy">
    <div class="row" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
      <div class="col-md">
        <div class="card" >
         <?php echo " <img src='uploads/"  . $final_first_card['image'] ." ' class='card-img-top' alt='Card Img'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " . $final_first_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_first_card['text'] ." <br> " ?>
            <?php echo "<h4>Price:" .  $final_first_card['price'] . "USD</h4>   </p>" ?>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card" >
          <?php echo " <img src='uploads/"  . $final_second_card['image'] ." ' class='card-img-top' alt='Card Img'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " . $final_second_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_second_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_second_card['price'] . "USD</h4>   </p>" ?>
          </div>
        </div>
      </div>
      <div class="col-md">
        <div class="card" >
          <?php echo " <img src='uploads/"  . $final_third_card['image'] ." ' class='card-img-top' alt='Card Img'> " ?>
          <div class="card-body">
            <?php echo "   <h5 class='card-title'>   " . $final_third_card['product'] . "    </h5>   "  ?> 
            <?php echo " <p class='card-text'> ". $final_third_card['text'] ." <br> " ?>
            <?php  echo "<h4>Price:" .  $final_third_card['price'] . "USD</h4>   </p>" ?>
          </div>
        </div>
      </div>
      <div class="col-md">
       <div class="card" >
          <?php echo " <img src='uploads/"  . $final_fourth_card['image'] ." ' class='card-img-top' alt='Card Img'> " ?>
         <div class="card-body">
           <?php echo "   <h5 class='card-title'>   " . $final_fourth_card['product'] . "    </h5>   "  ?> 
           <?php echo " <p class='card-text'> ". $final_fourth_card['text'] ." <br> " ?>
           <?php  echo "<h4>Price:" .  $final_fourth_card['price'] . "USD</h4>   </p>" ?>
          </div>
        </div>
      </div>
    </div>
  </div>


<!-- END Promo Cards -->

<!-- BEGIN Burger Promo -->

<div class="burger_promo" loading="lazy">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6">
        <img class="burger_image" src="img/menuproduct_burger_cheeseburger-short.png" alt="burger img" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
      </div>
      <div class="col-md-6">
        <h2 class="burger_heading" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" > <b>Burger</b> </h2 >
        <p class="burger_text" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">Join us today and discover why our burgers have become a local favorite. Whether you're dining in with friends, grabbing a quick bite on the go, or ordering for delivery, Gea Restaurant guarantees a burger experience like no other. Visit us at 123 Main Street, New York or order online for convenient pickup or delivery. Taste the difference quality makes—bite into perfection with every burger at Gea Restaurant.</p>
      </div>
    </div>
  </div>
</div>

<!-- END Burger Promo -->

<!-- BEGIN About Us -->

<div class="container text-center" loading="lazy">
  <div class="row">
    <div class="col-md">
      <div class="info" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
        <h3 class="infohead">ABOUT US</h3>
          <p class="descr">
            Welcome to Gea, where every dish is a celebration of fresh, locally-sourced ingredients. Experience exceptional dining with our diverse menu, crafted to delight your palate and elevate your culinary adventure.
          </p>
          <h4 class="location">ON TWO LOCATIONS</h4>
          <a target="_blank" href="https://maps.app.goo.gl/jBWd4Kxz4QDXiCZr9">  <h4 class="loc"> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> 123 Main Street, New York </h4> </a>   <br>
          <a href="tel:011578444"><h4 class="pho"> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> 578-444</h4></a>    
          <hr class="line">
          <a target="_blank" href="https://maps.app.goo.gl/qMntydyRixXXWLrs5">  <h4 class="loc"> <i class="fa-solid fa-location-dot" style="color: #ffffff;"></i> 456 Elm Street, New York </h4> </a>   <br>
          <a href="tel:011293332"><h4 class="pho"> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> 293-332</h4></a>          
      </div>
    </div>
    <div class="col-md">
      <div class="picinfo">
        <img class="pic" src="img/pablo-merchan-montes-Orz90t6o0e4-unsplash-short.jpg" alt="picinfo" data-aos="fade-down" data-aos-duration="1500" data-aos-once="true">
      </div>
    </div>
  </div>
</div>

<!-- END About Us -->

<!-- BEGIN Gallery -->

<div class="container section" id="gallery" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true" loading="lazy">
            <div class="title-block">
                <h1 class="section-title">Gallery</h1>
            </div>
            <div id="photo_gallery" class="list1">
                <div class="row loadMore">
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-eliftekkaya-5616132-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img class="galleryphoto" src="img/gallery/pexels-eliftekkaya-5616132-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-wewe-yang-2383099-4566718-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img class="galleryphoto" src="img/gallery/pexels-wewe-yang-2383099-4566718-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-eliftekkaya-5616132-short.jpg" class="block fancybox" data-lightbox="photos" > 
                            <div class="content">
                                <img src="img/gallery/pexels-eliftekkaya-5616132-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-vicky-2317542-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img src="img/gallery/pexels-vicky-2317542-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-wildlittlethingsphoto-3215513-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img src="img/gallery/pexels-wildlittlethingsphoto-3215513-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-markus-winkler-1430818-19802119-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img src="img/gallery/pexels-markus-winkler-1430818-19802119-short-optim-2.jpg" alt="Gallery photo"  loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-farhad-8697543-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img src="img/gallery/pexels-farhad-8697543-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <a href="img/gallery/pexels-khoa-vo-2347168-5192030-short.jpg" class="block fancybox" data-lightbox="photos"> 
                            <div class="content">
                                <img src="img/gallery/pexels-khoa-vo-2347168-5192030-short-optim-2.jpg" alt="Gallery Photo" loading="lazy" fetchpriority="high">
                                <div class="zoom">
                                    <span class="zoom_icon"><i class="fa fa-search-plus"></i></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div> 
            </div>
        </div>

<!-- END Gallery -->

<!-- BEGIN Pasta Promo -->

<div class="pasta_promo" loading="lazy">
  <div class="container text-center">
    <div class="row">
      <div class="col-md-6">
       <h2 class="pasta_heading" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true"> <b>Pasta</b> </h2>
        <p class="pasta_text" data-aos="fade-down" data-aos-duration="1000" data-aos-once="true">At Gea, we believe in the art of pasta-making, blending traditional techniques with innovative twists. Whether you're craving a comforting plate of handmade Tagliatelle or a vibrant seafood Spaghetti, our menu promises a delightful journey through Italian cuisine. Visit us to savor pasta perfection in 456 Elm Street, New York, where every meal is a celebration of taste and quality.</p>
      </div>
      <div class="col-md-6">
        <img class="pasta_image" src="img/pngimg.com - pasta_PNG102-optim.png" alt="Pasta" data-aos="fade-up" data-aos-duration="1500" data-aos-once="true">
      </div>
    </div>
  </div>
</div>

<!-- END Pasta Promo -->

<!-- BEGIN Footer -->

<footer loading="lazy">
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

<!-- END Footer -->

</body>

<!-- END body -->

</html>


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
<script type="text/javascript" src="js/time.js"></script> 
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script src="js/lightbox.min.js"></script>
<script src="js/lightbox-plus-jquery.min.js"></script>
<script>
  AOS.init();
</script>

