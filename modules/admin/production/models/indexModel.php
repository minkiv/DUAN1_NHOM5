<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    return $result;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE `productions`.`id` = $id");
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
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}


function update_production($id, $title, $description,$price,$status,$thumb,$category_id) {
    db_update('productions', [
        'title' => $title,
        'description' => $description,
        'price' => $price,
        'status' => $status,
        'thumb' => $thumb,
        'category_id' => $category_id
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