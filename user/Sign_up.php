<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
        $acount = $_POST['txtName_TK'];
        $name_user = $_POST['txtName_KH'];
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        $Add = $user->add_user($acount, $name_user, $email, $pass);
    }
    if (isset($Add)) echo $Add;
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
                    <h2>Sign Up Form</h2>
                    <form action="" method="post">
                        <div class="inputBox">
                            <input type="text" placeholder="Account name" required name="txtName_TK">
                            <!-- Tên TK -->
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Name User" required name="txtName_KH">
                            <!-- Tên KH -->
                        </div>
                        <div class="inputBox">
                            <input type="email" placeholder="Email" required name="txtEmail">
                            <!-- Email KH -->
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Password" required name="txtPass">
                            <!-- Password KH -->
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Register" id="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>