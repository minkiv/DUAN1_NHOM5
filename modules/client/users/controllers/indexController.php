<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $idus = $_GET['idUS'];
    $data['user']=get_user_by_id($idus);
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function billAction() {
    $bills = get_list_bills($_SESSION['auth']['id']);
    $data['bills']=$bills;
    load_view('bill', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}
function updatePostAction() {
    $id = $_GET['idUS'];
    $email = $_POST['email'];
    $full_name = $_POST['full_name'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $numberphone = $_POST['numberphone'];
    update_users($id,$email,$full_name,$password,$address,$numberphone);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: /DUAN1_NHOM5/?role=client&mod=users&id='.$id);
} 

function updateAction() {
    $idUS = $_GET['idUS'];
    $data['user']=get_user_by_id($idUS);
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('update', $data);
}
