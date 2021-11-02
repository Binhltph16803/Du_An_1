<?php
include_once "../class/productclass.php";
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
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <div class="add" style=" margin: 20px 0;">
                <a href="./list_loaihang.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Danh Sách Loại Hàng
                </a>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col">
                    <div class="form-group">
                        <label for="">Mã loại hàng</label>
                        <input class="form-control" type="text" name="ma_lh" readonly placeholder="auto number" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="margin:20px 0">
                        <label for="">Tên loại hàng</label>
                        <input class="form-control" type="text" name="ten_lh" placeholder="Tên loại hàng">
                    </div>
                    <button class="btn" type="submit" name="btn_insert">Thêm</button>
                    <button class="btn"><a href="./list_loaihang.php">Danh sách</a></button>
                </div>
            </form>
            <?php
            $product = new products_class();
            if (isset($_POST['btn_insert'])) {
                if (isset($_POST['ten_lh'])) {
                    $add_loaihang = $product->add_loaihang($_POST['ten_lh']);
                    if (isset($add_loaihang)) {
                        echo $add_loaihang;
                        header("refresh:2;url=list_loaihang.php");
                    }
                }
            }
            ?>
        </article>

    </div>
</body>

</html>