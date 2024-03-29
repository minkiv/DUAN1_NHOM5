<?php
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `tbl_users`");
    return $result;
}
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
function get_top8_production(){
    $result = db_fetch_array("SELECT * FROM `productions`where 1 order by `view` desc limit 0,8");
    return $result;
}
function get_list_news() {
    $result = db_fetch_array("SELECT * FROM `news`");
    return $result;
}
function get_one_new($id) {
    $result = db_fetch_row("SELECT * FROM `news` WHERE `news`.`id` = $id");
    return $result;
}
