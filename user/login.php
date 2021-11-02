<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../CSS/login.css">
</head>

<body>
    <?php
    include_once "../class/Userclass.php";
    include_once "../lib/session.php";
    session::check_user();
    ?>
    <?php
    $user = new users_class();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        //Lấy dữ liệu từ form
        $email = $_POST['txtName'];
        $pass  = $_POST['txtPass'];
        $check_login = $user->login_user($email, $pass);
    }
    if (isset($check_login)) echo $check_login;
    ?>
    <section>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="color"></div>
        <div class="box">
            <div class="square" style="--i:0;"></div>
            <div class="square" style="--i:1;"></div>
            <div class="square" style="--i:2;"></div>
            <div class="square" style="--i:3;"></div>
            <div class="square" style="--i:4;"></div>
            <div class="conatiner">
                <div class="form">
                    <h2>Login Form</h2>
                    <form action="" method="post">
                        <div class="inputBox">
                            <input type="email" placeholder="Email" required name="txtName">
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" required name="txtPass">
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Login" id="login">
                        </div>
                        <p class="foget">Forgot password ? <a href="./reload_pass.php">Click here</a></p>
                        <p class="foget">Don't have an account ? <a href="./Sign_up.php">Sign up</a></p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>