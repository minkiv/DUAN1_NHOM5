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
    $bpro = get_list_bproducts($idDH);
    $data['bills'] = get_list_bills();
    $list_users = get_list_users();
    $data['list_users'] = $list_users;
    $data['bpro']=$bpro;
    load_view('detail', $data);
}


function updateAction() {
    $id = $_GET['id_prod'];
    $tt = get_bill_production($id);
    $data['tt']=$tt;
    load_view('update', $data);
}
function saveupdatePostAction(){
    $id = $_GET['id'];
    $tt = $_POST['trangThai'];
    update_bill($id,['trangThai'=>$tt]);
    header("location: ?role=admin&mod=cart&action=detail&idDH=$id");
}