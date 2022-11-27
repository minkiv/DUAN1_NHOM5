<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./public/css/stylepro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="logo">
                <img src="/images/logo.png" alt="Ảnh logo">
            </div>

            <div class="search">
                <input type="text" placeholder="Tìm kiếm sản phẩm" >
            </div>
            <div class="sign-in">
                <input type="submit" value="Đăng nhập">
            </div>
        </div>
        <div class="content">
            <div class="box-left">
                <h5>Danh mục</h5>
                <br>
                <ul>
                    <li><a href="#">Món nổi bật</a></li>
                    <li><a href="#">Trà sữa</a></li>
                    <li><a href="#">Fresh Fruit Tea</a></li>
                    <li><a href="#">Matcchiato Cream Cheese</a></li>
                    <li><a href="#">Sữa chua dẻo</a></li>
                </ul>
            </div>
            <div class="box">
                <h5>Món nổi bật</h5>
                <div class="product-view">

                    <div class="product-item-view">
                        <img src="/images/milk-tea.jpg" alt="Sản phẩm 1">
                        <h5>Sữa chua mận hạt sen</h5>
                        <p>31,000 đ <del>48,000 đ</del></p>
                        <input type="submit" value="-">
                        <input type="text" value="0">

                        <input type="submit" value="+">
                        <br>
                        <input type="submit" value="+31,000đ">
                    </div>
                    <div class="option-topping">
                        <h5>Chọn loại</h5>
                        <div class="center">
                            <input type="radio"> Lạnh
                        </div>
                        <h5>Chọn size</h5>
                        <table >
                            <tr>
                                <td>
                                    <input type="radio">
                                    Size M
                                </td>
                                <td >
                                    <input type="radio">
                                    Size L
                                </td>

                            </tr>
                        </table>
                        <h5>Chọn đường</h5>
                        <table>
                            <tr>

                                <td><input type="radio" name="add-sugar">70% đường</td>
                                <td><input type="radio" name="add-sugar">50% đường</td>
                            </tr>
                            <tr>
                                <td><input type="radio"name="add-sugar">30% đường</td>
                                <td><input type="radio"name="add-sugar">không đường</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="add-sugar">100% đường</td>
                                <td></td>
                            </tr>
                        </table>
                        <h5>Chọn đá</h5>
                        <table>
                            <tr>
                                <td><input type="radio" name="cold">30% đá</td>
                                <td><input type="radio"name="cold" >không đá mát</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="cold">100% đá</td>
                                <td><input type="radio" name="cold">70% đá</td>
                            </tr>
                            <tr>
                                <td><input type="radio" name="cold">50% đá</td>
                                <td><input type="radio"name="cold">không đá</td>
                            </tr>

                        </table>


                        <h5>Chọn topping</h5>
                        <table>
                            <tr>
                                <td>
                                    <input type="checkbox" > Thêm trân châu sương mai
                                </td>
                                <td  >+9,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm trân châu Baby
                                </td>
                                <td >+8,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm trân châu Hoàng Kim
                                </td>
                                <td >+8,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm thạch băng tuyết
                                </td>
                                <td >+8,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm machiato
                                </td>
                                <td >+9,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm thạch rau câu
                                </td>
                                <td>+8,000đ</td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="checkbox"> Thêm Trân Châu Sợi
                                </td>
                                <td >+8,000đ</td>
                            </tr>

                        </table>
                    </div>

                </div>    
            </div>
            <div class="box-right">
                <h5>Giỏ hàng của tôi</h5> 
                <p>Chưa có sản phẩm nào</p>
                    <table border="1">
                        <tr>    
                            <td> 1 cốc </td>
                            <td> x 1</td>
                            <td> Thành tiền</td>
                        </tr>
                    </table>
                <input type="submit" value="Xóa tất cả">
                <input type="submit" value="Thanh toán">
            </div>
        </div>
    </div>
</body>
</html>