<?php 
	session_start();
?>
<?php
	if (isset($_SESSION['name'])){
        // $n_u = $_SESSION['name'];
		require_once './member/header_us.php';
	}else{
		// session_destroy();
		// header('location: index.php');
		require_once './inc/header.php';
	}

    $cart = (isset($_SESSION['carts']))? $_SESSION['carts']: [];
    // echo '<pre>';
    // print_r($_SESSION['carts']);
    $st = 1;
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Giỏ hàng</title>
</head>
<body>
    <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Giỏ hàng</li>
				</ul>
			</div>
		</div>
	</div>
    
    <div class="container justidy-item-center">
    <div class="row">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <table class="table table-bordered">
                        <thead>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <!-- <th>Đặt hàng</th> -->
                            <th>Xóa</th>
                        </thead>
                        <tbody>
                            <?php $total_price = 0; ?>
                            <?php foreach($cart as $key => $val): 
                                $total_price += ($val['price'] * $val['quantity']);
                            ?>
                            <tr>
                                <td><?php echo $st++ ?></td>
                                <td><?php echo $val['name_product'] ?></td>
                                <td><img src="./images/<?php echo $val['image'] ?>" alt="" width="60px"></td>
                                <td><?php echo number_format($val['price']) ?></td>
                                <td>
                                    <form action="cart.php">
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo $val['id'] ?>">
                                        <input type="number" name="quantity" min="1" value="<?php echo $val['quantity'] ?>" >
                                        <input type="submit" value="cập nhật">
                                    </form>
                                </td>
                                <td><?php echo number_format(($val['price'] * $val['quantity'])) ?></td>
                                <!-- <td><a href="purchase.php?id=<?php echo $key ?>">Đặt hàng</a></td> -->
                                <!-- <td><button type="submit" href='./index.php' name="order" style="background-color: #0879c9;color: #fff;border-radius: 6px">Đặt hàng</button></td> -->
                                <td><a href="cart.php?id=<?php echo $val['id'] ?>&action=delete">
                                    <i class="ri-delete-bin-6-fill" style="color: red;font-size: 20px"></i></a></td>
                            </tr>
                            <?php endforeach ?>

                            <tr>
                                <td>Tổng tiền</td>
                                <td colspan="6" class="text-center bg-info"><?php echo number_format($total_price) ?> VND</td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="checkout.php"><button style="width: 180px;height: 40px;color: #0879c9"><strong>Đặt hàng <i class="ri-shopping-cart-2-line"></i></strong></button></a>
                </div>
                <div class="col-md-1"></div>
        </div>
        </div>
    </div>
    </div>
    
</body>
</html>
