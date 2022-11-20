<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE `productions`.`id` = $id");
    return $result;
}

function create_production($name, $description) {
    $user = get_auth();
    $id = db_insert('productions', [
        'name' => $name,
        'description' => $description,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

function update_production($id, $title, $description,$price,$tatus,$thumb,$category_id) {
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