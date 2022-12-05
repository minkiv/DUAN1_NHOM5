<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['production']=get_list_productions();
    $data['categories'] = get_list_categories();
    $data['comments'] = get_list_comments();
    load_view('index',$data);
}
function indexView() {
    $data['production']=get_list_productions();
    $data['categories'] = get_list_categories();
    $data['comments'] = get_list_comments();
    load_view('index',$data);
}
function detailAction(){
    $id = $_GET['id_prod'];
    $prod = get_one_production($id);
    $categories=get_list_categories();
    $comments=get_one_comments($id);
    $data['production'] = $prod;
    $data['comments'] = $comments;
    $data['categories'] = $categories;
    if ($prod) {
        load_view('detail', $data);
    } else {
        header('Location: ?role=admin&mod=product');
    }
}
function categoryAction(){
    $iddm = $_GET['id_cat'];
    $prod = get_same_productions($iddm);
    $categories=get_list_categories();
    $category = get_one_category($iddm);
    $data['production'] = $prod;
    $data['categories'] = $categories;
    $data['category'] = $category;
    if ($prod) {
        load_view('category', $data);
    } else {
        header('Location: ?role=admin&mod=product');
    }
}

function detailPostAction() {
    $id_pro=$_GET['id_prod'];
    $content=$_POST['content'];
    $id_user=$_SESSION['auth']['id'];
    $created_at=date("Y-m-d H:i:s");
    $data=[
        'content'=>$content,
        'id_pro'=>$id_pro,
        'id_users'=>$id_user,
        'created_at'=>$created_at
    ];
    create_cmt($data);
    header("Location: ?role=client&mod=product&action=detail&id_prod=${id_pro}");
}