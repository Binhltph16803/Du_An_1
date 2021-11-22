<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
</head>
<body>
    <div class="duan1">
        <div class="header">
            <div class="logo">
                <img src="../image/logo.png" alt="" width="70px">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="">Trang chủ</a></li>
                    <li><a href="">Sản phẩm</a></li>
                    <li><a href="">Tin tức</a></li>
                    <li><a href="">Liên hệ & Hỗ trợ</a></li>
                </ul>
            </div>
            <div class="search">
                <input type="text" placeholder="Search...">
            </div>
            <div class="button">
                <button type="submit"><img src="../image/search.png" alt="" width="26px"></button>
            </div>
            <div class="login">
                <button type="submit">Login</button>
            </div>
            <div class="sign">
                <button type="submit">Sign-up</button>
            </div>
        </div>
        <div class="banner">
            <div class="banner_chinh">
                <div class="slideshow-container">
                    <div class="mySlides fade">
                      <img src="../image/banner_chinh.jpg" style="width:1113px" height="465px">
                    </div>
                    <div class="mySlides fade">
                      <img src="../image/banner_chinh2.jpg" style="width:1113px" height="465px">
                    </div>
                    <div class="mySlides fade">
                      <img src="../image/banner_chinh3.jpg" style="width:1113px" height="465px">
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
            <div class="banner_phu">
                <div class="phu1">
                    <img src="../image/banner_phu1.jpg" alt="" width="375px">
                </div>
                <div class="phu2">
                    <img src="../image/banner_phu2.jpg" alt="" width="375px">
                </div>
            </div>
        </div>
        <div class="main">
            <div class="box_trai">
                <div class="dong">
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                </div>
                <div class="dong">
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                    <div class="san_pham">
                        <div class="img">
                            <img src="../image/san_pham.jpg" alt="" width="350px">
                        </div>
                        <h3>ÁO PHÔNG DIOR ERODED LOGO 3D</h3>
                        <h4>Price: 76$</h4>
                        <p>Trademark: Dior</p>
                    </div>
                </div>
            </div>
            <div class="box_phai">
                <div class="danh_muc">
                    <div class="dm">DANH MỤC SẢN PHẨM</div>
                    <div class="sp">
                        <ul>
                            <li><a href="">Đồ nam</a></li>
                            <li><a href="">Đồ nữ</a></li>
                            <li><a href="">Đồ trẻ em</a></li>
                            <li><a href="">Đồ công sở</a></li>
                            <li><a href="">Đồ ngủ</a></li>
                        </ul>
                    </div>
                </div>
                <div class="top">
                    <div class="top_yt">TOP 10 YÊU THÍCH</div>
                    <div class="top_sp">
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                        <div class="sp_yt">
                            <img src="../image/san_pham.jpg" alt="">
                            <a href="">ÁO PHÔNG DIOR ERODED LOGO 3D</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <h2>TIN TỨC MỚI NHẤT</h2>
        <div class="main2">
            <div class="ttmn">
                <div class="tin_tuc">
                    <a href="https://vietgiaitri.com/len-do-chat-nhu-nuoc-cat-nu-tiktoker-so-huu-trieu-fans-20211108i6142396/">
                        <img src="../image/tin_tuc2.jpg" width="250px" alt="">
                        <div class="nd">
                            <h3>Lên đồ ‘chất như nước cất’, nữ TikToker sở hữu triệu fans</h3>
                            <p>Xuất hiện với nhiều gu thời trang lạ mắt và mỗi lần lên đồ, nữ TikToker có nickname Gia Thị Linh đều nhận về những lời khen chất như nước cất từ netizen.</p>
                        </div>
                    </a>
                </div>
                <div class="tin_tuc">
                    <a href="https://www.24h.com.vn/xu-huong-thoi-trang/long-thu-gia-la-mon-do-can-co-cho-mua-thu-dong-c215a1304903.html">
                        <img src="../image/tin_tuc1.jpg" width="250px" height="187.5px" alt="">
                        <div class="nd">
                            <h3>Lông thú giả là món đồ cần có cho mùa thu đông</h3>
                            <p>Đối với nhiều bộ sưu tập Thu/Đông 2021, khi thời tiết xuống thấp, quần áo và phụ kiện làm từ lông thú giả sẽ là thứ cần phải mua.</p>
                        </div>
                    </a>
                </div>
            </div>
            <div class="ttmn">
                <div class="tin_tuc">
                    <a href="https://vietgiaitri.com/len-do-chat-nhu-nuoc-cat-nu-tiktoker-so-huu-trieu-fans-20211108i6142396/">
                        <img src="../image/tin_tuc3.jfif" width="250px" height="333.21px" alt="">
                        <div class="nd">
                            <h3>Mặc áo trench coat chuẩn đẹp như gái Pháp với 13 cách lên đồ không hề cầu kỳ</h3>
                            <p>Gái Pháp mặc áo trench coat theo những cách nàng nào cũng áp dụng được.
                                Thời tiết đã chuyển lạnh và chúng ta chính thức bước vào mùa đông.</p>
                        </div>
                            </a>
                </div>
                <div class="tin_tuc">
                    <a href="https://suckhoedoisong.vn/vay-hoa-nu-tinh-va-quyen-ru-169211107045049003.htm">
                        <img src="../image/tin_tuc4.jpg" width="250px" alt="">
                        <div class="nd">
                            <h3>Váy hoa, nữ tính và quyến rũ</h3>
                            <p>Váy hoa (nền hoa) được coi tinh túy của nữ tính và xu hướng muôn thưở.
                                Thích hợp với tất cả người đẹp không phụ thuộc tuổi tác, sắc đẹp và tạo dáng hình thể,...
                            </p>
                        </div>    
                    </a>
                </div>
            </div>
        </div>
        <span>.</span>
        <div class="footer">
            <div class="footer1">
                <img src="../image/logo.png" alt="" width="150px">
                <div class="mxh">
                    <div class="face">
                        <img src="../image/face.png" alt="" width="30px">
                    </div>
                    <div class="tw">
                        <img src="../image/tw.png" alt="" width="25px">
                    </div>
                    <div class="ig">
                        <img src="../image/ig.png" alt="" width="30px">
                    </div>
                    <div class="ytb">
                        <img src="../image/ytb.png" alt="" width="30px">
                    </div>
                </div>
            </div>
            <div class="footer2">
                <h3>About Us</h3>
                <h4>Address</h4>
                <p>Store & Office
                    Jl. Setrasari Kulon III, No. 10-12, Sukarasa, Sukasari, Bandung, Jawa Barat, Indonesia 40152</p>
            </div>
            <div class="footer3">
                <h3>Get in touch</h3>
                <div class="ft">
                    <div class="nd">
                        <h4>Phone</h4>
                        <h4>Service Center</h4>
                        <h4>Customer Service</h4>
                    </div>
                    <div class="sdt">
                        <p>022-20277564</p>
                        <p>0811-233-8899</p>
                        <p>0811-235-9988</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>