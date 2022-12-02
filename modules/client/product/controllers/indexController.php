<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['products']=get_list_productions();
    $data['categories'] = get_list_categories();
    load_view('index',$data);
}
function indexView() {
    $data['products']=get_list_productions();
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
        header('Location:?role=admin&mod=product');
    }
}
function categoryViewAction(){
    $id = $_GET['categories'];
    $prod = get_one_production($id);
    $categories=get_list_categories();
    $data['production'] = $category_id;
    $data['categories'] = $categories;
    if ($category_id) {
        load_view('detail', $data);
    } else {
        header('Location:?role=admin&mod=product');
    }
}