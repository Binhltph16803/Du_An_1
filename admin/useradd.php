<?php
include_once "../class/Userclass.php";
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
    <?php
    $user = new users_class();
    $kich_hoat = "Chưa kích hoạt";
    if (isset($_GET['idEdit'])) {
        $id = $_GET['idEdit'];
    }
    if (isset($_POST['btn_insert'])) {
        if (isset($_POST['sex'])) {
            echo "Bạn đã chọn:" . $_POST['sex'];
        }
        foreach ($_POST['Vai_tro'] as $Vai_tro) {

            echo "Bạn đã chọn :" . $Vai_tro;
        }
        if (isset($_POST['ten_kh']) && isset($_POST['name_tk']) && isset($Vai_tro) && isset($_POST['sex'])  && isset($_POST['dia_chi']) && isset($_POST['email']) && isset($_POST['pass'])) {
            $add_user = $user->add_user_from_admin($_POST['ten_kh'],  $_FILES['image']['name'], $_POST['name_tk'], $_POST['email'], $_POST['pass'], $_POST['sex'], $_POST['dia_chi'], $Vai_tro, $kich_hoat);
            if (isset($_FILES['image'])) {
                if ($_FILES['image']['error'] > 0) {
                    echo "Lỗi file ảnh";
                } else {
                    $allow_ext = array('jpg', 'png');
                    $fileName = $_FILES['image']['name'];
                    $fileSize = $_FILES['image']['size'];
                    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
                    $fileTemp = $_FILES['image']['tmp_name'];
                    if ($fileSize > 2000000) {
                        echo "File không được lớn hơn 2MB";
                    } else if (!in_array($fileExt, $allow_ext)) {
                        echo "Chỉ chấp nhận file png và jpg";
                    } else {
                        $urlUpload = "upload/" . $fileName;
                        move_uploaded_file($fileTemp, $urlUpload);
                        echo "Tải file thành công";
                    }
                }
            }
        }
        if (isset($add_user)) {
            echo $add_user;
            header("refresh:2;url=Userlist.php");
        }
    }
    ?>
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
                <a href="./Userlist.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Danh Sách user
                </a>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã khách hàng</label>
                            <input class="form-control" type="text" name="ma_kh" readonly placeholder="auto number" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên khách hàng</label>
                            <input class="form-control" type="text" name="ten_kh" placeholder="Tên khách hàng">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên TK</label>
                            <input class="form-control" type="text" name="name_tk" placeholder="Tên tài khoản">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Vai trò</label>
                            <select class="form-control" name="Vai_tro[]" id="">
                                <option value="">Vai trò</option>
                                <option value="0">Người dùng</option>
                                <option value="1">Người quản trị</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Giới tính</label>
                            <div class="form-special">
                                <input type="radio" name="sex" value="Nam"> Nam
                                <input type="radio" name="sex" value="Nữ" checked> Nữ
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Ảnh khách hàng</label>
                            <input type="file" name="image" placeholder="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Địa chỉ</label>
                            <input class="form-control" type="text" name="dia_chi" placeholder="Địa chỉ">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Email</label>
                            <input class="form-control" type="email" name="email" placeholder="Nhập email">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Password</label>
                            <input class="form-control" type="text" name="pass" placeholder="Nhập password">
                        </div>
                    </div>
                </div>
                <button class="btn" type="submit" name="btn_insert">Thêm</button>
                <button class="btn"><a href="./Userlist.php">Danh sách</a></button>
            </form>
        </article>
    </div>
</body>

</html>