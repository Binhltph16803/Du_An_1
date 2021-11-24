<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sản phẩm</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/trang_chu.css">
    <link rel="stylesheet" href="../bootstraps/bootstrap-5.1.3-dist/css/bootstrap.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
        <div class="container-fluid">
            <a class="navbar-branch" href="">
                <img src="../image/logo.png" alt="" width="100px">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item px-5"><a class="nav-link" href="">Trang chủ</a></li>
                    <li class="nav-item px-5"><a class="nav-link" href="">Sản phẩm</a></li>
                    <li class="nav-item px-5"><a class="nav-link" href="">Tin tức</a></li>
                    <li class="nav-item px-5"><a class="nav-link" href="">Liên hệ & Hỗ trợ</a></li>
                </ul>
            </div>
                <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
                    <input type="search" class="form-control form-control-dark" placeholder="Search..."
                        aria-label="Search">
                </form>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-light">Login</button>
                </div>
                <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" class="btn btn-warning">Sign-up</button>
                </div>
        </div>
        
    </nav>
    <div class="row ">
        <div class="navbar-branch col">
            <div class="slideshow-container">
                <div class="mySlides fade img-fluid">
                  <img src="../image/banner_chinh.jpg" style="width:965px" height="382px">
                </div>
                <div class="mySlides fade img-fluid">
                  <img src="../image/banner_chinh2.jpg" style="width:965px" height="382px">
                </div>
                <div class="mySlides fade img-fluid">
                  <img src="../image/banner_chinh3.jpg" style="width:965px" height="382px">
                </div>
            </div>
            <br>
                <div style="text-align:center">
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                  <span class="dot"></span> 
                </div>
                
                <script>
                var slideIndex = 0;
                showSlides();
                
                function showSlides() {
                  var i;
                  var slides = document.getElementsByClassName("mySlides");
                  var dots = document.getElementsByClassName("dot");
                  for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";  
                  }
                  slideIndex++;
                  if (slideIndex > slides.length) {slideIndex = 1}    
                  for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                  }
                  slides[slideIndex-1].style.display = "block";  
                  dots[slideIndex-1].className += " active";
                  setTimeout(showSlides, 2000); // Change image every 2 seconds
                }
                </script>
            
        </div>
        <div class="col banner">
            <img class="img-fluid" src="../image/banner_phu1.jpg" alt="" width="306px">
            <img class="img-fluid" src="../image/banner_phu2.jpg" alt="" width="306px">
        </div>
    </div>
        <div class="row main">
            <div class= "col-sm-9 ">
                <div class="row  row-cols-md-3 g-4 san_pham">
                    <div class="col ">
                      <div class="card ">
                          <div class="img">
                            <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                        </div>
                            <div class="card-body">
                          <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                          <p class="card-text">Price: 76$</p>
                          <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="img">
                            <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                            <p class="card-text">Price: 76$</p>
                            <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                      <div class="card">
                        <div class="img">
                            <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                            <p class="card-text">Price: 76$</p>
                            <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                        </div>
                      </div>
                    </div>
                    <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                            <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                            <p class="card-text">Price: 76$</p>
                            <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                              <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                              <p class="card-text">Price: 76$</p>
                              <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                          </div>
                        </div>
                      </div>
                      <div class="col">
                        <div class="card">
                            <div class="img">
                                <img src="../image/san_pham.jpg" class="card-img-top" alt="...">
                            </div>
                          <div class="card-body">
                              <h5 class="card-title">ÁO PHÔNG DIOR ERODED</h5>
                              <p class="card-text">Price: 76$</p>
                              <p class="card-text"><small class="text-muted">Trademark: Dior</small></p>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
            <div class="col">
                <div class="card" >
                    <div class="card-header text-white bg-dark">
                        <span>DANH MỤC SẢN PHẨM</span>
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Đồ Nam</li>
                      <li class="list-group-item">Đồ Nữ</li>
                      <li class="list-group-item">Đồ Trẻ Em</li>
                      <li class="list-group-item">Đồ Công Sở</li>
                      <li class="list-group-item">Đồ Ngủ<li>
                    </ul>
                </div>
                <div class="card " >
                    <div class=" card-header text-white bg-dark">
                        <span >TOP 10 YÊU THÍCH</span>
                    </div>
                    <ul class="list-group list-group-flush">
                        <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row  yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row  yeu_thich">
                            <div class="col-md-2 ">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row  yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text  yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
                            </div>
                            <div class="col">
                              <div class="card-body">
                                <p class="card-text yt">ÁO PHÔNG DIOR ERODED</p>
                              </div>
                            </div>
                          </div>
                          <div class="row yeu_thich">
                            <div class="col-md-2">
                              <img src="../image/san_pham.jpg" width="50px" class="img-fluid rounded-start" alt="...">
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
        <div class="row tin_tuc">
            <h4>TIN TỨC MỚI NHẤT</h4>
            <div class=" row row-cols-1 row-cols-md-2 " >
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
                <div class="row ">
                    <div class="col-md-3">
                      <img src="../image/tin_tuc3.jfif" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h5 class="card-title">Mặc áo trench coat chuẩn đẹp như gái Pháp với 13 cách lên đồ không hề cầu kỳ</h5>
                        <p class="card-text"><small class="text-muted">Gái Pháp mặc áo trench coat theo những cách nàng nào cũng áp dụng được.
                            Thời tiết đã chuyển lạnh và chúng ta chính thức bước vào mùa đông.</small></p>
                      </div>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 " >
                <div class="row ">
                  <div class="col-md-3">
                    <img src="../image/tin_tuc1.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col">
                    <div class="card-body">
                      <h5 class="card-title">Lông thú giả là món đồ cần có cho mùa thu đông</h5>
                      <p class="card-text"><small class="text-muted">Đối với nhiều bộ sưu tập Thu/Đông 2021, khi thời tiết xuống thấp, quần áo và phụ kiện làm từ lông thú giả sẽ là thứ cần phải mua.</small></p>
                    </div>
                  </div>
                </div>
                <div class="row ">
                    <div class="col-md-3">
                      <img src="../image/tin_tuc4.jpg" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col">
                      <div class="card-body">
                        <h5 class="card-title">Váy hoa, nữ tính và quyến rũ</h5>
                        <p class="card-text"><small class="text-muted">Váy hoa (nền hoa) được coi tinh túy của nữ tính và xu hướng muôn thưở.
                            Thích hợp với tất cả người đẹp không phụ thuộc tuổi tác, sắc đẹp và tạo dáng hình thể,...</small></p>
                      </div>
                    </div>
                </div>
            </div>
        
        
    </div>
    <footer class=" footer row row-cols-7 py-5 my-5 border-top">
        <div class="col-1">

        </div>
        <div class="col">
            <img src="../image/logo.png" alt="" width="200px">
            <div class="row">
                <div class="col"><img src="../image/face.png" alt="" width="30px"></div>
                <div class="col"><img src="../image/tw.png" alt="" width="23px"></div>
                <div class="col"><img src="../image/ig.png" alt="" width="30px"></div>
                <div class="col"><img src="../image/ytb.png" alt="" width="30px"></div>
            </div>
        </div>

        <div class="col">

        </div>

        <div class="col">
            <h5>About Us</h5>
            <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h6>Address</h6></a></li>
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
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h6>Phone    022-20277564</h6></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h6>Service     0811-233-8899</h6></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Center</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted"><h6>Customer     0811-235-9988</h6></a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Service</a></li>
            </ul>
        </div>
        <div class="col-1">

        </div>
    </footer>
    </div>
    
    
<script src="../bootstraps/bootstrap-5.1.3-dist/js/bootstrap.js"></script>
</body>
</html>