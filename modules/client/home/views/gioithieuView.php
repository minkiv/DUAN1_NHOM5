
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
            <div class="header-gioithieu" style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(public/images/breadcrumb_bg5.png) no-repeat center;">
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
                        <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                        <span class="input-group-text border-0" id="search-addon">
                            <i class="fas fa-search"></i>
                        </span>
                    </div> 
                </div>
                <h1>GIỚI THIỆU</h1>
            </div>
            <div class="body">
                <div class="gioithieu-ct">
                    <h1>Giới thiệu</h1>
                    <p>Luôn tâm huyết với việc khai thác nguồn nông sản Việt Nam để tạo ra những ly thức uống tươi ngon, an toàn và giàu giá trị dinh dưỡng, ToCoToCo mở cửa hàng đầu tiên vào năm 2013, mang trong mình lòng đam mê và khát vọng xây dựng một thương hiệu trà sữa thuần Việt, mang đậm hương vị quê hương.ToCoToCo tin rằng thưởng thức một ly trà sữa được pha chế từ trà Mộc Châu, trân châu từ sắn dây Nghệ An hay mứt dâu tằm từ Đà Lạt sẽ là những trải nghiệm hoàn toàn khác biệt và tuyệt vời nhất cho những khách hàng của mình.
</p><p>
                        Cũng chính từ sự khác biệt đó, thương hiệu ToCoToCo đã có những bước phát triển thần tốc và dần chiếm lĩnh thị trường trà sữa với hơn 200 cửa hàng trải dài trên toàn quốc. Cột mốc năm 2018 đánh dấu ước mơ vươn xa biển lớn của thương hiệu khi ToCoToCo chính thức đặt chân lên nước Mỹ và tiếp nối thành công tại Úc, Nhật Bản, Hàn Quốc, Singapore,…
                    </p><p>             
                        Hành trình đầy đam mê và tâm huyết này sẽ tiếp tục nhân rộng để lan tỏa những ly trà thuần khiết nông sản Việt đến mọi miền trên Việt Nam và thế giới.</p>
                        <div class="gioithieu-img">
                            <img src="./public/images/1.webp" alt="">
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
