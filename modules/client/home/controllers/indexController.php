<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['products']=get_top8_production();
    $data['categories'] = get_list_categories();
    load_view('index',$data);
}
function gioithieuAction(){
    $data['categories'] = get_list_categories();
    load_view('gioithieu',$data);
}