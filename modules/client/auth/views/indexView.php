
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng Nhập </title>
    <link rel="stylesheet" href="silde.css">
</head>

<body>
    <div class="formdang">
        <div class="formdangnhap">
            <img src="img/logo.png" alt="">
            <?php foreach ($notifications as $notification) : ?>
                        <?php foreach ($notification['msgs'] as $msg): ?>
                            <span class="label label-lg label-light-<?php echo $notification['type'] ?> label-inline mb-3"><?php echo $msg ?></span>
                        <?php endforeach; ?>
                    <?php endforeach; ?>
            <form action="" method="post">
                <input type="text" name="username" id="" placeholder="Nhập tên tài khoản của bạn"> <br>
                <input type="password" name="password" id="" placeholder="Nhập mật khẩu của bạn "> <br>
                <div class="quenpass"><a href="#">Quên mật khẩu</a></div><br>
                <input type="submit" value="Đăng Nhập" name="">
            </form>
            <p>Bạn chưa có tài khoản? <a href="?role=client&mod=auth&action=register">Đăng kí tài khoản</a></p>
        </div>
    </div>
</body>

</html>