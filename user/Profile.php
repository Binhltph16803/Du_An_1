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
    <a href="./HomePage.php" style="color: black">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-arrow-left-square" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z" />
        </svg>
    </a>
    <div class="container" style="width:350px; margin: 0px auto;">
        <?php
        $user = new users_class();
        $profile = $user->show_profile($_SESSION['name']);
        if (isset($profile)) {
            while ($row = $profile->fetch_assoc()) {
        ?>
                <div class="image" style="text-align: center;margin-bottom:20px">
                    <img src="../admin/upload/<?php echo $row['img_khachhang']; ?>" style="width:200px; border-radius: 50%;">
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
                        <br>
                        <div class="kich_hoat" style="text-align:center; margin-top:10px">
                            <button class="btn"><a style="color: olivedrab;text-decoration: none;" onclick="return confirm('Bạn có muốn kích hoạt hay không?');" href="?kichhoatid=<?php echo $row['id_khachhang']; ?>"> Kích hoạt</a></button>
                            <button class="btn"><a style="color:red;text-decoration: none;" onclick="return confirm('Bạn có muốn hủy kích hoạt hay không?');" href="?huykichhoatid=<?php echo $row['id_khachhang']; ?>"> Hủy kích hoạt</a></button>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="setting" style="text-align:center; margin-top:10px">
                    <button class="btn"><a style="text-decoration: none;color: black;" href="editProfile.php?id=<?php echo $row['id_khachhang']; ?>">Cài đặt</a></button>
                </div>
        <?php
            }
        }
        ?>
        <?php
        $temp = "Đã kích hoạt";
        if (isset($_GET['kichhoatid'])) {
            $id = $_GET['kichhoatid'];
            $kich_hoat = $user->kich_hoat($temp, $id);
            if (isset($kich_hoat)) {
                header("refresh:1;url=Profile.php");
                echo $kich_hoat;
            }
        }
        $temp2 = "Chưa kích hoạt";
        if (isset($_GET['huykichhoatid'])) {
            $idh = $_GET['huykichhoatid'];
            $huy_kich_hoat = $user->huy_kich_hoat($temp2, $idh);
            if (isset($huy_kich_hoat)) {
                header("refresh:1;url=Profile.php");
                echo $huy_kich_hoat;
            }
        }
        ?>
    </div>
</body>

</html>