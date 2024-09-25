<?php
// if admin is not logged in can't access to this page 
session_start();
if(!isset($_SESSION['admin'])){
  header("Location: login.php");
  die();
}

include_once("connection.php");       //connection to the DB 

// if button 'poslato' is set delete that row (from DB and also from admin page)
if(isset($_POST['remove_button'])){
  $delete_id=$_POST['userr'];
  $delete_info="DELETE FROM order_info WHERE id=$delete_id";
  mysqli_query( $connection,$delete_info);
  $delete_ordered_products="DELETE FROM ordered_products WHERE id=$delete_id";
  mysqli_query( $connection,$delete_ordered_products);
  $delete_total="DELETE FROM total WHERE id=$delete_id";
  mysqli_query( $connection,$delete_total);
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
  <link rel="stylesheet" href="css/footer.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/navbar.css?v=<?php echo time();?>">
  <link rel="stylesheet" href="css/admin.css?v=<?php echo time();?>"> 
  <title>Admin Orders</title>
</head>

<!-- END head -->

<!-- BEGIN body -->

<body>

<!-- BEGIN Navbar -->

<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="admin.php"><img class="nav_image" src="img/0NqJfO-LogoMakr.png" alt="Gea Logo"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <a class="navbar-navv" href="admin_ordered.php" > <i class="fa-solid fa-user-plus" style="color: #ffffff;"></i> <b><i>Orders</b></i> </a>
      <a class="navbar-navvvv" href="admin.php"> <i class="fa-solid fa-house" style="color: #ffffff;"></i> <b><i>Users</b></i> </a>
    <form action="logout.php">
      <button type="submit" class="logout" value="Logout" >Logout</button>
    </form>
    <h6 class="vreme">  </h6>
  </div>
</nav>

<!-- END Navbar -->

<h1 class="heading"><b><i>Orders</i></b></h1> <br>


<!-- BEGIN order -->

<div class="container text-center">
  <div class="row">
    <div class="col">
      <table class="table">
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>City</th>
        <th>Post no</th>
        <th>E-mail</th>
        <th>Phone</th>
        <th>Time of order</th>
        <th>Ordered products</th>
        <th>Count</th>
        <th></th>
        <?php
        include_once("connection.php");       //connection to the DB 

        //getting everything from 'porudzbina_info' and 'porudzbina_stavkee' and insert that into html table
        //to show details of purchaser and what is ordered
        $query_info="SELECT * FROM order_info";
        $result_info = mysqli_query($connection, $query_info);
        while($row_info=mysqli_fetch_assoc($result_info)){
        echo "
          <tbody>
            <tr>
            <td>".  $row_info["id"]  . "</td>
            <td>".  $row_info["first_second_name"]  . "</td>
            <td>".  $row_info["address_"]  . "</td>
            <td>".  $row_info["city"]  . "</td>
            <td>".  $row_info["post_no"]  . "</td>
            <td>".  $row_info["email"]  . "</td>
            <td>".  $row_info["phone"]  . "</td>
            <td>".  $row_info["time_of_order"]  . "</td>
            <td>
            <table class='table'>
              <thead>
                <tr>
                  <th scope='col'>Product</th>
                  <th scope='col'>Quan.</th>
                  <th scope='col'>Price</th>
                </tr>";
                $query_ordered="SELECT * FROM ordered_products WHERE id=$row_info[id]";
                $result_ordered = mysqli_query($connection, $query_ordered);
                while($row_ordered=mysqli_fetch_assoc($result_ordered)){
                 
                 echo "
                  <tr>
                  
                    <td>".  $row_ordered["product"]  . "</td>
                    <td>". $row_ordered["quantity"] ."</td>
                    <td>". $row_ordered["price"] .' ' . 'USD'."</td>
                    <form action='admin_ordered.php' method='post'>
                    <input type='hidden' name='stavke' value='". $row_ordered["id"] ."'>    
                    </form>
                  </tr>
                ";
                 
              } 
                echo"
              </thead>
            </table>
            </td>
            ";
            $count="SELECT * FROM total WHERE id=$row_info[id]";
            $result_count = mysqli_query($connection, $count);
            while($row_count=mysqli_fetch_assoc($result_count)){ 
            echo "
            <td>". $row_count["total_count"]   . ' ' . 'USD'. "</td>
            <form action='admin_ordered.php' method='post'>
             <input type='hidden' name='userr' value='". $row_info["id"] ."'>   
              <th> <input type='submit' name='remove_button' class='remove'  value='Completed'></th>
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

<!-- END order -->

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
<script type="text/javascript" src="js/time.js"></script> 
