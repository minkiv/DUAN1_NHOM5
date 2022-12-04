<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['production']=get_list_productions();
    $data['categories'] = get_list_categories();
    load_view('index',$data);
}
function indexView() {
    $data['production']=get_list_productions();
    $data['categories'] = get_list_categories();
    load_view('index',$data);
}
function detailAction(){
    $id = $_GET['id_prod'];
    $prod = get_one_production($id);
    $categories=get_list_categories();
    $data['production'] = $prod;
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