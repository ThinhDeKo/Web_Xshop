<?php 
    require_once './index.php';
    require_once '../db/connect.php';
?>
<?php 
    $cart = "SELECT cart.*, user.user FROM cart JOIN user ON cart.user = user.user ";
    $stmt = $conn -> prepare($cart);
    $stmt->execute();
    $carts = $stmt -> fetchAll();
?>

<div class="content-wrapper">
    <h2>Đơn hàng</h2>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Mã đơn hàng</th>
                <th>Tên tài khoản</th>
                <th>Tên khách hàng</th>
                <th>Tổng tiền</th>
                <th>Ngày đặt</th>
                <th>Trạng thái</th>
                <th>Chi tiết đơn hàng</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($carts as $u): ?>
                <tr>
                    <td><?php echo $u['id_cart'] ?></td>
                    <td><?php echo $u['user'] ?></td>
                    <td><?php echo $u['name_user'] ?></td>
                    <td><?php echo number_format($u['total_price']) ?></td>
                    <td><?php echo $u['date'] ?></td>
                    <td>
                        <?php if($u['status']==0){ ?>
                            <span class="label bg-red">Chưa xử lý</span>
                        <?php }else{ ?>
                            <span class="label bg-green">Đã xử lý</span>
                        <?php } ?>
                    </td>
                    <td>
                        <a href="cart_detail.php?id=<?php echo $u['id_cart'] ?>" title="Xem chi tiết" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
                        <a onclick="return Del()" href="dele_checkout.php?id=<?php echo $u['id_cart'] ?>" title="Xóa đơn hàng" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>
  <script>
      function Del(){
          return confirm("Bạn có muốn xóa đơn hàng!");
      }
  </script>