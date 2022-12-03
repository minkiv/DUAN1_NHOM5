<?php
function create_client_user($full_name, $email, $password) {
    $result = db_insert("users", [
        "full_name" => $full_name,
        "email" => $email,
        "password" => $password,
        "role" => 1  ,
        "created_at" => date('Y-m-d H:i:s')
    ]);
    return $result;
}

function get_client_with_id($id)
{
    return db_fetch_row("select * from users where id = {$id}");
}

function get_auth_user($username, $pass) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$username' AND `password` = '$pass'");
    return $result;
}

function checkpass($username) {
    $result = db_fetch_row("SELECT * FROM `users` WHERE `email` = '$username'");
    return $result;
}