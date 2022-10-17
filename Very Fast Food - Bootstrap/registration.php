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
    <section class="py-3 my-3"></section>
    <div class="row">
        <div class="col-5 mx-auto my-5 bg-white rounded">
        <p class="lead fw-bold text-center text-dark display-5 py-3">Sign-up</p>
        <form action="function.php" method="POST">
            Firstname
            <input type="text" name="firstname" class="form-control">
            Lastname
            <input type="text" name="lastname" class="form-control">
            Email Address 
            <input type="email" name="email_address" class="form-control">
            Complete Address 
            <input type="text" name="complete address" class="form-control">
            Contact No.
            <input type="text" name="contact number" class="form-control">
            Username 
            <input required type="text" name="username" class="form-control">
            Password 
            <input required type="password" name="password" class="form-control">
            <button class="btn btn-warning form-control my-3 fw-bold" name="sign-up">Sign-up</button>
        </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>