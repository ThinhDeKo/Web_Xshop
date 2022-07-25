<?php
    require_once './db/connect.php';
?>
<?php 
    session_start();
    if (isset($_SESSION['name'])){
		require_once './member/header_us.php';
	}else{
		require_once './inc/header.php';
	}	
?>
<?php
        $cart_order = "SELECT * FROM cart WHERE user = '".$_SESSION['name']."' ";
        $stmt_od = $conn -> prepare($cart_order);
        $stmt_od -> execute();
        $user_od = $stmt_od -> fetch();

    
        // $cart = "SELECT cart.*,product.id_product,product.name_product,product.image,
        //     cart_detail.id_cart,cart_detail.id_product,cart_detail.quantity,cart_detail.price
        //     FROM cart 
        //     INNER JOIN cart_detail
        //     ON cart.id_cart = cart_detail.id_cart 
        //     INNER JOIN product ON
        //      cart_detail.id_product = product.id_product WHERE cart.id_cart = cart_detail.id_cart ";
        $user_id = $_SESSION['name'];

        $cart = "SELECT * FROM cart, cart_detail, product WHERE cart.user = '$user_id' 
                AND cart.id_cart = cart_detail.id_cart AND cart_detail.id_product = product.id_product ";

        $sts = $conn -> prepare($cart);
        $sts -> execute();
        $carts = $sts->fetchAll();
    

?>




<head>
    <style>
        .user p{color: black;font-weight: 500;}
        .title{margin-bottom: 20px;}
        .text_detail{margin-bottom: 50px;}
    </style>
</head>

    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="row">
            </div>
            <div class="row title" style="background-color: #42ddf5;">
                <div class="" style="margin-left: 15px">
                    <h4>Thông tin khách hàng</h4>
                </div>
            </div>
            <div>
                <div class="text_detail user" style="margin-left: 10px">
                    <div class="row ">
                        <div class="col-md-6">
                            <p>Tên khách hàng: <?php echo $user_od['name_user'] ?></p>
                            <p>Số điện thoại: <?php echo '0'.$user_od['phone'] ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>Email: <?php echo $user_od['email'] ?></p>
                            <p>Địa chỉ: <?php echo $user_od['address'] ?></p>
                            <p>Ngày đặt hàng: <?php echo $user_od['date'] ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <h5>Đơn hàng </h5>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Mã đơn hàng</th>
                        <th>Sản phẩm</th>
                        <th>Hình ảnh</th>
                        <th>Số lượng</th>
                        <th>Giá</th>
                        <th>Tổng tiền</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0 ?>
                    <?php foreach($carts as $u):
                        $total += ($u['quantity'] * $u['price']);
                    ?>
                        <tr>
                            <td><?php echo $u['id_cart'] ?></td>
                            <td><?php echo $u['name_product'] ?></td>
                            <td><img src="./images/<?php echo $u['image'] ?>" alt="" width="40px"></td>
                            <td><?php echo $u['quantity'] ?></td>
                            <td><?php echo number_format($u['price']) ?></td>
                            <td><?php echo number_format($u['quantity'] * $u['price']) .' VNĐ' ?></td>
                        </tr>
                    <?php endforeach ?>
                    <tr>
                        <td colspan="5" class="text-center">Thành tiền</td>
                        <td><?php echo number_format($total) . ' VNĐ' ?></td>
                    </tr>
                </tbody>
        </table>

        </div>
        <div class="col-md-1"></div>
    </div>