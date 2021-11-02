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
                <a href="./slide.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Danh sách slide
                </a>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="col">
                    <div class="form-group">
                        <label for="">Id slide</label>
                        <input class="form-control" type="text" name="ma_lh" readonly placeholder="auto number" disabled>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="margin:20px 0">
                        <label for="">Tên slide</label>
                        <input class="form-control" type="text" name="ten_slide" placeholder="Tên slide">
                    </div>
                </div>
                <div class="col">
                    <div class="form-group" style="margin:20px 0">
                        <label for="">Image</label>
                        <input class="form-control" type="file" name="image" placeholder="Img slide">
                    </div>
                </div>
                <button class="btn" type="submit" name="btn_insert">Thêm</button>
            </form>
            <?php
            include_once "../class/productclass.php";
            $product = new products_class();
            if (isset($_POST['btn_insert'])) {
                if (isset($_POST['ten_slide'])) {
                    $add_slide = $product->insert_slide($_POST['ten_slide'], $_FILES['image']['name']);
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
                } else {
                    echo "Nhập tên slide";
                }
                if (isset($add_slide)) {
                    echo $add_slide;
                    header("refresh:2;url=slide.php");
                }
            }
            ?>
        </main>
    </div>
</body>

</html>