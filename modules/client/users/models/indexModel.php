<?php
function get_list_bills($id) {
    $result = db_fetch_array("SELECT p.title , p.thumb, p.price, bi.soLuong, bi.sub_total, bi.trangThai,p.id FROM bills b inner join bill_productions bi on b.idDH = bi.idDH inner join productions p on bi.idDT = p.id where b.idUser = $id ");
    return $result;
}
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function get_user_by_id($idus) {
    $item = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$idus}");
    return $item;
}
function get_list_bproducts($id) {
    $result = db_fetch_array(" SELECT * from bill_productions b inner join  productions p on b.idDT = p.id where b.idDH = $id");
    return $result;
}


function create_production($title, $description,$category_id,$price,$count,$status,$thumb) {
    $user = get_auth();
    $id = db_insert('productions', [
        'title' => $title,
        'description' => $description,
        'category_id'=>$category_id,
        'price'=>$price,
        'count'=>$count,
        'status'=>$status,
        'thumb'=>$thumb,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function get_one_users($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $result;
}

function update_users($id,$email,$full_name,$password,$address,$numberphone) {
    db_update('users', [
        'email' => $email,
        'full_name' => $full_name,
        'password' => $password,
        'address' => $address,
        'numberphone'=>$numberphone,
    ], "id = $id");
return true;
}

function delete_production($id) {
    db_delete('productions', "id = $id");
    return true;
}

function get_list_production() {
    $result = db_fetch_array("SELECT * FROM `production`");
    return $result;
}