<?php

function get_list_account() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

function create_account($name, $description) {
    $user = get_auth();
    $id = db_insert('productions', [
        'email' => $email,
        'description' => $description,
        'create_id' => $user['id'],
        'created_at' => date('Y-m-d H:i:s')
    ]);
    return $id;
}

?>