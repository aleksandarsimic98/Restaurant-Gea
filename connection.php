<?php
   $konekcija=mysqli_connect("localhost", "root", "", "restoran_gea");
   if(!$konekcija){
     echo ("Connection error");
     exit();
   }
  