<?php include_once "../class/Userclass.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/common.css">
    <title>Danh sách người dùng</title>
</head>

<body>
    <?php
    $users = new users_class();
    if (isset($_GET['delid'])) {
        $del = $users->del_user($_GET['delid']);
    }
    if (isset($del)) {
        echo $del;
    }
    ?>
    <table border="1" style="border-collapse: collapse; width: 100%; margin:100px auto">
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
        <div class="headline">
            <h2>QUẢN LÝ HÀNG HÓA</h2>
        </div>
        <div class="add" style=" margin: 20px 0;">
            <a href="./useradd.php" style="text-decoration: none; color: black;">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                    <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                    <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                </svg>
                Thêm User
            </a>
        </div>
        <tr>
            <th>ID</th>
            <th>Họ tên</th>
            <th>Image</th>
            <th>Tên TK</th>
            <th>Email</th>
            <th>Password</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Vài trò</th>
            <th>Trạng thái</th>
            <th>Xử lý</th>
        </tr>
        <?php
        $listusers = $users->show_users();
        if ($listusers) {
            while ($row = $listusers->fetch_assoc()) {
        ?>
                <tr>
                    <td><?php echo $row['id_khachhang']; ?></td>
                    <td><?php echo $row['name_khachhang']; ?></td>
                    <td style="text-align: center;">
                        <img src="upload/<?php echo $row['img_khachhang']; ?>" width="100px">
                    </td>
                    <td><?php echo $row['name_taikhoan']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['password_kh']; ?></td>
                    <td><?php echo $row['gioi_tinh']; ?></td>
                    <td><?php echo $row['dia_chi']; ?></td>
                    <td><?php echo $row['vai_tro']; ?></td>
                    <td><?php echo $row['kich_hoat']; ?></td>
                    <td style="width: 250px; text-align: center;">
                        <button style="background-color: green; width: 90px;">
                            <a style=" color: white; text-decoration: none;" href="useredit.php?idEdit=<?php echo $row['id_khachhang']; ?>">Sửa</a>
                        </button>
                        |
                        <button style="background-color: red; width: 80px;">
                            <a style="color:white; text-decoration: none;" onclick="return confirm('Bạn có chắc chắn muốn xóa người dùng này hay không?');" href="?delid=<?php echo $row['id_khachhang']; ?>">Xóa</a>
                        </button>
                        <button style="background-color: yellowgreen; width: 80px;" class="btn_confirm">
                            <a style="color:white; text-decoration: none;" onclick="return confirm('Bạn có muốn kích hoạt hay không?');" href="?kichhoatid=<?php echo $row['id_khachhang']; ?>">Kích hoạt</a>
                        </button>
                    </td>
                </tr>
        <?php
            }
        }
        ?>
        <?php
        $temp = "Đã kích hoạt";
        if (isset($_GET['kichhoatid'])) {
            $id = $_GET['kichhoatid'];
            $kich_hoat = $users->kich_hoat($temp, $id);
        }
        if (isset($kich_hoat)) {
            //header("refresh:1;url=Userlist.php");
            echo $kich_hoat;
        }
        ?>
    </table>
</body>

</html>