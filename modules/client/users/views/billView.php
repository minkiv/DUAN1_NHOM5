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
    <div class="header">
            <div class="logo">
                <a href="?role=client&mod=product">
                    <img src="./public/images/mainlogo.png" alt="Ảnh logo">
                </a>
            </div>
        </div>
        <div class="new">
            <div class="menu">
                <div class="menu_new"><a href="?role=client&mod=home">Trang chủ</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&idUS=<?php echo $_SESSION['auth']['id'] ?>" style="color: rgb(186, 115, 8);">Thông tin tài khoản</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&action=update&idUS=<?php echo $_SESSION['auth']['id'] ?>">Đổi thông tin tài khoản</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&action=bill">Đơn hàng của tôi</a></div>
            </div>
            <div class="row">
                <div class="bg-top-account"></div>
                <div class="list-products">
                    <?php foreach ($bills as $bill) : ?>
                        <div >
                            <a class="product" href="?role=client&mod=product&action=detail&id_prod=<?php echo $bill['id']?>">
                            <img src="./public/uploads/<?=$bill['thumb']?>" alt="" srcset="">
                            <div class="pro-detail">
                                <h5>Tên sản phẩm: <?php echo ($bill['title']) ?></h5>
                                <p class="p-price">Giá: <?php echo ($bill['price']) ?>,000đ</p>
                                <p class="p-count">Số lượng: <?php echo ($bill['soLuong'])?>cốc</p>
                                <p class="p-total">Tổng tiền: <?php echo ($bill['sub_total'])?>,000đ</p>
                            </div>
                            <div class="tt">
                            <p><?php echo $bill['trangThai']==0 ?'Đang giao hàng' :'Đã giao hàng' ?></p>
                            </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>