<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['news'] = get_list_news();
    load_view('index', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}

function createPostAction() {
    $title = $_POST['title'];
    $content = $_POST['content'];

    if (empty($title)) {
        push_notification('danger', ['Vui lòng nhập vào tiêu đề ']);
        // header('Location: ?role=admin&mod=production&action=create');
        die();
    }
    create_new($title,$content);
    push_notification('success', ['Thêm mới tin tức thành công']);
    header('Location: ?role=admin&mod=news');
}

function deleteAction() {
    $id = $_GET['id'];
    delete_new($id);
    push_notification('success', ['Xoá tin tức thành công']);
    header('Location: ?role=admin&mod=news');
}

function updateAction(){
    $id = $_GET['id'];
    $news = get_one_new($id);
    $categories=get_list_categories();
    $data['new'] = $news;
    if ($news) {
        load_view('update', $data);
    } else {
        header('Location: ?role=admin&mod=news');
    }
}

function updatePostAction() {
    $id = $_GET['id'];
    $new = get_one_new($id);
    if (!$new) {
        header('Location: ?role=admin&mod=news');
        die();
    }
    $title = $_POST['title'];
    $content = $_POST['content'];
   
    if (empty($title)) {
        push_notification('errors', [
            'title' => 'Vui lòng nhập vào tiêu đề'
        ]);
        header('Location: ?role=admin&mod=news&action=update&id='.$id);
    }
    update_new($id,$title,$content) ;
    push_notification('success', ['Chỉnh sửa tin tức thành công']);
    header('Location: ?role=admin&mod=news');
}    
