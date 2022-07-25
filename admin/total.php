<?php 
    require_once './index.php';
    require_once '../db/connect.php';
?>
<?php 
    $cart = "SELECT * FROM cart ";
    $stmt = $conn -> prepare($cart);
    $stmt->execute();
    $carts = $stmt -> fetchAll();
?>

<div class="content-wrapper">
    <h2>Tổng doanh thu</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên tài khoản</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
            </tr>
        </thead>
        <tbody>
            <?php $total =0 ?>
            <?php foreach($carts as $u): 
                $total += $u['total_price'];    
            ?>
                <tr>
                    <td><?php echo $u['id_cart'] ?></td>
                    <td><?php echo $u['user'] ?></td>
                    <td><?php echo $u['name_user'] ?></td>
                    <td><?php echo number_format($u['total_price']) ?></td>
                    
                </tr>
            <?php endforeach ?>
            <tr>
                <td>Tổng doanh thu</td>
                <td colspan="6" class="text-center bg-info"><?php echo number_format($total) ?> VND</td>
            </tr>
        </tbody>
  </table>