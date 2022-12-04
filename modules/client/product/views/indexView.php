<?php
//  echo "<pre>";
//  print_r($production);
//  echo "</pre>";
?>
<?php
    // show_array($cart);
    // die;
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
<link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
            <a href="?role=client&mod=product">
                <img src="./public/images/mainlogo.png" alt="Ảnh logo">
                </a>
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
                    <a href="?mod=product&id=<?php echo $product['id']?>"><input type="submit"  value="+"></a>
                        </div>
                        </a>
                      <?php  } ?>
                </div>
            </div>
            <div class="box-right">
                <div class="my-cart">
                <h5>Giỏ hàng của tôi</h5> 
                <a href="">Xóa tất cả</a>
                </div>
                
                <hr>
                <?php
                    if(isset($cart)){
                        foreach($cart['buy'] as $item){
                ?>
                <div class="cart-items">
                    <div class="cart-item">
                        <div class="cart-item-tt"><?php echo $item['title']?></div>
                        <p><?php echo $item['price']?>,000 x <?php echo $item['qty']?> = <?php echo $item['sub_total']?>,000</p>
                    </div>
                    <div class="item-delete">
                    <a href="?mod=product&action=delete&id=<?php echo $item['id']?>" class="btn btn-default ">
                    <i class="bi bi-trash"></i>  
                    </a>
                    </div>
                </div>
                    <?php
            } 
        ?>
        <?php
        }else{ 
            echo "<p>Chưa có sản phẩm nào</p>";
        }
    ?>
    <hr>
    <div class="num-cup">
    <img src="./public/images/icon-glass-tea.png"  alt="">
    <p >x <?php echo  $num_cup;?> = <?php echo  $total;?>,000đ</p>
    </div>
    
    
                <a href="?mod=cart" class="bt-bill"><button>Thanh toán</button></a>
            </div>
        </div>
    </div>
</body>
</html>