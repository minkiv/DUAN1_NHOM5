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
    <link rel="stylesheet" href="./public/css/cart.css">
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
        <?php $notifications = get_notification(); ?>
        <form action="?mod=cart&action=luudonhang" method="post">
        <div class="information">
        <div class="information-users">
            <div class="information-user">
                <h3>Thông tin giao hàng</h3>
                <div class="form_user">
                    <input type="text" name="name" id="" placeholder="Tên người nhận"> <br>
                    <input type="text" name="phone" id="" placeholder="Số điện thoại người nhận">
                </div>
                <div class="form_user">
                    <h4>Giao đến</h4>
                    <input type="text" name="address" id="" placeholder="Địa chỉ người nhận"> <br>
                    <input type="text" name="clientNote" id="" placeholder="Ghi chú">
                </div>
                <div class="form_user">
                    <input type="text" name="email" id="" placeholder="Email"> <br>
                </div>
                <div>
                    <p>Thời gian : </p>
                </div>
            </div>
            <div class="information-pay">
                <h4>Phương thức thanh toán</h4>
                <input type="radio" name="type" id=""> <span>Thanh toán khi nhận hàng</span><br>
                <input type="radio" name="type" id=""><span>Thanh toán qua ví momo</span>
            </div>
        </div>
        <div class="information-row">
            <h3>Thông tin đơn hàng</h3>
            <?php
        if(isset($cart)){
    ?>
            <?php
            foreach($cart['buy'] as $item){
        ?>
            <div class="row-1">
                <div class="">
                    <img src="./public/images/<?php echo $item['thumb']?>" alt="">
                </div>
                <div>
                    <h5><?php echo $item['title']?></h5> Giá: <?php echo $item['price']?>
                    <p>Số lượng:<?php echo $item['qty']?></p>
                    <p>Giá tiền : <b><?php echo $item['sub_total']?></b>đ</p>
                </div>
            </div>
            <?php
            } 
        ?>
            
            <div class="row-2">
                <div class="">
                    <p>Số lượng :
                        <b><?php echo $num_order;?></b>cốc</p>
                </div>
                <div class="row_tong">
                    <p>Tổng : <b><?php echo currency_format($total); ?></b> đ</p>
                    <p>Phí vẫn chuyển : <b>##</b>đ</p>
                    <p>Khuyến mãi : <b>##</b>đ</p>
                    <p><b>Tổng cộng :<?php echo currency_format($total); ?> </b></p>
                </div>
            </div>
            <?php
        }else{ 
            echo "Không co phan tu nao trong gio hang";
        }
    ?>
            <div class="note">
                <textarea name="adminNote" id="" cols="30" rows="3" placeholder="Ghi chú"></textarea>
            </div>
            <div class="order">
                <input type="submit" value="Đặt hàng">
            </div>
            <div class="order_re">
                <a href="?mod=product">Tiếp tục mua hàng</a>
            </div>
        </div>
        
    </div>
    </form>
</div>
</div>


</body>
</html>