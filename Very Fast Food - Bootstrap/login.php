<?php
  include_once('$con');
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
  <?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $login = "SELECT * FROM `users_info` WHERE uname = '$username' AND password = '$password'";
        $login_query = mysqli_query($connect, $login);

        if(mysqli_num_rows($login_query) > 0){

            echo 'Welcome User';
        }
        else{
            echo 'Account does not exist';
        }

    }

    ?>

  <body class="bg-dark">
    <section class="py-5 my-5"></section>
      <div class="row">
        <div class="col-3 mx-auto bg-white rounded">
            <p class="lead fw-bold text-center text-dark display-5 py-3">Login</p>
            <form action="">
                Username
                <input type="text" name="username" class="form-control">
                Password
                <input type="password" name="password" class="form-control">
                <button class="btn btn-warning form-control my-3 fw-bold" name="login">Login</button>
                Don't have an account?
                <a href="registration.php">Sign-up here</a>
                <div class="container py-3"></div>
          </form>

        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>