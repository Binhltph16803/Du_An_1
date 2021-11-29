<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tin tức</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./css/trang_chu.css">
    <link rel="stylesheet" href="./bootstraps/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<?php
include_once "../class/user_class.php";
$user = new users_class();
include_once "../lib/session.php";
session::checkSession();
?>
<?php
if (isset($_GET['action']) && $_GET['action'] == 'logout') {
    session::logout();
}
?>

<body>
    <div class="container">
        <header class="p-3 bg-dark text-white mb-4">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <img src="./image/logo.png" width="70px" alt="" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="./index.php" class="nav-link px-2 text-secondary">Trang chủ</a></li>
                        <li><a href="./san_pham.php" class="nav-link px-2 text-white">Sản phẩm</a></li>
                        <li><a href="./tin_tuc.php" class="nav-link px-2 text-white">Tin tức</a></li>
                        <li><a href="./lien_he.php" class="nav-link px-2 text-white">Liên hệ & Hỗ trợ</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" method="post" action="search.php">
                        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search" name="search">
                    </form>
                    <?php
                    if (isset($_SESSION['Login'])) { ?>
                        <a href="./gio_hang.php" style="color: white;">
                            <svg style="margin: 0 20px;" xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-cart3" viewBox="0 0 16 16">
                                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .49.598l-1 5a.5.5 0 0 1-.465.401l-9.397.472L4.415 11H13a.5.5 0 0 1 0 1H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l.84 4.479 9.144-.459L13.89 4H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                            </svg>
                        </a>
                        <div class="dropdown text-end">
                            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle">
                            </a>
                            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
                                <li><a class="dropdown-item" href="#">Profile</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="?action=logout">Sign out</a></li>
                            </ul>
                        </div>
                    <?php } else { ?>
                        <div class="text-end">
                            <a href="./login.php">
                                <button type="button" class="btn btn-outline-light me-2">Login</button>
                            </a>
                            <button type="button" class="btn btn-warning">Sign-up</button>
                        </div>
                    <?php  } ?>
                </div>
            </div>
        </header>
        <div class="row">
            <div class="col-7 mt-3">
                <h4>GIẢI PHÁP TĂNG TRƯỞNG BÁN HÀNG</h4>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title ">Hệ thống bán hàng đa kênh</h5>
                            <p class="card-text"><small class="text-muted">Liên kết, tích hợp với các sàn Shopee, Lazada, Sendo, Tiki,...
                                    Đồng bộ Quản lý - checking sản phẩm trên website, trên sàn, Afiliate sàn dành cho cả khách hàng và người quản lý kinh doanh</small></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Tích hợp đơn vị vận chuyển</h5>
                            <p class="card-text"><small class="text-muted">Đồng bộ tích hợp, quản lý với các đơn vị vận chuyển: Giao hàng Nhanh, Giao hàng Tiết Kiệm, J&T, Ninja Van,… Web API tích hợp quản lý đồng bộ</small></p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">Tích hợp cổng thanh toán</h5>
                            <p class="card-text"><small class="text-muted">Tích hợp toàn bộ các cổng thanh toán Online Việt và Quốc tế bao gồm: Paypal, Visa, MasterCard, Ngân Lượng, Momo, Onepay, Zalopay, Viettelpay,…</small></p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card-body">
                            <h5 class="card-title">ReMarketing – UPSALE HIỆU QUẢ</h5>
                            <p class="card-text"><small class="text-muted">Không chỉ về mặt thẩm mỹ, Website hiệu quả giúp biến người truy cập thành đơn hàng thực sự. Mọi thứ được làm hoàn hảo nhất về hình ảnh và hiệu ứng, bố cục, font chữ, breadcum, các nút kêu gọi CTA cuốn hút</small></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <img src="./image/tin_tuc.jpg" alt="" width="500px">
            </div>
        </div>
        <div class="row tin_tuc">
            <h4>TIN TỨC MỚI NHẤT</h4>
            <div class=" row row-cols-1 row-cols-md-2 ">
                <a class="nav-link" href="https://vietgiaitri.com/len-do-chat-nhu-nuoc-cat-nu-tiktoker-so-huu-trieu-fans-20211108i6142396/">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="../image/tin_tuc2.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Lên đồ ‘chất như nước cất’, nữ TikToker sở hữu triệu fans</h5>
                                <p class="card-text"><small class="text-muted">Xuất hiện với nhiều gu thời trang lạ mắt và mỗi lần lên đồ, nữ TikToker có nickname Gia Thị Linh đều nhận về những lời khen chất như nước cất từ netizen.</small></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="nav-link" href="https://nhuthenao.vn/mac-ao-trench-coat-chuan-dep-nhu-gai-phap-voi-13-cach-len-do-khong-he-cau-ky-pN1UmGtqVGy">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="./image/tin_tuc3.jfif" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Mặc áo trench coat chuẩn đẹp như gái Pháp với 13 cách lên đồ không hề cầu kỳ</h5>
                                <p class="card-text"><small class="text-muted">Gái Pháp mặc áo trench coat theo những cách nàng nào cũng áp dụng được.
                                        Thời tiết đã chuyển lạnh và chúng ta chính thức bước vào mùa đông.</small></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="row row-cols-1 row-cols-md-2 ">
                <a class="nav-link" href="https://www.24h.com.vn/xu-huong-thoi-trang/long-thu-gia-la-mon-do-can-co-cho-mua-thu-dong-c215a1304903.html">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="./image/tin_tuc1.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Lông thú giả là món đồ cần có cho mùa thu đông</h5>
                                <p class="card-text"><small class="text-muted">Đối với nhiều bộ sưu tập Thu/Đông 2021, khi thời tiết xuống thấp, quần áo và phụ kiện làm từ lông thú giả sẽ là thứ cần phải mua.</small></p>
                            </div>
                        </div>
                    </div>
                </a>
                <a class="nav-link" href="https://suckhoedoisong.vn/vay-hoa-nu-tinh-va-quyen-ru-169211107045049003.htm">
                    <div class="row ">
                        <div class="col-md-3">
                            <img src="./image/tin_tuc4.jpg" class="img-fluid rounded-start" alt="...">
                        </div>
                        <div class="col">
                            <div class="card-body">
                                <h5 class="card-title">Váy hoa, nữ tính và quyến rũ</h5>
                                <p class="card-text"><small class="text-muted">Váy hoa (nền hoa) được coi tinh túy của nữ tính và xu hướng muôn thưở.
                                        Thích hợp với tất cả người đẹp không phụ thuộc tuổi tác, sắc đẹp và tạo dáng hình thể,...</small></p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <footer class=" footer row row-cols-7 py-5 my-5 border-top">
            <div class="col-1">

            </div>
            <div class="col">
                <img src="../image/logo.png" alt="" width="200px">
                <div class="row">
                    <div class="col"><img src="./image/face.png" alt="" width="30px"></div>
                    <div class="col"><img src="./image/tw.png" alt="" width="23px"></div>
                    <div class="col"><img src="./image/ig.png" alt="" width="30px"></div>
                    <div class="col"><img src="./image/ytb.png" alt="" width="30px"></div>
                </div>
            </div>

            <div class="col">

            </div>

            <div class="col">
                <h5>About Us</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
                            <h6>Address</h6>
                        </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Store & Office</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Jl. Setrasari Kulon III, No. 10-12, </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sukarasa, Sukasari, Bandung, Jawa Barat,</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Indonesia 40152</a></li>
                </ul>
            </div>
            <div class="col">

            </div>
            <div class="col">
                <h5>Get in touch</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
                            <h6>Phone 022-20277564</h6>
                        </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
                            <h6>Service 0811-233-8899</h6>
                        </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Center</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">
                            <h6>Customer 0811-235-9988</h6>
                        </a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Service</a></li>
                </ul>
            </div>
            <div class="col-1">

            </div>
        </footer>
    </div>
</body>

</html>