<?php
function get_list_productions() {
    $result = db_fetch_array("SELECT * FROM `productions`");
    return $result;
}

function get_list_comments() {
    $result = db_fetch_array("SELECT * FROM `comments`");
    return $result;
}

function get_list_categories() {
    $result = db_fetch_array("SELECT c.id, c.name, c.description, c.create_id, c.created_at, u.full_name, u.id as `uid` FROM `categories` c JOIN `users` u ON c.create_id = u.id");
    return $result;
}

function get_one_comments($id) {
    $result = db_fetch_array("SELECT * FROM `comments` WHERE `comments`.`id_pro` = $id");
    return $result;
}

function get_one_production($id) {
    $result = db_fetch_row("SELECT * FROM `productions` WHERE `productions`.`id` = $id");
    return $result;
}
function get_same_productions($iddm) {
    $result = db_fetch_array("SELECT * FROM `productions` WHERE `productions`.`category_id` = $iddm");
    return $result;
}
function get_one_category($iddm) {
    $result = db_fetch_row("SELECT * FROM `categories` WHERE `categories`.`id` = $iddm");
    return $result;
}



 function get_pro_by_id($id){
    $result=db_fetch_row("SELECT * FROM `productions` WHERE id={$id}");
    return $result;
 }
  function get_total_cart(){
      if(isset($_SESSION['cart'])){
         return $_SESSION['cart']['infor']['total'];
      }
      return FALSE;
  }
  function get_cup_cart(){
    if(isset($_SESSION['cart']['infor']['num_cup'])){
       return $_SESSION['cart']['infor']['num_cup'];
    }
    return $_SESSION['cart']['infor']['num_cup']=0;
 }
 function update_info_cart(){
    $num_order=0;
    $total=0;
    $num_cup=0;
    foreach($_SESSION['cart']['buy'] as $item){
       $num_order+=$item['qty'];
       $total+=$item['sub_total'];
       $num_cup+=1;
    }
    $_SESSION['cart']['infor']=array(
       'num_order'=>$num_order,
       'total'=>$total,
       'num_cup'=>$num_cup,
    );
}
  function update_cart($qty){
      foreach($qty as $id=>$new_qty){
         $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
         $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
      }
      update_info_cart();
  }

function create_cmt($data) {
    db_insert("comments",$data);
}
  
?>

