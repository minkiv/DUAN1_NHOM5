<?php

function get_list_account() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}

?>