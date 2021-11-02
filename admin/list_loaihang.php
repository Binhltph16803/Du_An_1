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
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <div class="add" style=" margin: 20px 0;">
                <a href="./add_loaihang.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Thêm Loại hàng
                </a>
            </div>
            <?php
            $product = new products_class();
            if (isset($_GET['delid'])) {
                $del = $product->del_loaihang($_GET['delid']);
            }
            if (isset($del)) echo $del;
            ?>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Tên loại hàng</th>
                    <th>Xử lý</th>
                </tr>
                <?php
                $loaihang = $product->Show_loaiHang();
                if (isset($loaihang)) {
                    while ($row = $loaihang->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_loaihang']; ?></td>
                            <td><?php echo $row['name_loaihang']; ?></td>
                            <td>
                                <button class="btn btn-default"><a href="edit_loaihang.php?idEdit=<?php echo $row['id_loaihang']; ?>">Sửa</a></button>
                                <button class="btn btn-danger"><a onclick="return confirm('Bạn có chắc chắn muốn xóa loại hàng này hay không?');" href="?delid=<?php echo $row['id_loaihang']; ?>">Xóa</a></button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </table>
        </article>
    </div>
</body>

</html>