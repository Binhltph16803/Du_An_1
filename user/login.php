<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./css/login.css">
  <link rel="stylesheet" href="./bootstraps/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-7">
        <img src="./image/logo_login.jpg" alt="" width="750px">
      </div>
      <div class="col">
        <p>Welcome back</p>
        <h3>Login to your account</h3>
        <br>
        <form method="post" enctype="multipart/form-data">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" aria-describedby="emailHelp" name="txtEmail">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="txtPass">
          </div>
          <?php
          include_once "../class/user_class.php";
          include_once "../lib/session.php";
          session::check_login();
          $user = new users_class();
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            //Lấy dữ liệu từ form
            $email = $_POST['txtEmail'];
            $pass  = $_POST['txtPass'];
            $check_login = $user->login($email, $pass);
          }
          if (isset($check_login)) echo $check_login;
          ?>
          <div class="mb-3 form-check" style="text-align: right;">
            <a href="">Forgot password?</a>
          </div>
          <div class="d-grid gap-2">
            <button class="btn btn btn-warning" type="submit">Login now</button>
            <button class="btn btn btn-dark" type="button"><img src="./image/gg.png" width="20px" alt="">Or sign-in with google</button>
          </div>
          <div class="d-grid gap-2">
            <p>Dont have an account?<a href="">Join free today</a> </p>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>