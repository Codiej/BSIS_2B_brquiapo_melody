<?php 
  include 'connection.php';

  if(isset($_POST['sign-up']))
  {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    $query = "INSERT INTO users_info (fname, lname, uname, password) VALUES ('$fname', '$lname', '$uname', '$pass')";

    $query_run = mysqli_query($con, $query);

    if($query_run)
    {
        header("Location: registration.php");
    }
   else
   {
    echo "Something went wrong!";
   }  
  }
  else
  {
    echo "You are not allowed here";
  }
 
  
?>