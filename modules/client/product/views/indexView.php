<?php
//  echo "<pre>";
//  print_r($production);
//  echo "</pre>";
?>

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
                <form action="" method="post">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="kyw" >
                </form>
            </div>
            <div class="dropdown" style="float:right;">
                <?php if (is_auth()) : ?>
                    <button class="dropbtn"><?php echo get_auth()['full_name'] ?></button>
                    <div class="dropdown-content">
                    <?php if (is_admin()): ?>
                        <div class="sign-in">
                            <a href="?role=admin">Trang quản trị</a>
                        </div>
                    <?php endif; ?>
                    <div class="sign-in">
                                <a href="?role=client&mod=auth&action=update">Cập nhật tài khoản</a>
                        </div>
                        <div class="sign-in">
                                <a href="?role=client&mod=auth&action=logout">Đăng xuất</a>
                        </div>
                    <?php else: ?>
                        <div class="sign-in">
                            <a href="?role=client&mod=auth&action=index">Đăng nhập</a>
                        </div>
                    <?php endif; ?>
                    </div>
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
                    <a href="?mod=cart&id=<?php echo $product['id']?>"><input type="submit"  value="+"></a>
                        </div>
                        </a>
                      <?php  } ?>
                </div>
            </div>
            <div class="box-right">
                <h5>Giỏ hàng của tôi</h5> 
                <?php
                    if(isset($cart)){
                        foreach($cart['buy'] as $item){
                ?>
                
                    <table border="1">
                    <tr>
                    <td><?php echo $item['id']?></td>
                    <td><?php echo $item['title']?></td>
                    <td><?php echo $item['price']?></td>
                    <td><input type="number" min="1" max="30"name="qty[<?php echo $item['id']?>]"value="<?php echo $item['qty']?>"></td>
                    <td><?php echo $item['sub_total']?></td>
                    <td><a href="?mod=cart&action=delete&id=<?php echo $item['id']?>">Xóa</a></td>
                    </tr>
                    </table>
                    <?php
            } 
        ?>
        <?php
        }else{ 
            echo "<p>Chưa có sản phẩm nào</p>";
        }
    ?>
                <input type="submit" value="Xóa tất cả">
                <input type="submit" value="Thanh toán">
            </div>
        </div>
    </div>
</body>
</html>