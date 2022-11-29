<?php

function construct() {
    load_model('index');
}


function indexAction() {
    $notifications = get_notification();
    load_view('index', [
        "notifications" => $notifications
    ]);
}



function indexPostAction()
{
    // validation
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (empty($username) || empty($password)) {
        push_notification('danger', ['Vui lòng nhập đầy đủ thông tin tài khoản và mật khẩu']);
        header('Location: /DUAN1_NHOM5/?role=client&mod=auth&action=index');
    }
    // xử lý đăng nhập
    $auth = get_auth_user($username, $password);
    if (isset($auth)) {
        push_auth($auth);
        header('Location: ?role=client&mod=product');
    } else {
        push_notification('danger', ['Tài khoản hoặc mật khẩu không chính xác']);
        header('Location: /DUAN1_NHOM5/?role=client&mod=auth&action=index');
    }
}

function registerAction() {
    $notifications = get_notification();
    load_view('register', [
        "notifications" => $notifications
    ]);
}

function registerPostAction() {
    // request_auth(false);
    $full_name = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $errs = [];
    if (empty($_POST['full_name'])) {
        $errs[] = 'Không được bỏ trống họ và tên';
    }
    if (empty($_POST['email'])) {
        $errs[] = 'Không được bỏ trống địa chỉ email';
    }
    if (empty($_POST['password'])) {
        $errs[] = 'Không được bỏ trống mật khẩu';
    }
    if (count($errs) > 0) {
        push_notification('danger', $errs);
        header('Location: /?role=client&mod=auth');
    } else {
        // process register
        $auth_id = create_client_user($full_name, $email, $password);
        $auth = get_client_with_id($auth_id);
        push_auth($auth);
        header('Location: /DUAN1_NHOM5/?role=client&mod=auth&action=register');
    }
}

function logoutAction()
{
    request_auth(true);
    remove_auth();
    header('Location: ?role=client&mod=product');
}
