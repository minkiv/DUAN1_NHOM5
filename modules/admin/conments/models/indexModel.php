<?php

function get_list_comments() {
    $result = db_fetch_array("SELECT * FROM `comments`");
    return $result;
}

function get_one_comments($id) {
    $result = db_fetch_array("SELECT * FROM `comments` WHERE `comments`.`id_pro` = $id");
    return $result;
}

function delete_comments($id) {
    db_delete('comments', "id = $id");
    return true;
}

?>