<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sản phẩm</title>
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

    <div class="row mt-4">
      <div class="col">
        <p>SIZE</p>
        <hr>
        <div class="row row-cols-4">
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined-1" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined-1">S</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined-2" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined-2">M</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined-3" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined-3">L</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined-4" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined-4">XL</label>
          </div>
        </div>
        <div class="row row-cols-4 mt-2">
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">34</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">35</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">36</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">37</label>
          </div>
        </div>
        <div class="row row-cols-4 mt-2 mb-4">
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">38</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">39</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">40</label>
          </div>
          <div class="col">
            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
            <label class="btn btn-outline-danger" style="width: 95%;" for="danger-outlined">41</label>
          </div>
        </div>
        <p>PRICE</p>
        <hr>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">$0 - $10.0</label>
        </div>
        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">$10.0 - $20.0</label>
        </div>
        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">$20.0 - $50.0</label>
        </div>
        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">$50.0 - $100.0</label>
        </div>
        <div class="form-check mt-4">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">$100.0 - $200.0</label>
        </div>
        <div class="row row-cols-4">
          <div class="col-4">
            <form class="col-12  mt-3 ">
              <input type="text" class="form-control form-control-dark" placeholder="$" aria-label="$">
            </form>
          </div>
          <div class="col-1 mt-4 ">
            <p>to</p>
          </div>
          <div class="col-4">
            <form class="col-12  mt-3">
              <input type="text" class="form-control form-control-dark" placeholder="$" aria-label="$">
            </form>
          </div>
          <div class="col mt-3">
            <button type="button" class="btn btn-danger">Apply</button>
          </div>
        </div>
      </div>
      <div class="col-sm-6 ">
        <div class="row  row-cols-md-2 g-4 san_pham">
          <!--  -->
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header text-white bg-dark">
            <span>DANH MỤC SẢN PHẨM</span>
          </div>
          <ul class="list-group list-group-flush">
            <?php
            include_once "../class/product_class.php";
            $product = new products_class();
            $show_danhmuc = $product->show_loaihang();
            if (isset($show_danhmuc)) {
              while ($row = $show_danhmuc->fetch_assoc()) {
            ?>
                <a style="text-decoration: none; color:white;" href="./loaihang.php?id_loaihang=<?php echo $row['id_loaihang'] ?>">
                  <li class="list-group-item"><?php echo $row['ten_loaihang']; ?></li>
                </a>
            <?php
              }
            }
            ?>
          </ul>
        </div>
        <div class="card ">
          <div class=" card-header text-white bg-dark">
            <span>TOP 10 YÊU THÍCH</span>
          </div>
          <ul class="list-group list-group-flush">
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row  yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row  yeu_thich">
              <div class="col-md-2 ">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row  yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text  yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
            <div class="row yeu_thich">
              <div class="col-md-2">
                <img src="./image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col">
                <div class="card-body">
                  <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                </div>
              </div>
            </div>
          </ul>
        </div>
      </div>
    </div>
    <hr>
    <div class="col-sm-12 ">
      <div class="row row-cols-1 row-cols-md-4 g-4">
        <?php
        include_once "../class/product_class.php";
        $product = new products_class();
        $show = $product->show_sanpham();
        if (isset($show)) {
          while ($row = $show->fetch_assoc()) {
        ?>
            <div class="col">
              <div class="card h-100">
                <a href="./chi_tiet.php?idchitiet=<?php echo $row['id_sanpham']; ?>"><img style="transform: scale(1);" src="../act/upload/<?php echo $row['img_sanpham']; ?>" class="card-img-top" alt="..."></a>
                <div class="card-body">
                  <a href="./chi_tiet.php?idchitiet=<?php echo $row['id_sanpham']; ?>" style="text-decoration: none;color: black;">
                    <h5 class="card-title"><?php echo $row['ten_sanpham']; ?></h5>
                  </a>
                  <a href="./chi_tiet.php?idchitiet=<?php echo $row['id_sanpham']; ?>" style="text-decoration: none; color:black;">
                    <p class="card-text">Giá : <?php echo $row['gia']; ?>VNĐ</p>
                    <p>
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
                  <small class="text-muted">Last updated <?php echo $row['ngay_nhap']; ?></small>
                </div>
              </div>
            </div>
        <?php
          }
        }
        ?>
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