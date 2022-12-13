<?php
 function get_pro_by_id($id){
    $result=db_fetch_row("SELECT * FROM `productions` WHERE id={$id}");
    return $result;
 }
 
function update_info_cart(){
         $num_order=0;
         $total=0;
         foreach($_SESSION['cart']['buy'] as $item){
            $num_order+=$item['qty'];
            $total+=$item['sub_total'];
         }
         $_SESSION['cart']['infor']=array(
            'num_order'=>$num_order,
            'total'=>$total,
         );
}

function get_total_cart(){
   if(isset($_SESSION['cart'])){
      return $_SESSION['cart']['infor']['total'];
   }
   return FALSE;
}

function get_total_cup(){
   if(isset($_SESSION['cart'])){
      return $_SESSION['cart']['infor']['num_order'];
   }
   return FALSE;
}

function update_cart($qty){
      foreach($qty as $id=>$new_qty){
         $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
         $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
      }
      update_info_cart();
}
  
  function luudonhangnhe( $name,$email,$phone,$address,$clientNote,$adminNote){            
   
       db_insert('bills', [
         'TenNguoiNhan' => $name,
         'EmailNguoiNhan' => $email,
         'idUser'=>$_SESSION['auth']['id'],
         'DienThoai'=>$phone,
         'Diachi'=>$address,
         'ClientNote'=>$clientNote,
         'AdminNote'=>$adminNote,
         'thoiDiemDatHang' => date('Y-m-d H:i:s')
     ]);
   
     
      
}//function luudonhangnh
function luugiohangnhe($data){
      db_insert('bill_productions',$data);
}
function laydonhang(){
   $sql = "select * from bills order by idDH desc limit 0,1";
   return db_fetch_row($sql);
}
?>