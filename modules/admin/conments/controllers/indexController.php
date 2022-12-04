<?php

function construct() {
    load_model('index');
}



function indexAction() {
    $comments=get_list_comments();
    $data['comments'] = $comments;
    load_view('index',$data);
}


function deleteAction() {
    $id = $_GET['id'];
    delete_comments($id);
    push_notification('success', ['Xoá bình luận thành công']);
    header('Location: ?role=admin&mod=conments');
}
