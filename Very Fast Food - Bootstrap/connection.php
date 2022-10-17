<?php 
   $con = mysqli_connect("localhost", "root", "", "veryfastfood_db");

   if(!$con)
   {
    die("Connection Failed " . mysqli_connect_error());
   }
   else
   {
    echo "Connected Successfully!";
   }

?>