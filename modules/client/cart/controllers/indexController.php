  <?php
    function construct(){
      load_model('index');
      load('helper','format');
    }
    function indexAction(){
      if(!isset($_SESSION['auth'])){
        header('location:?role=client&mod=auth');
        die;
      }
    if(isset($_GET['id'])){
      $id=$_GET['id'];
      $pro=get_pro_by_id($id);
      $qty=1;
      if(isset($_SESSION['cart']['buy'])&& array_key_exists($id,$_SESSION['cart']['buy'])){
        $qty=$_SESSION['cart']['buy'][$id]['qty']+1;
      }
      $_SESSION['cart']['buy'][$id]=array(
            'id'=>$pro['id'],
            'title'=>$pro['title'],
            'price'=>$pro['price'],
            'thumb'=>$pro['thumb'],
            'qty'=>$qty,
            'sub_total'=>$pro['price']*$qty
      );
      update_info_cart();
    }
    if(!empty($_SESSION['cart'])){
      $data['cart']=$_SESSION['cart'];
      $total=get_total_cart();
      $data['total']=$total;
      $num_order=get_total_cup();
      $data['num_order']=$num_order;     
      load_view('index',$data);
    }
    
      
    }
    function deleteAction(){
      if(isset($_GET['id'])){
            $id=(int)$_GET['id'];
            if(!empty($id)){
                unset($_SESSION['cart']['buy'][$id]);
                update_info_cart();
            }       
      }   
      header('Location:?mod=cart');

    }
  //   function deleteAllAction(){
  //     $_SESSION['cart']['buy']=[];  
  //     header('Location:?mod=cart');

  // }
    function indexPostAction(){
      show_array($_POST['qty']);
      die;
      update_cart($_POST['qty']);
      header ("Location:?mod=cart");
    }

    function luudonhangPostAction(){
      $name = trim(strip_tags($_POST['name']));
      $email = trim(strip_tags($_POST['email']));
      $phone = trim(strip_tags($_POST['phone']));
      $address = trim(strip_tags($_POST['address']));
      $clientNote = trim(strip_tags($_POST['clientNote']));
      $adminNote = trim(strip_tags($_POST['adminNote']));
    //   if (empty($name)) {
    //     push_notification('errors', [
    //         'title' => 'Vui lòng nhập vào tên sản phẩm'
    //     ]);
    //     header('Location: ?role=client&mod=cart');
    // }
      luudonhangnhe($name,$email,$phone,$address,$clientNote,$adminNote);
      $donhang=laydonhang();
      foreach($_SESSION['cart']['buy'] as $item){

        $data=[
          'idDH'=>$donhang['idDH'],
          'idDT'=>$item['id'],
          'soLuong'=>$item['qty'],
          'price'=>$item['price'],
          'sub_total'=>$item['sub_total']
        ];
        luugiohangnhe($data);
      }
      $_SESSION['cart']['buy']=[];
      update_info_cart();
      header('location:?mod=product');
    }
  ?>