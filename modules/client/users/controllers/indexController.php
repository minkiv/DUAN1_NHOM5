<?php

function construct() {
    request_auth();
    load_model('index');
}

function indexAction() {
    $idus = $_GET['idUS'];
    $data['user']=get_user_by_id($idus);
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    load_view('index', $data);
}
function billAction() {
    $bills = get_list_bills($_SESSION['auth']['id']);
    $data['bills']=$bills;
    load_view('bill', $data);
}

function createAction() {
    $data['categories'] = get_list_categories();
    load_view('create', $data);
}
