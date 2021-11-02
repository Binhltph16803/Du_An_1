<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/common.css">
    <title>Slideshow</title>
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
                    <li><a href="./comment.php">Bình luận</a></li>
                    <li><a href="./slide.php">Silded</a></li>
                    <li><a href="./Thong_ke.php">Thống kê</a></li>
                </ul>
            </nav>
        </header>
        <main>
            <h3>Danh sách slide</h3>
            <hr>
            <div class="add" style=" margin: 20px 0;">
                <a href="./add_slide.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Thêm Slideshow
                </a>
            </div>
            <table border="1" style="border-collapse: collapse; width: 100%; margin:100px auto">
                <tr>
                    <th>ID Slideshow</th>
                    <th>Tên slide</th>
                    <th>Image</th>
                    <th>Sử lý</th>
                </tr>
                <?php
                include_once "../class/productclass.php";
                $product = new products_class();
                if (isset($_GET['delid'])) {
                    $del = $product->del_slide($_GET['delid']);
                }
                if (isset($del)) echo $del;
                $lits_slide = $product->show_slide();
                if (isset($lits_slide)) {
                    while ($row = $lits_slide->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?php echo $row['id_slide']; ?></td>
                            <td><?php echo $row['name_slide']; ?></td>
                            <td style="text-align: center;">
                                <img src="upload/<?php echo $row['img_slide']; ?>" width="120px">
                            </td>
                            <td>
                                <button class="btn btn-default"><a href="edit_slide.php?idEdit=<?php echo $row['id_slide']; ?>">Sửa</a></button>
                                <button class="btn btn-danger"><a onclick="return confirm('Bạn có chắc chắn muốn xóa slide này hay không?');" href="?delid=<?php echo $row['id_slide']; ?>">Xóa</a></button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
                <tr>
                    <td></td>
                </tr>
            </table>
        </main>
    </div>
</body>

</html>