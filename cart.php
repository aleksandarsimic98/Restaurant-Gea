<?php
// if 'user' is not logged in can't access to this page 

include_once("connection.php");       //connection to the DB //
// getting form data
$first_second_name=filter_input(INPUT_POST, 'first_second_name');
$address=filter_input(INPUT_POST, 'address');
$city=filter_input(INPUT_POST, 'city');
$post_no=filter_input(INPUT_POST, 'post_no');
$email=filter_input(INPUT_POST, 'email');
$phone=filter_input(INPUT_POST, 'phone');

// getting product data
$data = json_decode(file_get_contents("php://input"), true);
if($data){
$product = $data['product'];
$price = $data['price'];
$quantity =$data['quantity'];
$total=$data['total'];
}

if($data){
$product = $connection->real_escape_string($product);
$price = $connection->real_escape_string($price);
$quantity = $connection->real_escape_string($quantity);
$total = $connection->real_escape_string($total);
}
// if form data exists, insert form data into DB
if(null==!($first_second_name && $address && $city && $post_no && $email && $phone)){
  $query_info = "INSERT INTO order_info (first_second_name, address_, city, post_no, email, phone) VALUES (?, ?, ?, ?, ?, ?)";
  $stmt = mysqli_prepare($connection, $query_info);

// Bind parameters
  mysqli_stmt_bind_param($stmt, 'ssssss', $first_second_name, $address, $city, $post_no, $email, $phone);

// Execute the statement
  mysqli_stmt_execute($stmt);

// Close the statement
  mysqli_stmt_close($stmt);
  header ("Location: cart.php", true, 303); 
}
  //insert total cost into DB
  if(!empty($_POST) && $total==!null){
    $query_total= "INSERT INTO total (total_count) VALUE ('$total')"; 
    mysqli_query($connection, $query_total);
  }

  $result = $connection->query("SELECT MAX(id) AS maxOrderId FROM order_info");
  if ($result) {
      $row = $result->fetch_assoc();
      $maxOrderId = $row['maxOrderId'];
      // Use $maxOrderId as needed
  } else {
      // Handle query error
      echo "Query Error: " . $connection->error;
  }

  // Insert product data (multiple products with a same id) into DB
  if($data){
      
  if(null==!$product && !empty($_POST)){
    $sql = "INSERT INTO ordered_products (id, product, quantity, price) VALUES ('$maxOrderId','$product', '$quantity', '$price')";
    $stmt=mysqli_prepare($connection,$sql);
  if ($connection->query($sql) === TRUE) {
      echo "Data stored successfully";
      } else {
   //  echo "Error: " . $sql . "<br>" . $connection->error;
  }
  }
  }
?>
<!DOCTYPE html>
<html lang="en">

<!-- BEGIN head -->

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="css/index.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/cart.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
  <title>Cart</title>
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
    <form action="logout.php">
      <button type="submit" class="logout" value="Logout">Logout</button>
    </form>
    <a class="navbar-navvvv" href="home_page.php" id="home"> <i class="fa-solid fa-house"  style="color: #ffffff;"></i> <b><i>Home</b></i> </a>
    <a class="navbar-navvvvv" href=""> <i class="fa-solid fa-phone" style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i> </a>
    <h6 class="vreme">  </h6>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <img src="img/0NqJfO-LogoMakr.png" alt="Gea Logo" class="logoham">
          <li class="nav-item">
            <a class="nav-link" href="home_page.php"><i class="fa-solid fa-house"
            style="color: #ffffff;"></i> <b style="color: #ffffff;"><i>Home</i></b></a>
          </li>
          <li class="nav-item">
            <a  class="nav-link" href="logout.php"> <i class="fa-solid fa-arrow-right-from-bracket fa-rotate-180" 
            style="color: #ffffff;"></i> <b> Logout</b> </a>
          </li>
          <hr class="hamline">
          <li class="nav-item">
            <a class="tele" href=""> <i class="fa-solid fa-phone" 
            style="color: #ffffff;"></i> <b><i>013/ 111 45 505</b></i></a>
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

<img class="coverimg" src="img/dish-restaurant-dining-food-wallpaper-min.jpg" alt="Background image">

<h2 class="heading"> <b>Checkout</b></h2> <br><br>

<!-- BEGIN user info for order -->

<div class="form">
  <form id="customer" action="korpa.php" method="post" enctype='multipart/form-data'>
    <input type="text" placeholder="First Name and Last Name" name="first_second_name"  id="first_second_name" class="customer_info" > <br> 
    <input type="text" placeholder="Address" name="address"  id="address" class="customer_info"> <br>
    <input type="text" placeholder="City" name="city"  id="city" class="customer_info"> <br>
    <input type="text" placeholder="Post No" name="post_no"  id="post_no" class="customer_info"> <br>
    <input type="email" placeholder="E-mail"  name="email" id="email" class="customer_info"> <br>
    <input type="text" placeholder="Phone" name="phone"  id="phone" class="customer_info">
    <br><br>
    <input type="button" name="submit" id="submit"  class="button"  value="Place Order" onclick="send()">
  </form>
</div>

<!-- END user info for order -->



<!-- BEGIN ordered items -->

<div class="ordered">
  <table class="table" id="tree">
    <tr>
    <td>Product Name</td>
    <td>Quan.</td>
    <td>Price</td>
    <td>Remove</td>
    </tr>
  </table>
  <div class="message"><p id="no_products">No products in the cart</p></div>
  <div class="count_background"> <h5><b id="count"> Count:  <b id="zero_usd">0 USD</b>  </b>  </h5></div>
</div>

<!-- END ordered items -->

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
 
// Helper function to update the total sum
var count = 0;

// function for counting total sum of product prices
function updateTotal() {
    var total = 0;
    var resultElements = document.querySelectorAll(".result");
    resultElements.forEach(function(element) {
    total += parseFloat(element.textContent);
    });
    document.getElementById("count").textContent = "Count: " + total + " USD"; 
    return total;
    localStorage.setItem('totall', total);
    document.getElementById("zero_usd").style.display="none";
}

// Function to create a new row for an item
function createItemRow(identifier, item, item_price, localStorage_product, localStorage_price) {

  var row = document.createElement("tr");
  var parent = document.getElementById("tree");
  parent.appendChild(row);
  var product_Td = document.createElement("td");
  product_Td.textContent = item;
  row.appendChild(product_Td);
  var inputTd = document.createElement("td");
  row.appendChild(inputTd);
  var input = document.createElement('input');
  input.type = "number";
  input.min = 1;
  input.size = 3;
  input.value=1;
  input.classList.add("number");
  input.id = identifier;
  var sessionData = {};
  // on change function to update product quan. and total sum 
  input.onchange = function() {
    var x = input.valueAsNumber;
    var float_price = parseFloat(item_price);
    var multiplied_price = float_price * x;
    resultTd.textContent = multiplied_price + 'USD';
    updateTotal();
    sessionData['quan' + input.id] = x;
    var updated= updateTotal();
    localStorage.setItem('totall', updated); 
  };

  inputTd.appendChild(input);
  var resultTd = document.createElement('td');
  resultTd.classList.add("result");
  resultTd.textContent = item_price + ' ' + 'USD'; // Initial value
  row.appendChild(resultTd);
  var buttonTd = document.createElement('td');
  row.appendChild(buttonTd);
  // Add remove button
  var button = document.createElement('button');
  button.textContent = "Remove";
  button.classList.add("remove");


  // if remove button is clicked, set data to null and remove localStorage for the row
  button.onclick = function() {
    item=null;
    item_price=null;
    parent.removeChild(row);
    localStorage.removeItem(localStorage_product);
    localStorage.removeItem(localStorage_price);
    updateTotal();

    count=updateTotal();
    if(count==0){
      document.getElementById("no_products").style.display="block";
    }
    };
  // appending remove button 
  buttonTd.appendChild(button);
  var submit_button=document.getElementById('submit');
  //if submit button is clicked send data to server side by JSON
  submit_button.addEventListener('click', function() {

  var first_second_name=document.getElementById("first_second_name").value;
  var address=document.getElementById("address").value;
  var city=document.getElementById("city").value;
  var post_no=document.getElementById("post_no").value;
  var email=document.getElementById("email").value;
  var phone=document.getElementById("phone").value;    


  if(first_second_name && address && city && post_no && email && phone){
  var product = item;
  var price= resultTd.textContent; 
  var quantity = sessionData['quan' + input.id] || 1;
  }
  // Create a new XMLHttpRequest object
  var xhr = new XMLHttpRequest();
  // Specify the PHP file that will handle the data
  var phpFile = 'cart.php';
  // Set up the POST request with the data
  var data = JSON.stringify({ product: product, price:price, quantity: quantity});
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

if(item){
  document.getElementById("no_products").style.display="none";
}
else{
  document.getElementById("no_products").style.display="inline";
}
}        

function send(){
// Checking if is everything set for submit / validation
//getting values from form
var first_second_name=document.getElementById("first_second_name").value;
var address=document.getElementById("address").value;
var city=document.getElementById("city").value;
var post_no=document.getElementById("post_no").value;
var email=document.getElementById("email").value;
var phone=document.getElementById("phone").value;
var count=updateTotal();
  //checking that everything si filled in
  if(first_second_name=='' || first_second_name==null || address=='' || address==null || city=='' || city==null || post_no=='' || post_no==null || email=='' || email==null || phone=='' || phone==null){
    alert("You haven't filled in all the fields.");
    exit();
  }
  if(count=='' || count==null){
    alert("You haven't selected any products jet.");
    exit();
  }
  
  //if everything is filled and fine, ask for order confirm
  if(first_second_name!=='' || first_second_name!==null && address!=='' || address!==null && city!=='' || city!==null && post_no!=='' || post_no!==null && email!=='' || email!==null && phone!=='' || phone!==null && count!=='' || count!==null){
    var val=confirm("Are you sure you want to place the order?");
  if(val===true){
    if(null==localStorage.getItem('total')){
      var total=updateTotal();
    }else{
      var total=localStorage.getItem('total');
    }

  var xhr = new XMLHttpRequest();
  // Specify the PHP file that will handle the data
  var phpFile = 'cart.php';
  // Set up the POST request with the data
  var data = JSON.stringify({ total: total});
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
  
  var formData = new FormData(document.getElementById('customer'));
      $.ajax({
          type: 'POST',
          url: 'cart.php',
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