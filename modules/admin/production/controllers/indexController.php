<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['productions'] = get_list_productions();
    load_view('index', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}

function createPostAction() {
    $til = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $name = $_POST['name'];
    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên danh mục']);
        header('Location: ?role=admin&mod=category&action=create');
        die();
    }
    create_category($name, $description);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}

function deleteAction() {
    $id = $_GET['id_prod'];
    delete_production($id);
    push_notification('success', ['Xoá sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}

function updateAction(){
    $id = $_GET['id_prod'];
    $prod = get_one_production($id);
    $data['production'] = $prod;
    if ($prod) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=production');
    }
}

function updatePostAction() {
    $id = $_GET['id_prod'];
    $production = get_one_production($id);
    if (!$production) {
        header('Location: ?role=admin&mod=production');
        die();
    }
    $title = $_POST['name'];
    $description = $_POST['description'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $thumb = $_POST['thumb'];
    $category_id = $_POST['category_id'];
    if (empty($title)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên sản phẩm'
        ]);
        header('Location: ?role=admin&mod=production&action=update&id_prod='.$id);
    }
    update_production($id, $title, $description,$price,$status,$thumb,$category_id);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}