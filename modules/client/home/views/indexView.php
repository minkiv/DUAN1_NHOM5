<?php get_header('', 'Trang chủ') ?>
                    <div class="panel login">
                        <div class="panel-heading">Thông tin tài khoản</div>
                        <div class="panel-body">
                            <div class="form-group">
                                <label>Họ và tên: </label>
                                <strong><?php echo get_auth()['full_name'] ?></strong>
                            </div>
                            <div class="form-group">
                                <label>Email: </label>
                                <strong><?php echo get_auth()['email'] ?></strong>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại: </label>
                                <strong><?php echo get_auth()['numberphone'] ?></strong>
                            </div>
                            <div class="panel-footer">
                                <ul class="px-3">
                                    <?php if (is_admin()): ?>
                                    <li>
                                        <a href="?role=admin">Trang quản trị</a>
                                    </li>
                                    <?php endif; ?>
                                    <li>
                                        <a href="?role=client&mod=auth&action=logout">Đăng xuất</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
<?php get_footer() ?>