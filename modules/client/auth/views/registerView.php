<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng kí </title>
    <link rel="stylesheet" href="./public/css/login.css">
</head>

<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./public/images/north_background_login_desktop.png) no-repeat center;background-size: 100%;">
    <div class="formdang" >
        <div class="formdangki">
            <img src="./public/images/mainlogo.png" alt="">
            <form action="http://localhost/DUAN1_NHOM5/?role=client&mod=auth&action=register" method="post">
                <input type="email" name="email" id="" placeholder="Nhập email của bạn "> <br>
                <input type="text" name="full_name" id="" placeholder="Nhập tên tài khoản của bạn"> <br>
                <input type="password" name="password" id="" placeholder="Nhập mật khẩu của bạn "> <br>
                <input type="submit" value="Đăng kí" name="">
            </form>
            <p>Bạn đã có tài khoản? <a href="?role=client&mod=auth&action=index">Đăng nhập</a></p>
        </div>
    </div>
</body>

</html>