<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/bills.css">
</head>

<body>
    <div class="conten">
        <div class="new">
            <div class="menu">
                <div class="menu_new"><a href="?role=client&mod=home">Trang chủ</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&idUS=<?php echo $_SESSION['auth']['id'] ?>">Thông tin tài khoản</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&action=update&id=<?php echo $_SESSION['auth']['id'] ?>">Đổi thông tin tài khoản</a></div>
                <div class="menu_new"><a href="?role=client&mod=bill" style="color: rgb(186, 115, 8);">Đơn hàng của tôi</a></div>
            </div>
            <div class="row">
                <div class="bg-top-account"></div>
                <div class="list-products">
                    <?php foreach ($bills as $bill) : ?>
                        <div class="product">
                            <img src="./public/uploads/<?=$bill['thumb']?>" alt="" srcset="">
                            <div class="pro-detail">
                                <h5>Tên sản phẩm: <?php echo ($bill['title']) ?></h5>
                                <p class="p-price">Giá: <?php echo ($bill['price']) ?></p>
                                <p class="p-count">Số lượng: <?php echo ($bill['soLuong'])?></p>
                                <p class="p-total">Tổng tiền: <?php echo ($bill['sub_total'])?></p>
                            </div>
                            <div class="tt">
                            <p><?php echo $bill['trangThai']==0 ?'Đang giao hàng' :'Đã giao hàng' ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>