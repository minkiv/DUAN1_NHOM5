<?php
//  echo "<pre>";
//  print_r($products);
//  echo "</pre>";
?>

<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trang chủ</title>
        <!-- Bootstrap CSS -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="./public/css/style.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

</head>
    <body>

        <div class="container">
            <div class="header" style="background-image: url(./public/images/Slide_banner-1-1.jpg);">
                <div class="header-ct" id="navbar">
                    <img src="./public/images/mainlogo.png" alt="" class="logo">
                    <div class="menu">
                        <ul>
                            <li><a href="?role=client&mod=home">Trang chủ</a></li>
                            <li><a href="?role=client&mod=home&action=gioithieu">Giới thiệu</a></li>
                            <!-- <li><a href="sanpham.html">Sản phẩm<span class="material-symbols-outlined">
                                expand_more
                                </span></a></li> -->
                            <li class="dropdown">
                                <a href="?role=client&mod=product" class="dropbtn">Sản phẩm<span class="material-symbols-outlined">
                                    expand_more
                                    </span></a>
                                <div class="dropdown-content">
                                <?php foreach ($categories as $cat) {
                                    echo '<a href="?role=client&mod=product&action=category&id_cat='.$cat['id'].'">'.$cat['name'].'</a>';
                                }
                                  ?>
                                </div>
                            </li>
                            <li class="dropdown">
                                <a href="?role=client&mod=home&action=news&id_n=1" class="dropbtn">Tin tức<span class="material-symbols-outlined">
                                    expand_more
                                    </span></a>
                                    <div class="dropdown-content">
                                <?php foreach ($news as $tt) {
                                    echo '<a href="?role=client&mod=home&action=news&id_n='.$tt['id'].'">'.$tt['title'].'</a>';
                                }
                                  ?>
                                </div>
                            </li>
                            
                    </div>
                    <div class="input-group rounded" style="width: 240px">
                        <!-- <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span> -->
                    </div> 
                </div>
            </div>
            <div class="body">
                <h3>Bốn non nước Menu</h3>
                <H2>SẢN PHẨM NỔI BẬT</H2>
                <img class="logo2" src="" alt="">
                <div class="list-item">
                <?php foreach ($products as $sp) {
                    echo '<a href="?role=client&mod=product&action=detail&id_prod='.$sp['id'].'"><div class="item">
                    <img src="./public/uploads/'.$sp['thumb'].'" alt="">
                    <div class="item-desc">
                        <h5>'.$sp['title'].'</h5>
                        <p class="price">'.$sp['price'].'.000 đ</p>
                        <button>Đặt hàng</button>
                    </div>
                </div> </a>';
                }
                ?>
                </div>
                <div class="xemthem">
                    <a href="?role=client&mod=product"><button class="btn-moresp">Xem Thêm</button></a>
                </div>
                <div class="banner2" style="background-image: url(./public/images/banner_about_us.png);">
                    <div class="nt">

                    </div>
                    <div class="banner-ct">
                        <h3>Bốn lon nước Story</h3>
                        <h2>Về chúng tôi</h2>
                        <img src="./public/images/home_line.webp" alt="">
                        <p>Bên cạnh niềm tự hào về những ly trà sữa ngon-sạch-tươi, chúng tôi luôn tự tin mang đến khách hàng những trải nghiệm tốt nhất về dịch vụ và không gian</p>
                        <div class="button-story">
                            <a href="?role=client&mod=home&action=gioithieu">XEM THÊM</a>
                        </div>
                    </div>
                </div>
                <div class="third-ct">
                    <div class="thirdct-title">
                        <h3>Tin Tức và Khuyến Mãi</h3>
                        <h2>KHÁM PHÁ BỐN LON NƯỚC NHẬN NGAY KHUYẾN MÃI</h2>
                        <img class="logo2" src="./public/images/home_line.webp" alt="">
                    </div>
                    <div class="third-ctmain">
                        <div class="thirdct-left">
                            <a class="first-blocka" href="?role=client&mod=home&action=news&id_n=1">
                                <div class="first-block">
                                    <img src="./public/images/Hinh-thumb-2-scaled.jpg" alt="" class="first-blockimg">
                                    <h5>BỐN LON NƯỚC "CHÁY" CÙNG HÀNG TRĂM HỌC SINH AMSTERDAM VÀ CHUYÊN NGOẠI NGỮ TRONG CHƯƠNG TRÌNH CAMP ALETHEIA</h5>
                                    <P>Tiếp nối các chương trình hướng đến cộng đồng và tài trợ sân chơi bổ ích cho các bạn học sinh, sinh viên, Bốn non nước tự hào khi đồng hành cùng[...]</P>
                                    <a href="tintuc.html" ><button class="btn-block">XEM THÊM</button></a>
                                </div>
                            </a>
                            
                            <div class="second-block">
                                <div class="secondbl-item">
                                    <a href="?role=client&mod=home&action=news&id_n=1">
                                        <img src="./public/images/SPM_CHOCO_zalo.png" alt="">
                                        <h5>CÙNG BỐN LON NƯỚC NHÂN ĐÔI SỰ NGỌT NGÀO MÙA LỄ HỘI</h5>
                                    </a>
                                </div>
                                <div class="secondbl-item">
                                    <a href="?role=client&mod=home&action=news&id_n=1">
                                        <img src="./public/images/SPM_CHOCO_zalo.png" alt="">
                                        <h5>CÙNG BỐN LON NƯỚC NHÂN ĐÔI SỰ NGỌT NGÀO MÙA LỄ HỘI</h5>
                                    </a>
                                </div>
                                <div class="secondbl-item">
                                    <a href="?role=client&mod=home&action=news&id_n=1">
                                        <img src="./public/images/SPM_CHOCO_zalo.png" alt="">
                                        <h5>CÙNG BỐN LON NƯỚC NHÂN ĐÔI SỰ NGỌT NGÀO MÙA LỄ HỘI</h5>
                                    </a>
                                </div>
                                <div class="secondbl-item">
                                    <a href="?role=client&mod=home&action=news&id_n=1">
                                        <img src="./public/images/SPM_CHOCO_zalo.png" alt="">
                                        <h5>CÙNG BỐN LON NƯỚC NHÂN ĐÔI SỰ NGỌT NGÀO MÙA LỄ HỘI</h5>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="thirdct-right">
                            <div class="block1-right">
                                <img src="./public/images/Slide_banner-3.jpg" alt="">
                            </div>
                            <div class="block2-right">
                                <div class="block2-item">
                                    <img src="./public/images/thumbnail-3.jpg" alt="">
                                    <h5>Bốn Lon Nước đạt top 10 thương hiệu Châu Á Thái Bình Dương 2021</h5>
                                </div>
                                <div class="block2-item">
                                    <img src="./public/images/thumbnail-3.jpg" alt="">
                                    <h5>Bốn Lon Nước đạt top 10 thương hiệu Châu Á Thái Bình Dương 2021</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="footer-ct">
                    <div class="footer-section1">
                        <div class="footer-logo">
                            <img src="./public/images/mainlogo.png" alt="">
                        </div>
                        <div class="footer-inf">
                            <h4>CÔNG TY CP TM & DV TACO VIỆT NAM</h4>
                            <p><span class="material-symbols-outlined icon" >
                                location_on
                                </span> Tầng 2 tòa nhà T10, Times City Vĩnh Tuy, Hai Bà Trưng, Hà Nội.</p>
                            <p><span class="material-symbols-outlined icon">
                                phone_in_talk_watchface_indicator
                                </span> 0989328421</p>
                            <p><span class="material-symbols-outlined icon">
                                mail
                                </span> info@bonlonnuoc.com</p>
                            <p>Số ĐKKD: 0106341306. Ngày cấp: 16/3/2017.</p>
                            <p>Nơi cấp: Sở kế hoạch và Đầu tư Thành phố Hà Nội</p>
                            <a href=""></a>
                        </div>
                        <div class="footer-aboutus">
                            <h4>VỀ CHÚNG TÔI</h4>
                            <p>Giới thiệu về Bốn Lon Nước</p>
                            <p>Nhượng quyền</p>
                            <p>Tin tức khuyến mại</p>
                            <p>Cửa hàng</p>
                            <p>Quy định chung</p>
                            <p>TT liên hệ & ĐKKD</p>
                        </div>
                        <div class="footer-privacy">
                            <h4>CHÍNH SÁCH</h4>
                            <p>Chính sách thành viên</p>
                            <p>Hình thức thanh toán</p>
                            <p>Vận chuyển giao nhận</p>
                            <p>Đổi trả và hoàn tiền</p>
                            <p>Bảo vệ thông tin cá nhân</p>
                            <p>Bảo trì, bảo hành</p>
                        </div>
                    </div>
                    <div class="footer-section2">
                        <hr>
                        <div class="ftsection2-ct">
                                <h5>Bốn Lon Nước - Thương hiệu trà sữa tiên phong sử dụng nguồn nông sản Việt Nam</h5>
                                <p>Copyrights 2019 by Bonlonnuoc. All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            window.onscroll = function() {myFunction()};
            
            var navbar = document.getElementById("navbar");
            var sticky = navbar.offsetTop +40;
            
            function myFunction() {
              if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky")
              } else {
                navbar.classList.remove("sticky");
              }
            }
            </script>
        <!-- jQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </body>
</html>
