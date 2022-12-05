

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="./public/css/stylepro.css">
    
    </head>
    <body>
        <div class="container">
            <div class="header">
                <div class="logo">
                    <img src="./public/images/logo.png" alt="Ảnh logo">
                </div>

                <div class="search">
                    <input type="text" placeholder="Tìm kiếm sản phẩm" >
                </div>
                <div class="dropdown" style="float:right;">
                    <?php if (is_auth()) : ?>
                        <button class="dropbtn"><?php echo get_auth()['full_name'] ?></button>
                        <div class="dropdown-content">
                        <?php if (is_admin()): ?>
                            <div class="sign-in">
                                <a href="?role=admin">Trang quản trị</a>
                            </div>
                        <?php endif; ?>
                            <div class="sign-in">
                                    <a href="?role=client&mod=auth&action=logout">Đăng xuất</a>
                            </div>
                        <?php else: ?>
                            <div class="sign-in">
                                <a href="?role=client&mod=auth&action=index">Đăng nhập</a>
                            </div>
                        <?php endif; ?>
                        </div>
                </div>
            </div>
            <div class="content">
                <div class="box-left">
                    <h5>Danh mục</h5>
                    <br>
                    <ul>
                        <?php
                        foreach ($categories as $cat ) {
                            echo '<li><a href="?role=client&mod=product&action=category&id_cat='.$cat['id'].'">'.$cat['name'].'</a></li>';
                        }
                        ?>
                    </ul>
                </div>
                <div class="box">
                    <h5>Chi tiết sản phẩm</h5>
                    <div class="product-view"> 
                <div class="product-item-view">
                <img src="./public/uploads/<?php echo $production['thumb'];?>" alt="Sản phẩm 1">
                <h5>     
                        <?php echo $production['title'] ; ?>
                    </h5>
                    <p><?php echo  $production['price'] ; ?>,000 đ <del>48,000 đ</del></p>
                    <p><?php echo $production['description'] ; ?></p>
                    
                </div>
                
                    <div class="thantin">
                    <a href="">Đặt hàng</a>
                    </div>
                    </div>
                    
                    <div class="show_connent">
                        <h4>Bình luận</h4>
                        <table>
                        <?php foreach ($comments as $comment) : ?>
                            <tr>
                            <td><?php echo ($comment['content']) ?></td>
                            <td><?php echo ($comment['id_pro']) ?></td>
                            <td><?php echo ($comment['id_users']) ?></td>
                            <td><?php echo ($comment['created_at']) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                    
                        <?php if(is_auth()){?>
                    <div class="cmt">
                        <form action="" method="post">
                            <input type="text" name="content" placeholder="Nhập bình luận" id="" >
                            <input type="submit" value="Gửi">
                        </form>
                </div>    
            <?php }else{ ?>
                <div class="tonbao">
                <p >Đăng nhập để bình luận</p>
                </div>
            <?php } ?>
                </div>
                
                <dv class="box-right">
            <div class="box-right-hen">
                    <h5>Giỏ hàng của tôi</h5>
                    <div class="dele"><a href="">Xóa tất cả</a></div>
                </div>
                <?php
                    if(isset($cart)){
                        foreach($cart['buy'] as $item){
                ?>
                
                    <table border="1">
                    <tr>
                    <td><?php echo $item['id']?></td>
                    <td><?php echo $item['title']?></td>
                    <td><?php echo $item['price']?></td>
                    <td><input type="number" min="1" max="30"name="qty[<?php echo $item['id']?>]"value="<?php echo $item['qty']?>"></td>
                    <td><?php echo $item['sub_total']?></td>
                    <td><a href="?mod=cart&action=delete&id=<?php echo $item['id']?>">Xóa</a></td>
                    </tr>
                    </table>
                    <?php
            } 
        ?>
        <?php
        }else{ 
            echo "<p>Chưa có sản phẩm nào</p>";
        }
    ?>
                <div class="thantin">
                    <a href="">thanh toán</a>
                </div>
            </dv>
            </div>
        </div>
    </body>
    </html>