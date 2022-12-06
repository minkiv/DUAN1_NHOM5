<?php
function get_list_bills() {
    $result = db_fetch_array("SELECT * FROM `bills`");
    return $result;
}
function get_list_users() {
    $result = db_fetch_array("SELECT * FROM `users`");
    return $result;
}
function get_list_bproducts($id) {
    $result = db_fetch_array(" SELECT * from bill_productions b inner join  productions p on b.idDT = p.id where b.idDH = $id");
    return $result;
}
function get_bill_production($id){
    $result = db_fetch_row(" SELECT * from bill_productions where idDH = $id");
    return $result;
}
function update_bill($id,$data){
    return db_update('bill_productions',$data,"idDH=$id");
}