<?php
function get_list_bills() {
    $result = db_fetch_array("SELECT * FROM `bills`");
    return $result;
}
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function get_list_bproducts() {
    $result = db_fetch_array("SELECT p.title, p.price,p.thumb, b.soLuong ,b.sub_total FROM 'bill_productions' b JOIN 'productions' p  ON b.idDH = p.id");
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


function update_production($id,$title, $description,$category_id,$price,$count,$status,$thumb) {
    if($thumb!=""){
        db_update('productions', [
            'title' => $title,
            'description' => $description,
            'category_id' => $category_id,
            'price' => $price,
            'count'=>$count,
            'status' => $status,
            'thumb' => $thumb
        ], "id = $id");
    }else{
        db_update('productions', [
            'title' => $title,
            'description' => $description,
            'category_id' => $category_id,
            'price' => $price,
            'count'=>$count,
            'status' => $status,
        ], "id = $id");
    }
    
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