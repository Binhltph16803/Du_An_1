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
    <?php
    $product = new products_class();
    $date = date("Y/m/d");
    if (isset($_POST['btn_insert'])) {
        if (isset($_POST['dac_biet'])) {
            echo "Bạn đã chọn:" . $_POST['dac_biet'];
        }
        foreach ($_POST['ma_loai'] as $ma_loai) {
            echo "Bạn đã chọn :" . $ma_loai;
        }
        if (isset($_POST['ten_hh']) && isset($_POST['don_gia']) && isset($_POST['dac_biet']) && isset($_POST['giam_gia']) && isset($_POST['mo_ta'])) {
            $insert_product = $product->insert_product($_POST['ten_hh'], $_POST['don_gia'], $_POST['giam_gia'], $_FILES['image']['name'], $_POST['mo_ta'], $_POST['dac_biet'], $ma_loai, $date);
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
        if (isset($insert_product)) {
            echo $insert_product;
            header("refresh:2;url=productlist.php");
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
                    <li><a href="./Productlist.php">Thống kê</a></li>
                </ul>
            </nav>
        </header>
        <article>
            <div class="headline">
                <h2>QUẢN LÝ HÀNG HÓA</h2>
            </div>
            <div class="add" style=" margin: 20px 0;">
                <a href="./Productlist.php" style="text-decoration: none; color: black;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmark-plus" viewBox="0 0 16 16">
                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        <path d="M8 4a.5.5 0 0 1 .5.5V6H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V7H6a.5.5 0 0 1 0-1h1.5V4.5A.5.5 0 0 1 8 4z" />
                    </svg>
                    Danh Sách Sản Phẩm
                </a>
            </div>
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Mã hàng hóa</label>
                            <input class="form-control" type="text" name="ma_hh" readonly placeholder="auto number" disabled>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tên hàng hóa</label>
                            <input class="form-control" type="text" name="ten_hh" placeholder="tên hàng">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Đơn giá</label>
                            <input class="form-control" type="number" name="don_gia" min="0" value="0">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Loại hàng</label>
                            <select class="form-control" name="ma_loai[]" id="">
                                <option value="">Mã loại</option>
                                <?php
                                $list_loaiHang = $product->Show_loaiHang();
                                if ($list_loaiHang) {
                                    while ($row = $list_loaiHang->fetch_assoc()) {
                                ?>
                                        <option value="<?php echo $row['id_loaihang']; ?>"><?php echo $row['id_loaihang'] . " - ";
                                                                                            echo $row['name_loaihang']; ?></option>
                                <?php
                                    }
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hàng đặc biệt</label>
                            <div class="form-special">
                                <input type="radio" name="dac_biet" value="Đặc Biệt"> Đặc biệt
                                <input type="radio" name="dac_biet" value="Thường" checked> Bình thường
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hình</label>
                            <input type="file" name="image" placeholder="">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Giảm giá</label>
                            <input class="form-control" type="number" name="giam_gia" placeholder="Theo phần trăm">
                        </div>
                    </div>
                    <div class="full">
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <textarea name="mo_ta"></textarea>
                        </div>
                    </div>

                </div>
                <button class="btn" type="submit" name="btn_insert">Thêm</button>
                <button class="btn"><a href="./s.php">Danh sách</a></button>
            </form>
        </article>
    </div>
</body>

</html>