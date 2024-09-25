<?php
// Collecting form data and insert into PHP variable
$first_name=filter_input(INPUT_POST, 'first_name');
$second_name=filter_input(INPUT_POST, 'second_name');
$email=filter_input(INPUT_POST, 'email');
$username=filter_input(INPUT_POST, 'username');
$password=filter_input(INPUT_POST, 'password');
$age=filter_input(INPUT_POST, 'age');

include_once("connection.php");       //connection to the DB

//insert into database if everything is set
if(null==!($first_name && $second_name && $email && $username && $password && $age)){
  $query= "INSERT INTO users (first_name, second_name, email, username, psw, age) VALUES ('$first_name', '$second_name', '$email', '$username', '$password', '$age')"; 
  mysqli_query($connection, $query);
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
    <a class="navbar-brand" href="index.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Gea logo"></a>
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

<div class="form">
  <h2 class="heading"><i> <b>Sign Up</b></i></h2> <br><br>
  <div id="danger" class="alert alert-danger" role="alert" style="display:none">
    <p id="alert_text">Unsuccessful registration, you must fill in all fields.</p>
  </div>
  <div id="success" class="alert alert-success" role="alert" style="display:none">
    <p id="alert_text">Successful registration</p>
  </div>
  <form id="myForm" action="sign-up.php" method="post" enctype='multipart/form-data'>
    <input type="text" placeholder="First Name" name="first_name" id="first_name"> <br> 
    <input type="text"  placeholder="Last Name" name="second_name" id="second_name" > <br>
    <input type="email" placeholder="E-mail"  name="email" id="email"> <br>
    <input type="text" placeholder="Username"  name="username" id="username"> <br>
    <input type="password" placeholder="Password"  name="password" id="password"> <br>
    <input type="number" placeholder="Age" name="age" min=1 id="age" > <br>
    <br><br>
    <input  class="button" type="button" value="Sign Up" onclick="validation()">
  </form>
</div>

<!-- END Form -->

<!-- BEGIN Footer -->

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

<!-- END Footer -->

</body>

<!-- END body -->

</html>

<script type="text/javascript" src="js/time.js"></script> 

<script>
function validation(){
    // Validation of the form , checkin that everything is right
      //Getting the values from form
      first_name=document.getElementById("first_name").value;
      second_name=document.getElementById("second_name").value;
      email=document.getElementById("email").value;
      username=document.getElementById("username").value;
      password=document.getElementById("password").value;
      age=document.getElementById("age").value;
     
    //checking that every field is filled
    if(first_name==='' || first_name===null || second_name==='' || second_name===null || email==='' || email===null || username==='' || username===null || password==='' || password===null || age==='' || age===null){
      alert("Unsuccessful registration, you must fill in all fields");
      document.getElementById("danger").style.display="block"; 
      document.getElementById("success").style.display="none";
    }
    else{
      alert("Successful registration");
      document.getElementById("success").style.display="block";
      document.getElementById("danger").style.display="none"; 

       // sending data to the server by Ajax
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

    
    if(first_name==='' || first_name===null){
        document.getElementById("first_name").style.border="3px solid red"
    }
    else{
      document.getElementById("first_name").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }
    if(second_name==='' || second_name===null){
        document.getElementById("second_name").style.border="3px solid red"
    }
    else{
      document.getElementById("second_name").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }
    if(email==='' || email===null){
        document.getElementById("email").style.border="3px solid red"
    }
    else{
      document.getElementById("email").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }
    if(username==='' || username===null){
        document.getElementById("username").style.border="3px solid red"
    }
    else{
      document.getElementById("username").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }
    if(password==='' || password===null){
        document.getElementById("password").style.border="3px solid red"
    }
    else{
      document.getElementById("password").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }
    if(age==='' || age===null){
        document.getElementById("age").style.border="3px solid red"
    }
    else{
      document.getElementById("age").style.border="1px solid rgba(255, 106, 0, 0.865)"
    }


   //
  }

</script>







