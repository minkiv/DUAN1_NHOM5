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


function updateAction() {
    $id = $_GET['id'];
    $user = get_one_users($id);
    $data['users'] = $user;
    if ($user) {
        load_view('update', $data);
    } else {
        header('Location: ?role=client&mod=auth');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $numberphone = $_POST['numberphone'];
    update_users($id,$email,$full_name,$password,$address,$numberphone);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: /DUAN1_NHOM5/?role=client&mod=auth&action=update&id='.$id);
}  

?>