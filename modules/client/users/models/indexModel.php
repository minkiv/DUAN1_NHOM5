<?php

function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function get_one_users($id) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `id` = {$id}");
    return $result;
}

?>