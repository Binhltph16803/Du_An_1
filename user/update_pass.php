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
                    <h2>Đổi mật khẩu</h2>
                    <form action="" method="post">
                        <div class="inputBox">
                            <input type="text" placeholder="Email" required name="txtName_TK">
                            <!-- Tên TK -->
                        </div>
                        <div class="inputBox">
                            <input type="text" placeholder="Mật khẩu cũ" required name="txtName_KH">
                            <!-- Tên KH -->
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Mật khẩu mới" required name="txtEmail">
                            <!-- Email KH -->
                        </div>
                        <div class="inputBox">
                            <input type="password" placeholder="Xác nhận " required name="txtPass">
                            <!-- Password KH -->
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Update" id="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>