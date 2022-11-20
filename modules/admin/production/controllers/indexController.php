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
    $name = $_POST['name'];
    $description = $_POST['description'];
    $category_id = $_POST['category_id'];
    $price = $_POST['price'];
    $count = $_POST['count'];
    $status=$_POST['status'];
    $thumb = $_FILES['thumb']['name'];
    $target_dir = "./upload/";
    $target_file = $target_dir . basename($_FILES["thumb"]["name"]);
        if (move_uploaded_file($_FILES["thumb"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    echo "Sorry, there was an error uploading your file.";
                }

    if (empty($name)) {
        push_notification('danger', ['Vui lòng nhập vào tên sản phẩm']);
        header('Location: ?role=admin&mod=production&action=create');
        die();
    }
    create_production($name, $description,$category_id,$price,$count,$status,$thumb);
    push_notification('success', ['Tạo mới danh mục sản phẩm thành công']);
    // header('Location: ?role=admin&mod=production');
}

function deleteAction() {
    $id = $_GET['id_cate'];
    delete_category($id);
    push_notification('success', ['Xoá danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}

function updateAction()
{
    $id = $_GET['id_cate'];
    $cate = get_one_category($id);
    $data['category'] = $cate;
    if ($cate) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=category');
    }
}

function updatePostAction() {
    $id = $_GET['id_cate'];
    $cate = get_one_category($id);
    if (!$cate) {
        header('Location: ?role=admin&mod=category');
        die();
    }
    $name = $_POST['name'];
    $description = $_POST['description'];
    if (empty($name)) {
        push_notification('errors', [
            'name' => 'Vui lòng nhập vào tên danh mục'
        ]);
        header('Location: ?role=admin&mod=category&action=update&id_cate='.$id);
    }
    update_category($id, $name, $description);
    push_notification('success', ['Chỉnh sửa danh mục sản phẩm thành công']);
    header('Location: ?role=admin&mod=category');
}