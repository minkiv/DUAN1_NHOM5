
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập </title>
    <link rel="stylesheet" href="./public/css/login.css">
    <link rel="stylesheet" href="silde.css">
</head>

<body style="background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url(./public/images/north_background_login_desktop.png) no-repeat center;background-size: 100%;">
    <div class="formdang">
        <div class="formdangnhap">   
<img src="./public/images/mainlogo.png" alt=""> 
<?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg): ?>
                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>    
            <form action="" method="post">
                <input type="text" name="username" id="" placeholder="Nhập tên tài khoản của bạn"> <br>
                <input type="submit" value="Gửi" name="">
            </form>
            <p><a href="?role=client&mod=auth&action=index">Đăng nhập</a></p>
        </div>
    </div>
</body>

</html>