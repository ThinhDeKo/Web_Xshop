<?php
    session_start();
    // require_once './db/connect.php';
    $servername = "localhost";
    $database = "project";
    $username = "root";
    $password = "";
    $connectt = mysqli_connect($servername, $username, $password, $database);
    mysqli_set_charset($connectt,'utf8');
?>
<?php 
    if (isset($_SESSION['name'])){
        // $n_u = $_SESSION['name'];
		require_once './member/header_us.php';
        $user = $_SESSION['name'];
	}else{
		// session_destroy();
		// header('location: index.php');
		require_once './inc/header.php';
	}
    
    $cart = (isset($_SESSION['carts']))? $_SESSION['carts']: [];
    // echo '<pre>';
    // print_r($_SESSION['carts']);
   
?>
<?php
    if(isset($_POST['submit'])){
        $name_user = $_POST['name'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $address = $_POST['address'];
        $pay = $_POST['pay'];
        $note = $_POST['note'];
        $total_bill = $_POST['total_price'];
        // echo '<pre>';
        // var_dump($cart);
        $query_user = mysqli_query($connectt,"INSERT INTO cart(user,name_user,phone,email,address,pay,note,total_price) 
                VALUES ('$user','$name_user',$phone,'$email','$address','$pay','$note',$total_bill)");

        // $query_user = "INSERT INTO cart(user,name_user,phone,email,address,pay,note) 
        //             VALUES ('$user','$name_user',phone,'$email','$address','$pay','$note')";
        // $stmt_user = $conn -> prepare($query_user);
        // $stmt_user -> execute();
        if($query_user){
            $id_cart = mysqli_insert_id($connectt);
            foreach($cart as $value){
                mysqli_query($connectt,"INSERT INTO cart_detail(id_cart,id_product,quantity,price) 
                VALUES ('$id_cart','$value[id]','$value[quantity]','$value[price]' )");
            };
            unset($_SESSION['carts']);
            
            echo '<script>
                window.location.replace("index.php");
            </script>';
        }

    }
?>
<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="view_cart.php">GIỎ HÀNG</a>
						<i>|</i>
					</li>
					<li>ĐẶT HÀNG</li>
				</ul>
			</div>
		</div>
	</div>
<?php if(isset($_SESSION['name'])) {?>
    
            <!-- <div class="col-md-12">
                <div class="row"> -->
                    <!-- <div class="col-md-1"></div> -->
                    <!-- thông tin khách hàng -->
                    <form method="POST">
                    <div class="row" style="margin-top: 20px;">
                        <div class="col-md-1"></div>
                        <div class="col-md-5">
                            <h4 class=" text-center"><ins>Thông tin khách hàng</ins></h4>
                            <!-- <form> -->
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Tài khoản: </label>
                                    <input type="text" class="form-control" name="user" value="<?php echo $user ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Họ & tên: </label>
                                    <input type="text" class="form-control" name="name" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Số điện thoại:</label>
                                    <input type="number" class="form-control" name="phone">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Email:</label>
                                    <input type="email" class="form-control" name="email">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Địa chỉ:</label>
                                    <input type="text" class="form-control" name="address">
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Hình thức thanh toán:</label><br>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pay" value="Tiền mặt" checked>
                                        <label class="form-check-label" for="flexRadioDefault1" style="margin-left: 20px;">
                                            Thanh toán khi nhận hàng
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="pay" value="ATM">
                                        <label class="form-check-label" for="flexRadioDefault2" style="margin-left: 20px;">
                                            ATM nội địa/QR CODE/Internet Banking (Thanh toán qua VNPAY)
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Ghi chú:</label>
                                    <div class="form-floating">
                                        <textarea class="form-control" name="note" placeholder="Lưu ý cho người bán ..." ></textarea>
                                    </div>
                                </div>
                                
                                <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
                            <!-- </form> -->
                        </div>
                        <!-- thông tin đơn hàng -->
                        <div class="col-md-5 text-center">
                            <h4 style="margin-bottom: 5px;" class=" text-center"><ins>Thông tin đơn hàng</ins></h4>
                            <table class="table table-bordered">
                                <thead>
                                    <th>Tên sản phẩm</th>
                                    <th>Hình ảnh</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </thead>
                                <tbody>
                                    <?php $total_price = 0; ?>
                                    <?php foreach($cart as $key => $val): 
                                        $total_price += ($val['price'] * $val['quantity']);
                                    ?>
                                    <tr>
                                        <td><?php echo $val['name_product'] ?></td>
                                        <td><img src="./images/<?php echo $val['image'] ?>" alt="" width="30px"></td>
                                        <td><?php echo number_format($val['price']) ?></td>
                                        <td><?php echo $val['quantity'] ?> </td>
                                        <td><?php echo number_format(($val['price'] * $val['quantity'])) ?></td>
                                    </tr>
                                    <?php endforeach ?>

                                    <tr>
                                        <td>Tổng tiền</td>
                                        <td colspan="6" class="text-center bg-info"><?php echo number_format($total_price) ?> VND</td>
                                    </tr>
                                    <input type="hidden" name="total_price" value="<?php echo $total_price ?>">
                                </tbody>
                            </table>

                            <button type="submit" name="submit" class="btn btn-info">Đặt hàng</button>
                        </div>
                        <div class="col-md-1"></div>
                    </div>
                    </form>
                    <!-- <div class="col-md-1"></div> -->
                <!-- </div> -->
                <!-- row -->
    <!-- </div> -->
<?php }else{ ?>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <div class="list-group">
                <button type="button" class="list-group-item list-group-item-action active">
                    Bạn cần đăng nhập để mua hàng <a href="login.php?action=checkout" style="color: red;">Tại đây</a>
                </button>
            </div>
        </div>
        <div class="col-md-1"></div>
    </div>
<?php } ?>