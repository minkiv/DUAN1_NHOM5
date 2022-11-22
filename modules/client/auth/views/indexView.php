<?php get_header('', 'Trang chủ') ?>
    <div class="formdang">
        <div class="formdangnhap">
            <img src="img/logo.png" alt="">
            <form action="#" method="post">
                <input type="text" name="username" id="" placeholder="Nhập tên tài khoản của bạn"> <br>
                <input type="password" name="password" id="" placeholder="Nhập mật khẩu của bạn "> <br>
                <div class="quenpass"><a href="#">Quên mật khẩu</a></div><br>
                <input type="submit" value="Đăng Nhập" name="">
                <input type="hidden" name="op" value="login" />
            </form>
            <p>Bạn chưa có tài khoản? <a href="?role=client&mod=auth&action=register">Đăng kí tài khoản</a></p>
        </div>
    </div>
<?php get_footer() ?>