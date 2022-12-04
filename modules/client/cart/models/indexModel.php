<?php
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
  function get_total_cup(){
   if(isset($_SESSION['cart'])){
      return $_SESSION['cart']['infor']['num_order'];
   }
   return FALSE;
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
  function update_cart($qty){
      foreach($qty as $id=>$new_qty){
         $qty=$_SESSION['cart']['buy'][$id]['qty']=$new_qty;
         $_SESSION['cart']['buy'][$id]['sub_total']=$new_qty*$_SESSION['cart']['buy'][$id]['price'];
      }
      update_info_cart();
  }
  
  function luudonhangnhe($idDH, $name, $email,$phone){            
   if ($idDH==-1){
      $id = db_insert('bills', [
         'TenNguoiNhan' => $name,
         'EmailNguoiNhan' => $email,
         'DienThoai'=>$phone,
         'thoiDiemDatHang' => date('Y-m-d H:i:s')
     ]);
   } else {
      db_update('bills', [
         'TenNguoiNhan' => $name,
         'EmailNguoiNhan' => $email,
         'DienThoai'=>$phone,
         'thoiDiemDatHang' => date('Y-m-d H:i:s')
     ], "idDH = $idDH");
              
     
          return $idDH;
      }
}//function luudonhangnh
function luugiohangnhe($idDH, $giohang){
      $sql = "DELETE FROM donhangchitiet WHERE idDH='$idDH'";
      $this->query($sql);
      foreach ($giohang as $idDT=>$dt){
           $tenDT = $dt['TenDT'];
           $gia= $dt['Gia'];
           $Amount= $dt['Amount'];
           $sql = "INSERT INTO donhangchitiet SET idDH='$idDH', idDT= '$idDT', "           . "TenDT='{$tenDT}', Gia='{$gia}', SoLuong='$Amount'";
           $kq= $this->query($sql);
      }//foreach
}
?>