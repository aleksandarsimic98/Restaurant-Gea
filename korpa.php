<?php
// if 'korisnik' is not logged in can't access to this page 

include_once("connection.php");       //connection to the DB
// getting form data



$imeiprezimee=filter_input(INPUT_POST, 'imeipre');
$adresaa=filter_input(INPUT_POST, 'adresa');
$gradd=filter_input(INPUT_POST, 'grad');
$postaa=filter_input(INPUT_POST, 'posta');
$emaill=filter_input(INPUT_POST, 'email');
$telefonn=filter_input(INPUT_POST, 'telefon');



// getting product data

$data = json_decode(file_get_contents("php://input"), true);
if($data){
$nazivprvii = $data['nazivprvii'];
$cenaprvii = $data['cenaprvii'];
$kolicina =$data['kolicina'];
$totalno=$data['totalno'];
}


if($data){
$nazivprvii = $konekcija->real_escape_string($nazivprvii);
$cenaprvii = $konekcija->real_escape_string($cenaprvii);
$kolicina = $konekcija->real_escape_string($kolicina);
$totalno = $konekcija->real_escape_string($totalno);
}
// if form data exists, insert form data into DB

if(null==!($imeiprezimee && $adresaa && $gradd && $postaa && $emaill && $telefonn)){
  $upit= "INSERT INTO porudzbina_info (ime_prezime, adresa, grad, posta, email, telefon) VALUES ('$imeiprezimee', '$adresaa', '$gradd', '$postaa', '$emaill', '$telefonn')"; 
   mysqli_query($konekcija, $upit);
   header ("Location: korpa.php", true, 303); 
}

  //insert total cost into DB

 


  if(!empty($_POST) && $totalno==!null){
    $upitt= "INSERT INTO ukupno (ukupan_racun) VALUE ('$totalno')"; 
    mysqli_query($konekcija, $upitt);
  }


  $result = $konekcija->query("SELECT MAX(id) AS maxOrderId FROM porudzbina_info");
  if ($result) {
      $row = $result->fetch_assoc();
      $maxOrderId = $row['maxOrderId'];
      // Use $maxOrderId as needed
  } else {
      // Handle query error
      echo "Query Error: " . $konekcija->error;
  }

   // Insert product data (multiple products with a same id) into DB
  if($data){
      
  if(null==!$nazivprvii && !empty($_POST)){

    $sql = "INSERT INTO porudzbina_stavkee (id, naziv, kolicina, cena) VALUES ('$maxOrderId','$nazivprvii', '$kolicina', '$cenaprvii')";
    $stmt=mysqli_prepare($konekcija,$sql);
  if ($konekcija->query($sql) === TRUE) {
      echo "Data stored successfully";
      } else {
   //  echo "Error: " . $sql . "<br>" . $konekcija->error;
  }
  }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/korpa.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
    <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
    
    <title>Korpa</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="pocetna.php"><img class="navslika" src="img/0NqJfO-LogoMakr.png" alt=""></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <form action="logout.php">
      <button type="submit" class="logout" value="Logout">Logout</button>
</form>
      <a class="navbar-navvvv" href="pocetna.php" id="home"> <i class="fa-solid fa-house"  style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
      <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
      <h6 class="vreme">  </h6>
      <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
              <li class="nav-item">
                    <a class="nav-link" href="pocetna.php"><i class="fa-solid fa-house"
                            style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
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

<img class="coverimg" src="img/dish-restaurant-dining-food-wallpaper.jpg" alt="Background image">

<h2 class="naslov_forme"> <b>Checkout</b></h2> <br><br>

<div class="forma1">

      <form id="narucilac" action="korpa.php" method="post" enctype='multipart/form-data'>
            <input type="text" placeholder="First Name and Last Name" name="imeipre"  id="ime_prezime" class="kupacinfo" > <br> 
            <input type="text" placeholder="Address" name="adresa"  id="adresa" class="kupacinfo"> <br>
            <input type="text" placeholder="City" name="grad"  id="grad" class="kupacinfo"> <br>
            <input type="text" placeholder="Post No" name="posta"  id="posta" class="kupacinfo"> <br>
            <input type="email" placeholder="E-mail"  name="email" id="imejl" class="kupacinfo"> <br>
            <input type="text" placeholder="Phone" name="telefon"  id="telefon" class="kupacinfo">
            <br><br>
            <input type="button" name="submit" id="submit"  class="dugme"  value="Order" onclick="posalji()">
    </form>
</div>
 <div class="vertikalna_linija"></div>

<div class="naruceno">
    <table class="table" id="stablo">
     <tr>
      <td>Product Name</td>
      <td>Quan.</td>
      <td>Price</td>
      <td>Remove</td>
     </tr>
    </table>
   <div class="countbackg"> <h5><b id="ukupno"> Count: <b id="ukupnoo"></b> </b>  </h5></div>
    </div>


<footer>
<div class="container text-center">
    <div class="row">
     <div class="col-sm">
     <p> <a class="footer-brand" href="index.php"><img class="navslikaa" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a> </p>
      <br> <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/BNnrySycdJL8EWss9"> <b>Freedom boulevard 42 - Belgrade</b> </a>
      <br>
      <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">011/578-444</b> </a></p>
      <br>
      <a class="kon" target="_blank" href="https://maps.app.goo.gl/s8V43fP77CoKsC1Q9"> <b>George Washington St. 112 - Belgrade</b> </a>
      <br> 
      <p> <spam class="tel"> <b>PHONE -</b> </spam>  <a href="tel:+4733378901"> <b class="kon">011/293-332</b> </a></p>
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
</footer> 

</body>
</html>
<script>
 
        var ukupno = 0;

        // Helper function to update the total sum
        var ukupno = 0;
// Helper function to update the total sum
function updateTotal() {
    cenaa=parseFloat();
    var total = 0;
    var rezultatElements = document.querySelectorAll(".rezultat");
    rezultatElements.forEach(function(element) {
        total += parseFloat(element.textContent);
      
    });
    document.getElementById("ukupno").textContent = "Count: " + total + " USD"; 
    
       return total;
     localStorage.setItem('totall', total);
}

        // Function to create a new row for an item
        function createItemRow(identifier,naziv, cena, prvi, drugi) {

            var red = document.createElement("tr");
            var roditelj = document.getElementById("stablo");
            roditelj.appendChild(red);

            var nazivTd = document.createElement("td");
            nazivTd.textContent = naziv;
            red.appendChild(nazivTd);

            var inputTd = document.createElement("td");
            red.appendChild(inputTd);

            var input = document.createElement('input');
            input.type = "number";
            input.min = 1;
            input.size = 3;
            input.value=1;
            input.classList.add("broj");
            input.id = identifier;
            var sessionData = {};
            input.onchange = function() {
                var x = input.valueAsNumber;
                var stavkaCena = parseFloat(cena);
                var stavkaVrednost = stavkaCena * x;
                rezultatTd.textContent = stavkaVrednost;
                updateTotal();
                sessionData['kolicina' + input.id] = x;
                var totalno= updateTotal();
                localStorage.setItem('totall', totalno);
                
            };
            
            inputTd.appendChild(input);

            var rezultatTd = document.createElement('td');
            rezultatTd.classList.add("rezultat");
            rezultatTd.textContent = cena + ' ' + 'USD'; // Initial value
            red.appendChild(rezultatTd);

            var dugmeTd = document.createElement('td');
            red.appendChild(dugmeTd);

            var dugme = document.createElement('button');
            dugme.textContent = "Remove";
            dugme.classList.add("ukloni");
            dugme.onclick = function() {
                roditelj.removeChild(red);
                updateTotal();
                
                localStorage.removeItem(prvi);
                localStorage.removeItem(drugi);
            };
          
            dugmeTd.appendChild(dugme);

           //////////////////////////////////////////////////////////////////////////////
           var dugmee=document.getElementById('submit');
           dugmee.addEventListener('click', function() {
           var nazivprvii = naziv;
           var cenaprvii= cena; 
           var kolicina = sessionData['kolicina' + input.id] || 1;
          
          // Create a new XMLHttpRequest object
          
          var xhr = new XMLHttpRequest();

          // Specify the PHP file that will handle the data
          var phpFile = 'korpa.php';

          // Set up the POST request with the data

          var data = JSON.stringify({ nazivprvii: nazivprvii, cenaprvii: cenaprvii, kolicina: kolicina});
          xhr.open('POST', phpFile, true);
          xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

          // Define a callback function to handle the response from the server
          xhr.onreadystatechange = function() {
          if (xhr.readyState == 4 && xhr.status == 200) {
        // Response from the server (if any)
         console.log(xhr.responseText);
         localStorage.clear();
         
    }
};
         
          // Send the request to the server
          
           xhr.send(data);
       
});
          
   //   localStorage.removeItem('kolicina'+ input.id);
      
  }        
          
  function posalji(){
    // Checking if is everything set for submit / validation
  var ime_prezime=document.getElementById("ime_prezime").value;
  var adresa=document.getElementById("adresa").value;
  var grad=document.getElementById("grad").value;
  var posta=document.getElementById("posta").value;
  var imejl=document.getElementById("imejl").value;
  var telefon=document.getElementById("telefon").value;
  var ukupno=updateTotal();
  
  if(ime_prezime=='' || ime_prezime==null && adresa=='' || adresa==null && grad=='' || grad==null && posta=='' || posta==null && imejl=='' || imejl==null && telefon=='' || telefon==null){
    alert("You haven't filled in all the fields.");
    exit();
  }
  if(ukupno=='' || ukupno==null){
    alert("You haven't selected any products jet.");
    exit();
  }
  
  if(ime_prezime!=='' || ime_prezime!==null && adresa!=='' || adresa!==null && grad!=='' || grad!==null && posta!=='' || posta!==null && imejl!=='' || imejl!==null && telefon!=='' || telefon!==null && ukupno!=='' || ukupno!==null){
  var val=confirm("Are you sure you want to place the order?");
  if(val===true){
   
       if(null==localStorage.getItem('total')){
              var totalnoo=updateTotal();
             }else{
              var totalno=localStorage.getItem('total');
             }
  
      
          var xhr = new XMLHttpRequest();
  
  // Specify the PHP file that will handle the data
  var phpFile = 'korpa.php';
  
  // Set up the POST request with the data
  var data = JSON.stringify({ totalno: totalnoo});
  
  
  xhr.open('POST', phpFile, true);
  xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  
  // Define a callback function to handle the response from the server
  xhr.onreadystatechange = function() {
  if (xhr.readyState == 4 && xhr.status == 200) {
  // Response from the server (if any)
  console.log(xhr.responseText);
  }
  };
  
  console.log(data);
  
  // Send the request to the server
     xhr.send(data);
  
     

  var formData = new FormData(document.getElementById('narucilac'));
      $.ajax({
          type: 'POST',
          url: 'korpa.php',
          data: formData,
          processData: false,
          contentType: false,
          success: function(response) {
              // Handle the server response here
              console.log(response);
          }
      });
  
    alert("Sent");
    
  }else{
    alert("Not sent");
    exit();
  }
  }
  
  }
    </script>
    
    <script type="text/javascript" src="js/time.js"></script> 
    <script type="text/javascript" src="js/cartrows.js">// Create rows for items</script> 
