<?php include_once "../class/productclass.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản trị website</title>
    <link rel="stylesheet" href="../CSS/common.css">
</head>

<body>
    <div class="container">
        <header>
            <h1>QUẢN TRỊ WEBSITE</h1>
            <nav>
                <ul>
                    <li><a href="./index.php">Trang chủ</a></li>
                    <li><a href="./list_loaihang.php">Loại hàng</a></li>
                    <li><a href="./Productlist.php">Hàng hóa</a></li>
                    <li><a href="./Userlist.php">Khách hàng</a></li>
                    <li><a href="#">Bình luận</a></li>
                    <li><a href="./Thong_ke.php">Thống kê</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <div class="col" style="margin: 25px 0;">
                <label for="">Số lượng hàng hóa : </label> <span></span>
                <hr>
            </div>
            <div class="col" style="margin: 25px 0;">
                <label for="">Số lượng người dùng : </label> <span></span>
                <hr>
            </div>
            <div class="col" style="margin: 25px 0;">
                <label for="">Số lượng loại hàng : </label> <span></span>
                <hr>
            </div>
            <div class="col" style="margin: 25px 0;">
                <label for="">Tổng số lượt xem hàng : </label> <span></span>
                <hr>
            </div>
        </main>
    </div>
</body>

</html>