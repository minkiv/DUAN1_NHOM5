

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/stylepro.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="./public/images/mainlogo.png" alt="Ảnh logo">
            </div>

            <div class="search">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." >
            </div>
            <div class="sign-in">
            <?php if (is_auth()) : ?>
                <strong><?php echo get_auth()['full_name'] ?></strong>
                    <?php if (is_admin()): ?>
                        <li>
                            <a href="?role=admin">Trang quản trị</a>
                        </li>
                    <?php endif; ?>
                        <div class="logout">
                            <li>
                                <a href="?role=client&mod=auth&action=logout">Đăng xuất</a>
                            </li>
                        </div>
                    </ul>
                </div>
                        </div>
                    </div>
                    <?php else: ?>
                        <a href="?role=client&mod=auth&action=index">Đăng nhập</a>
                    <?php endif; ?>
                
            </div>
        </div>
        <div class="content">
            <div class="box-left">
                
                <h5>Danh mục</h5>
                <br>
                <ul>

                <?php
                    foreach ($categories as $cat ) {
                        echo '<li><a href="?role=client&mod=product&action=category&id_cat='.$cat['id'].'">'.$cat['name'].'</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="box">
                     <h5>Tất cả sản phẩm</h5>
                <div class="product">  
                <?php
                        foreach ($production as $product) { ?>
                        <a href="?role=client&mod=product&action=detail&id_prod=<?php echo $product['id']?>">
                        <div class="product-item">
                        <img src="./public/uploads/<?php echo $product['thumb'];?>" alt="Sản phẩm 1">
                    <h5><?php echo  $product['title'] ; ?></h5>
                    <p><?php echo  $product['price'] ; ?>,000 đ <del>48,000 đ</del></p>
                    <input type="submit"  value="+">
                    </div>
                        </a>
                      <?php  } ?>
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