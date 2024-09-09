<?php
   $connection=mysqli_connect("localhost", "root", "", "restaurant_gea");
   if(!$connection){
     echo ("Connection error");
     exit();
   }
  