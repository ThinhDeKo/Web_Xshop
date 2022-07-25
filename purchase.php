<?php session_start();
  if(isset($_SESSION['name']))
  {
    $name_user = $_SESSION['name'];
    // print_r($name_user);
  }

?>
<?php require_once './db/connect.php' ?>
<?php
    // echo '<pre>';
    // var_dump($_GET);
    
        $id = $_GET['id'];
        $sql = "SELECT * FROM product WHERE id_product = $id";
        $stmt = $conn -> prepare($sql);
        $stmt->execute();
        $pro = $stmt -> fetchAll();
    
?>
<?php
    if(isset($_POST['buy'])){
        
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_purchase.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
</head>
<body>
    <div class="container">
        <form action="single.php" method="post">
        <div class="modal">
            <div class="modal-container">
                <?php 
                
                    $tolal_price = 0;
                    foreach($pro as $value):
                        $tolal_price += ($value['sale'] * $_SESSION['carts'][$id]['quantity'])
                ?>
                <div class="modal-header">
                    <h2>Có 1 sản phẩm trong giỏ hàng</h2>
                    <i class="fas fa-times close"></i>
                </div><hr>
                <!-- Header -->
                <input type="text" name="id" value="<?php echo $value['id_product'] ?>">
                <div class="content">
                    <div class="modal-img">
                        <img src="./images/<?php echo $value['image'] ?>" alt=""> 
                    <!-- <img src="https://fptshop.com.vn/Uploads/Originals/2021/7/8/637613323642518520_oppo-reno6z-xanh-1.jpg" alt=""> -->
                    </div>
                    <!-- Image -->
                    
                    <div class="text">
                        <div class="text-name">
                            <p><?php echo $value['name_product'] ?></p>
                            <select name="" id="drop">
                                <option value="Đen">Đen</option>
                                <option value="Bạc" selected>Bạc</option> 
                            </select>
                            <div class="text-list">
                                <ul>
                                    <li>Tặng PMH 200.000 + Bảo hành 2 năm + Trả góp 0%</li>
                                    <li>Thu cũ đổi mới trợ giá 15%</li>
                                    <li>Giảm ngay 15% Oppo Band khi mua kèm ĐTDĐ OPPO</li>
                                </ul>
                            </div>
                        </div>
                        <!-- end text-name -->
                    
                        <div class="quantity">
                            <!-- <button style="width:20px;" onclick="tru()">-</button>
                            <input type="number" value="1" id="textbox" min="1" style="width: 40px; margin-left: -5px;text-align: center;">
                            <button style="width: 20px; margin-left: -5px;" onclick="cong()">+</button><br>
                            <a href="" class="delete"><i class="fas fa-trash-alt recy"></i>Xóa</a> -->
                            <input type="number" name="qty" value="1" min="1">
                        </div>
                        <div class="price">
                            <p id="price-main"><?php echo number_format($value['sale']) ?></p>
                            <del id="sale"><?php echo number_format($value['price']) ?></del>
                        </div>
                    </div>
                </div><hr>
                
                <!-- end content -->
                
                
                <div class="cart-center">
                    <div class="cart-coupon">
                        <span id="cart-title">Mã giảm giá</span><br>
                        <input class='voucher' type="text" placeholder="Nhập mã giảm giá">
                        <a class="btn-voucher">Áp dụng</a>
                    </div>
                    
                    <div class="cart-total">
                        <div class="text-normal" style="margin-bottom: 10px;">
                            <div class="first">Tổng tiền:</div>
                            <div class="mon"><?php echo number_format($tolal_price) . 'VNĐ' ?></div>
                        </div>
                        <div class="text-normal">
                            <div class="last">Cần thanh toán:</div>
                            <div class="mon" style="color: red;"><?php echo number_format($tolal_price) . 'VNĐ' ?></div>
                        </div>
                    </div>
                </div><hr>
                <!-- end mã giảm giá -->


                <div class="custom">
                    <form action="">
                          <input type="radio" id="radio"  name="sex" value="Anh" checked>
                          <label for="html" style="margin-right: 20px;">Anh</label>
                          <input type="radio" id="radio"  name="sex" value="Chị">
                          <label for="css">Chị</label><br>
                    </form>
                    <div class="info-custom">
                        <div class="head">
                            <input type="text" class='cus' placeholder="Nhập họ và tên"><br>
                            <input type="text" class='cus' placeholder="Nhập số điện thoại"><br>
                        </div>
                        <input type="text" class='email' placeholder="Nhập email" required>
                        <input type="text" class='address' placeholder="Nhập địa chỉ" required>
                    </div>
                    <p style="margin-left: 24px;margin-top: 20px; font-weight: 600;">Chọn hình thức giao hàng</p>
                    <form action="">
                          <input type="radio" id="radio"  name="sex" value="Anh">
                          <label for="html">Giao hàng tận nơi miễn phí</label><br>
                          <input type="radio" id="radio"  name="sex" value="Chị">
                          <label for="css">Nhận hàng tại FPT Shop</label><br>
                    </form>
                </div><hr>
                <!-- End custom infomation -->
                <div class="Payment">
                    <form action="" class="Payment-method">
                      <input type="radio" id="radio"  name="sex" value="Anh">
                      <label for="html">Trả tiền mặt khi nhận hàng/Trả góp lãi suất thường</label>
                      <input type="radio" id="radio"  name="sex" value="Chị">

                      <label for="css">ATM nội địa/QR CODE/Internet Banking (Thanh toán qua VNPAY)</label>      
                </div>
                <!-- End phương thức thanh toán -->
                <div class="">
                    <!-- <input type="submit" name="buy" class="buy" value="Mua hàng"> -->
                    <button type="submit" name="buy" class="buy">Mua hàng</button>
                </div>
                
            </div>
            <?php endforeach ?>
            <!-- Overlays -->
        </div>
    </form>
    <!-- <script>
        function cong(){
            var t = document.getElementById('textbox').value
            document.getElementById('textbox').value=parseInt(t)+1;
        }
        function tru(){
            var t = document.getElementById('textbox').value
            document.getElementById('textbox').value=parseInt(t)-1;
        }
    </> -->
</body>
</html>