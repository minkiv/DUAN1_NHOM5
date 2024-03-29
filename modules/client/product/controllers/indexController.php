<?php

function construct() {
    load_model('index');
}

function indexAction() {
    $data['production']=get_list_productions();
    $data['categories'] = get_list_categories();
    $data['comments'] = get_list_comments();
  
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
        $num_cup=get_cup_cart();
        $data['total']=$total;   
        $data['num_cup']=$num_cup;   
        load_view('index',$data);
      }
}
// function indexView() {
//     $data['production']=get_list_productions();
//     $data['categories'] = get_list_categories();
//     $data['comments'] = get_list_comments();
//     load_view('index',$data);
// }
function detailAction(){
    $id = $_GET['id_prod'];
    $prod = get_one_production($id);
    $categories=get_list_categories();
    $comments=get_one_comments($id);
    $data['production'] = $prod;
    $data['comments'] = $comments;
    $data['categories'] = $categories;
    // if ($prod) {
    //     load_view('detail', $data);
    // } else {
    //     header('Location: ?role=admin&mod=product');
    // }
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
        $num_cup=get_cup_cart();
        $data['total']=$total;   
        $data['num_cup']=$num_cup;   
        load_view('detail',$data);
      }
}
function categoryAction(){
    $iddm = $_GET['id_cat'];
    $prod = get_same_productions($iddm);
    $categories=get_list_categories();
    $category = get_one_category($iddm);
    $data['production'] = $prod;
    $data['categories'] = $categories;
    $data['category'] = $category;
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
             'qty'=>$qty,
             'sub_total'=>$pro['price']*$qty
        );
        update_info_cart();
      }
      if(!empty($_SESSION['cart'])){
        $data['cart']=$_SESSION['cart'];
        $total=get_total_cart();
        $num_cup=get_cup_cart();
        $data['total']=$total;   
        $data['num_cup']=$num_cup;   
        load_view('category',$data);
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
    header('Location:?mod=product');

 }
   function cartPostAction(){
    show_array($_POST['qty']);
    die;
     update_cart($_POST['qty']);
     header ("Location:?mod=cart");
  }

function detailPostAction() {
    $id_pro=$_GET['id_prod'];
    $content=$_POST['content'];
    $id_user=$_SESSION['auth']['id'];
    $created_at=date("Y-m-d H:i:s");
    $data=[
        'content'=>$content,
        'id_pro'=>$id_pro,
        'id_users'=>$id_user,
        'created_at'=>$created_at
    ];
    create_cmt($data);
    header("Location: ?role=client&mod=product&action=detail&id_prod=${id_pro}");
}

function findPostAction(){
    $data['categories'] = get_list_categories();
  if(isset($_POST['kyw'])){
    $key =addslashes($_POST['kyw']);
    if(empty($key)){
      $er="Vui lòng nhập dữ liệu!";
    }else{
        $rows=get_found_productions($key);
        $data['rows']=$rows;
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
    $num_cup=get_cup_cart();
    $data['total']=$total;   
    $data['num_cup']=$num_cup;   
    load_view('find',$data);
  }
}
}
}