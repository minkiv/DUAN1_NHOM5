<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['products']=get_top8_production();
    $data['categories'] = get_list_categories();
    $data['news']= get_list_news();
    load_view('index',$data);
}
function gioithieuAction(){
    $data['news']= get_list_news();
    $data['categories'] = get_list_categories();
    load_view('gioithieu',$data);
}
function newsAction(){
    $data['categories'] = get_list_categories();
    $data['news']= get_list_news();
    $id = $_GET['id_n'];
    $data['new']= get_one_new($id);
    load_view('news',$data);
}