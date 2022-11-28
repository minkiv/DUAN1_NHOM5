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
function get_same_productions($iddm) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE `productions`.`category_id` = $iddm");
    return $result;
}
function get_one_category($iddm) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE `categories`.`id` = $iddm");
    return $result;
}

