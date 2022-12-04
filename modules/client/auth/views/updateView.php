<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cập nhật tài khoản </title>
    <link rel="stylesheet" href="./public/css/login.css">
</head>
<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./public/images/north_background_login_desktop.png) no-repeat center;background-size: 100%;">
    <div class="formdang" >
        <div class="formdangki">
            <img src="./public/images/mainlogo.png" alt="">
            <form action="" method="post">
                <input type="email" name="email" id="" placeholder="email" value="<?php echo $_SESSION['auth']['email'] ?>"> <br>
                <input type="text" name="full_name" id="" placeholder="tài khoản" value="<?php echo $_SESSION['auth']['full_name'] ?>"> <br>
                <input type="text" name="password" id="" placeholder="password " value="<?php echo $_SESSION['auth']['password'] ?>"> <br>
                <input type="text" name="address" id="" placeholder="Địa chỉ " value="<?php echo $_SESSION['auth']['address'] ?>" > <br>
                <input type="text" name="numberphone" id="" placeholder="Điện thoại " value="<?php echo $_SESSION['auth']['numberphone'] ?>"> <br>
                <input type="submit" value="Cập nhật" name="">
            </form>
        </div>
    </div>
</body>

</html>