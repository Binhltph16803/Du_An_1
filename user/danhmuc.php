<?php
include_once "../lib/session.php";
session::checkSession_user();
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session_destroy();
    header('Location:login.php');
}
?>
<?php include_once "../class/productclass.php";
$product = new products_class();
include_once "../class/Userclass.php";
$user = new users_class();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <header class="p-3 mb-3 border-bottom">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
                        <img src="../IMG/logo.png" alt="" width="130px">
                    </a>
                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="./HomePage.php" class="nav-link px-2 link-secondary">Home</a></li>
                        <li></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Tin tức</a></li>
                        <li><a href="#" class="nav-link px-2 link-dark">Hỗ trợ</a></li>
                    </ul>
                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="post" action="search.php">
                        <input type="search" class="form-control" placeholder="Search..." aria-label="Search" name="search" href="">
                    </form>
                    <div class="dropdown text-end">
                        <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            $image = $user->show_profile($_SESSION['name']);
                            if (isset($image)) {
                                while ($row = $image->fetch_assoc()) {
                            ?>
                                    <img src="../admin/upload/<?php echo $row['img_khachhang']; ?>" width="32" height="32" class="rounded-circle">
                            <?php
                                }
                            }
                            ?>

                        </a>
                        <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                            <li><a class="dropdown-item" href="./Profile.php?idprofile=<?php
                                                                                        $check_id = $user->check_id($_SESSION['name']);
                                                                                        if (isset($check_id)) {
                                                                                            while ($row = $check_id->fetch_assoc()) {
                                                                                                echo $row['id_khachhang'];
                                                                                            }
                                                                                        }
                                                                                        ?>">Profile</a>
                            </li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <?php
                            $check_id = $user->check_id($_SESSION['name']);
                            if (isset($check_id)) {
                                while ($row = $check_id->fetch_assoc()) {
                                    $id_kh = $row['id_khachhang'];
                                }
                            }
                            $check_kh = $user->show_profile_by_id($id_kh);
                            if (isset($check_kh)) {
                                while ($row = $check_kh->fetch_assoc()) {
                                    $vai_tro = $row['vai_tro'];
                                    if ($vai_tro == '1') {
                                        $check_admin = $user->check_admin($_SESSION['name'], $vai_tro);
                                        if (isset($check_admin)) {
                                            while ($row = $check_admin->fetch_assoc()) {
                            ?>
                                                <li><a class="dropdown-item" href="../admin/index.php?id_admin=<?php echo $row['id_khachhang']; ?>">Admin</a></li>
                            <?php
                                            }
                                        }
                                    } else {
                                        echo '';
                                    }
                                }
                            }
                            ?>

                            <li><a class="dropdown-item" href="?action=logout">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
        <div class="danhmuc" style="margin: 20px 0;">
            <span style="font-size: larger;">Danh mục :</span>
            <?php
            $list_loaiHang = $product->Show_loaiHang();
            if ($list_loaiHang) {
                while ($row = $list_loaiHang->fetch_assoc()) {
            ?>
                    <a href="danhmuc.php?idloaihang=<?php echo $row['id_loaihang']; ?>" style="text-decoration: none;color: black; margin:20px">
                        <option style="display: inline;" value="<?php echo $row['id_loaihang']; ?>"><?php echo $row['name_loaihang']; ?></option>
                    </a>
            <?php
                }
            }
            ?>
        </div>
        <main>
            <div class="row row-cols-1 row-cols-md-5 g-4">
                <!--  -->
                <?php
                $id = $_GET["idloaihang"];
                $show_product = $product->show_products_by_danhmuc($id);
                if (isset($show_product)) {
                    while ($row = $show_product->fetch_assoc()) {
                ?>
                        <div class="col">
                            <div class="card h-100">
                                <a href="./chitiet.php?idchitiet=<?php echo $row['id_hanghoa']; ?>"><img src="../admin/upload/<?php echo $row['img_hanghoa']; ?>" class="card-img-top" alt="..."></a>
                                <div class="card-body">
                                    <a href="./chitiet.php?idchitiet=<?php echo $row['id_hanghoa']; ?>" style="text-decoration: none;color: black;">
                                        <h5 class="card-title"><?php echo $row['name_hanghoa']; ?></h5>
                                    </a>
                                    <a href="./chitiet.php?idchitiet=<?php echo $row['id_hanghoa']; ?>" style="text-decoration: none; color:black;">
                                        <p class="card-text">
                                            <?php
                                            $mo_ta = $row['mo_ta'];
                                            $length = mb_strlen($mo_ta);
                                            if ($length > 60) {
                                                echo mb_substr($mo_ta, 0, 59) . " ... ";
                                            } else {
                                                echo $mo_ta;
                                            }
                                            ?>
                                        </p>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-muted">Last updated <?php echo $row['ngay_tao']; ?></small>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>
            </div>
        </main>
        <hr class="dropdown-divider">
        <footer class="py-5">
            <div class="row">
                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-2">
                    <h5>Section</h5>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Home</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Features</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pricing</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">FAQs</a></li>
                        <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">About</a></li>
                    </ul>
                </div>

                <div class="col-4 offset-1">
                    <form>
                        <h5>Subscribe to our newsletter</h5>
                        <p>Monthly digest of whats new and exciting from us.</p>
                        <div class="d-flex w-100 gap-2">
                            <label for="newsletter1" class="visually-hidden">Email address</label>
                            <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="d-flex justify-content-between py-4 my-4 border-top">
                <p>© 2021 Company, Inc. All rights reserved.</p>
                <ul class="list-unstyled d-flex">
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#twitter"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#instagram"></use>
                            </svg></a></li>
                    <li class="ms-3"><a class="link-dark" href="#"><svg class="bi" width="24" height="24">
                                <use xlink:href="#facebook"></use>
                            </svg></a></li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>