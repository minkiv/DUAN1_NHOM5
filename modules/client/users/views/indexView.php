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
                <div class="menu_new"><a href="?role=client&mod=users&action=update&id=<?php echo $_SESSION['auth']['id'] ?>">Đổi thông tin tài khoản</a></div>
                <div class="menu_new"><a href="?role=client&mod=users&action=bill">Đơn hàng của tôi</a></div>
            </div>
            <div class="row">
                <div class="bg-top-account" style="background-image: url(./public/images/50ca1b3b1e97fa066a64c09f7cf0cc9f.jpg);"></div>
                <div class="account-content-inner">
                    <div class="th_ria">
                        <div class="th_form">
                            <label for="">Tên khách hàng</label> <br>

                            <input type="text" disabled name="" id="" value="<?php echo $_SESSION['auth']['full_name'] ?>" >

                        </div>
                        <div class="th_form">
                            <label for="">Mất khẩu</label> <br>
                            <input type="text" disabled name="" id="" value="<?php echo $_SESSION['auth']['password'] ?>">
                        </div>
                        <div class="th_form">
                            <label for="">Số điện thoại</label> <br>
                            <input type="text" disabled name="" id="" value="<?php echo $_SESSION['auth']['numberphone'] ?>">
                        </div>
                    </div>
                    <div class="th_let">
                        <div class="th_form">
                            <label for="">Email</label> <br>
                            <input type="text" disabled name="" id="" value="<?php echo $_SESSION['auth']['email'] ?>">
                        </div>
                        <div class="th_form">
                            <label for="">Địa chỉ</label> <br>
                            <input type="text" disabled name="" id="" value="<?php echo $_SESSION['auth']['address'] ?>">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>