<?php
 echo "<pre>";
  print_r($products);
 echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href=".public/css/stylepro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src=".public/images/logo.png" alt="Ảnh logo">
            </div>

            <div class="search">
                <input type="text" placeholder="Tìm kiếm sản phẩm" >
            </div>
            <div class="sign-in">
                <input type="submit" value="Đăng nhập">
            </div>
        </div>
        <div class="content">
            <div class="box-left">
                
                <h5>Danh mục</h5>
                <br>
                <ul>

                    <?php
                    
                    foreach ($categories as $cat ) {
                        echo '<li><a href="#">'.$cat['name'].'</a></li>';
                    }
                    ?>
                
                </ul>
            </div>
            <div class="box">
                <h5>Món nổi bật</h5>
                <div class="product">
                    
                    <div class="product-item">
                        <img src=".public/images/logo-2.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit"  value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                </div>
                <h5>Trà sữa</h5>
                <div class="product">
                    
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                </div>
                <div class="product">
                    
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                </div>
                <div class="product">
                    
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                    <div class="product-item">
                        <img src=".public/images/logo.png" alt="Sản phẩm 1">
                    <h5>Sữa chua mận hạt sen</h5>
                    <p>31,000 đ <del>48,000 đ</del></p>
                    <input type="submit" value="+">
                    </div>
                </div>
            </div>
            <div class="box-right">
                <h5>Giỏ hàng của tôi</h5> 
                <p>Chưa có sản phẩm nào</p>
                    <table border="1">
                        <tr>    
                            <td> 1 cốc </td>
                            <td> x 1</td>
                            <td> Thành tiền</td>
                        </tr>
                    </table>
                <input type="submit" value="Xóa tất cả">
                <input type="submit" value="Thanh toán">
            </div>
        </div>
    </div>
</body>
</html>