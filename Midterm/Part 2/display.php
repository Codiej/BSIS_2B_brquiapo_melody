<?php
include "connection.php"
?>

<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Very Fastfood</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"/>
  </head>
  <body class="bg-dark">
      <div class="container mt-5 text-light">
        <h3 class= "text-warning text-uppercase text-center pb-5">Users Information</h3>
        <table class="table table-border text-light">
            <thead>
                <tr>
                    <td>UserID</td>
                    <td>Firstname</td>
                    <td>Middlename</td>
                    <td>Lastname</td>
                    <td>Email Address</td>
                    <td>Complete Address</td>
                    <td>Contact</td>
                    <td>Username</td>
                    <td>Password</td> 
                </tr>     
            </thead>
            
            <tbody>

            <?php
             $sel = "SELECT * FROM users_info";
             $query = mysqli_query($con, $sel);
             while($rows = mysqli_fetch_assoc($query))
             {
            ?>
                <tr>
                    <td><?php echo $rows['User_ID']?></td>
                    <td><?php echo $rows['Firstname']?></td>
                    <td><?php echo $rows['Middlename']?></td>
                    <td><?php echo $rows['Lastname']?></td>
                    <td><?php echo $rows['Email_Address']?></td>
                    <td><?php echo $rows['Complete_Address']?></td>
                    <td><?php echo $rows['Contact']?></td>
                    <td><?php echo $rows['Username']?></td>
                    <td><?php echo $rows['Password']?></td> 
                </tr>  
            </tbody>
            <?php
             }
            ?>
        </table>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>