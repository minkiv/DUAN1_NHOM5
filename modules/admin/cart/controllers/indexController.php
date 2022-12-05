<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $data['bills'] = get_list_bills();
    load_view('index', $data);
}
function detailAction() {
    $idDH = $_GET['idDH'];
    $bpro = get_list_bproducts();
    $data['bills'] = get_list_bills();
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    $data['bpro']=$bpro;
    load_view('detail', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}
