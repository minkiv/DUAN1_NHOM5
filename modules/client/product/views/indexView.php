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
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css" />
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
                <form action="?role=client&mod=product&action=find" method="post">
                <input type="text" placeholder="Tìm kiếm sản phẩm ..." name="kyw" value="<?php echo (isset($_GET['kyw'])) ? $_GET['kyw'] : ''?>" >
                <button type = "submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
            <div class="dropdown" style="float:right;">
                <?php if (is_auth()) : ?>
                    <a href="?role=client&mod=users&idUS=<?php echo $_SESSION['auth']['id'] ?>"><button class="dropbtn"> <span class="material-symbols-outlined">
sentiment_very_satisfied
</span></button></a>
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
                <h4>Danh mục</h4>
                <ul>
                <?php
                    foreach ($categories as $cat ) {
                        echo '<li><a href="?role=client&mod=product&action=category&id_cat='.$cat['id'].'">'.$cat['name'].'</a></li>';
                    }
                    ?>
                </ul>
            </div>
            <div class="box">
                     <div>
                     <h4>Tất cả sản phẩm</h4>
                     </div>
                     <div class="product">  
                        <?php
                        foreach ($production as $product) { ?>
                              <div class="css">
                              <div class="product-item">
                                  <a href="?role=client&mod=product&action=detail&id_prod=<?php echo $product['id']?>">
                              <img src="./public/uploads/<?php echo $product['thumb'];?>" alt="Sản phẩm 1">
                              <h5><?php echo  $product['title'] ; ?></h5>
                              <p>Giá : <?php echo  $product['price'] ; ?>,000 đ </p>
                              <div class="thanhtoan"><a href="?mod=product&id=<?php echo $product['id']?>"><button type="submit"><i class="bi bi-cart-plus-fill"></i></button></a></div>
                              </a>
                              </div>
                              </div>
                        <?php  } ?>
                    </div>
            </div>
            <div class="box-right">
                <div class="my-cart">
                <h4>Giỏ hàng của tôi</h4> 
                </div>
                <?php
                    if(isset($cart['buy'])){
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
    <div class="num-cup">
    <img src="./public/images/icon-glass-tea.png"  alt="">
    <p >x <?php echo  $num_cup;?> = <?php echo  $total;?>,000đ</p>
    </div>
    <?php if($num_cup!=0){?>
        <a href="?mod=cart" class="bt-bill"><button>Thanh toán</button></a>
    <?php }else{?>
        <a href="?mod=product" class="bt-bill"><button>Thanh toán</button></a>
    <?php }?>
    </div>
        </div>
    </div>
</body>
</html>