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
    $title = $_POST['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $status=$_POST['status'];
    $thumb = $_FILES['thumb']['name'];
    $target_dir = "./public/uploads/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
        if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

    if (empty($title)) {
        push_notification('danger', ['Vui lòng nhập vào tên sản phẩm']);
        // header('Location: ?role=admin&mod=production&action=create');
        die();
    }
    create_production($title, $description,$category_id,$price,$count,$status,$thumb);
    push_notification('success', ['Thêm mới sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
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
    $categories=get_list_categories();
    $data['production'] = $prod;
    $data['categories'] = $categories;
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
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $status=$_POST['status'];
    $thumb = $_FILES['thumb']['name'];
    $target_dir = "./public/uploads/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
        if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
                    // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }

    if (empty($title)) {
        push_notification('errors', [
            'title' => 'Vui lòng nhập vào tên sản phẩm'
        ]);
        header('Location: ?role=admin&mod=production&action=update&id_prod='.$id);
    }
    update_production($id,$title, $description,$category_id,$price,$count,$status,$thumb);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=production');
}