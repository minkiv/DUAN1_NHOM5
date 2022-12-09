<?php
function get_list_news() {
    $result = db_fetch_array("SELECT * FROM `news`");
    return $result;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
    return $result;
}

function get_one_new($id) {
    $result = db_fetch_row("SELECT * FROM `news` WHERE `news`.`id` = $id");
    return $result;
}

function create_new($title,$content) {
    $user = get_auth();
    $id = db_insert('news', [
        'title' => $title,
        'content'=> $content,
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}


function update_new($id,$title,$content) {
   
        db_update('news', [
            'title' => $title,
            'content'=> $content,
            'created_at' => date('Y-m-d H:i:s')
            
        ], "id = $id");
  
       
    
}

function delete_new($id) {
    db_delete('news', "id = $id");
    return true;
}

function get_list_new() {
    $result = db_fetch_array("SELECT * FROM `news`");
    return $result;
}