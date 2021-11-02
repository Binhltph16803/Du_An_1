<?php
include_once "../class/Userclass.php";
include_once "../lib/session.php";
session::checkSession_user();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="../CSS/common.css">
</head>

<body>
    <a href="./Profile.php" style="color: black">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>
    <?php
    $user = new users_class();
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    if (isset($_POST['btn_insert'])) {
        if (isset($_POST['sex'])) {
            echo "Bạn đã chọn:" . $_POST['sex'];
        }
        $Vai_tro = '0';
        $kich_hoat = "Chưa kích hoạt";
        $edit_profile = $user->update_user($_POST['ten_kh'], $_FILES['image']['name'], $_POST['name_tk'], $_POST['email'], $_POST['pass'], $_POST['sex'], $_POST['dia_chi'], $Vai_tro, $kich_hoat, $id);
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
                    $urlUpload = "./admin/upload/" . $fileName;
                    move_uploaded_file($fileTemp, $urlUpload);
                    echo "Tải file thành công";
                }
            }
        }
        if (isset($edit_profile)) {
            echo $edit_profile;
            $_GET['action'] = 'logout';
            if (isset($_GET['action']) && $_GET['action'] == 'logout') {
                session_destroy();
                header('Location:login.php');
            }
        }
    }
    ?>
    <main style="display:grid; grid-template-columns: 500px 1000px;">
        <div class="container" style="width:350px; margin: 0px auto;">
            <?php
            $profile = $user->show_profile_by_id($id);
            if (isset($profile)) {
                while ($row = $profile->fetch_assoc()) {
            ?>
                    <div class="image" style="text-align: center;margin-bottom:20px">
                        <img src="../admin/upload/<?php echo $row['img_khachhang']; ?>" style="width:200px; border-radius: 50%;">;
                    </div>
                    <hr>
                    <div class="profile">
                        <div class="name_tk" style="margin: 10px 0;">
                            <label for="">ID tài khoản : </label>
                            <span><?php echo $row['id_khachhang']; ?></span>
                        </div>
                        <hr>
                        <div class="name_tk" style="margin: 10px 0;">
                            <label for="">Tên tài khoản : </label>
                            <span><?php echo $row['name_taikhoan']; ?></span>
                        </div>
                        <hr>
                        <div class="name_kh" style="margin: 10px 0;">
                            <label for="">Tên khách hàng : </label>
                            <span><?php echo $row['name_khachhang']; ?></span>
                        </div>
                        <hr>
                        <div class="email" style="margin: 10px 0;">
                            <label for="">Email : </label>
                            <span><?php echo $row['email']; ?></span>
                        </div>
                        <hr>
                        <div class="pass" style="margin: 10px 0;">
                            <label for="">Password : </label>
                            <span><?php echo $row['password_kh']; ?></span>
                        </div>
                        <hr>
                        <div class="gioi_tinh" style="margin: 10px 0;">
                            <label for="">Giới tính : </label>
                            <span><?php echo $row['gioi_tinh']; ?></span>
                        </div>
                        <hr>
                        <div class="dia_chi" style="margin: 10px 0;">
                            <label for="">Địa chỉ : </label>
                            <span><?php echo $row['dia_chi']; ?></span>
                        </div>
                        <hr>
                        <div class="trang_thai" style="margin: 10px 0;">
                            <label for="">Trạng thái : </label>
                            <span><?php echo $row['kich_hoat']; ?></span>
                        </div>
                    </div>
            <?php
                }
            }
            ?>
        </div>
        <div class="container">
            <h2>Thông tin cập nhật</h2>
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
                <button class="btn" type="submit" name="btn_insert">Upload</button>
            </form>
        </div>
    </main>
</body>

</html>