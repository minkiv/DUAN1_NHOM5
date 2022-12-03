<?php
    // show_array($cart);
    // die;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table thead tr th{
            padding: 10px 30px;
            border-bottom:3px solid green;
        }
        table tbody tr td{
            padding: 10px 30px;
            border-bottom:1px solid green;
        }
    </style>
</head>
<body>
    <h2>Thông tin gio hang</h2>
    <?php
        if(isset($cart)){
    ?>
     <form action="" method="POST">
          <table>
        <thead>
            <tr>
                <th>id</th>
                <th>Ten sp</th>
                <th>Gia san pham</th>
                <th>So luong</th>
                <th>Thanh tien</th>
                <th>Hanh dong</th>
            </tr>
        </thead>
        <tbody>
       

        
        <?php
            foreach($cart['buy'] as $item){
        ?>
            <tr>
                <td><?php echo $item['id']?></td>
                <td><?php echo $item['title']?></td>
                <td><?php echo $item['price']?></td>
                <td><input type="number" min="1" max="30"name="qty[<?php echo $item['id']?>]"value="<?php echo $item['qty']?>"></td>
                <td><?php echo $item['sub_total']?></td>
                <td><a href="?mod=cart&action=delete&id=<?php echo $item['id']?>">Xóa</a></td>
            </tr>
        <?php
            } 
        ?>
      
        </tbody>
    </table>
            <input type="submit"id="update_cart" name="btn_update" value="Cập nhật giỏ hàng">
    </form> 
    <?php
        }else{ 
            echo "Không co phan tu nao trong gio hang";
        }
    ?>
   <p>Tổng giá: <?php echo currency_format($total); ?></p>
   <a href="">Cap nhat gio hang</a><br><br>
   <a href="?mod=cart&action=delete">Xóa toàn bộ giỏ hàng</a>
   <a href="">Thanh toan</a>
</body>
</html>