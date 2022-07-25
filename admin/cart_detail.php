<?php 
    require_once './index.php';
    require_once '../db/connect.php';
?>
<?php 
    if(isset($_GET['id'])){
        $cart_id = $_GET['id'];

        $cart_order = "SELECT * FROM cart WHERE id_cart = $cart_id ";
        $stmt_od = $conn -> prepare($cart_order);
        $stmt_od -> execute();
        $user_od = $stmt_od -> fetch();
        
        $cart_order = "SELECT cart_detail.*,product.id_product,product.name_product,product.image,product.sale
          FROM cart_detail JOIN product ON cart_detail.id_product = product.id_product WHERE id_cart = $cart_id";
        $stmt_pr = $conn -> prepare($cart_order);
        $stmt_pr -> execute();
        $pro_od = $stmt_pr -> fetchAll();


    }
?>

<div class="content-wrapper">
    <div class="user_detail">
        <div class="row">
            <div class="col-md-10">
                <h2 style="margin-left: 10px;">Chi tiết đơn hàng</h2>
            </div>
            <div class="col-md-2">
                <button onclick="return Up()" type="submit" class="btn btn-success" style="margin-top: 4px;">
                    <a href="update_cart.php?id=<?php echo $cart_id ?>" style="color: white;">Đã gửi hàng đi >>></a>
                </button>
            </div>
        </div>
        <div class="row" style="background-color: #42ddf5;">
            <div class="title" style="margin-left: 15px">
                <h4>Thông tin khách hàng</h4>
            </div>
        </div>
        <div>
            <div class="text_detail" style="margin-left: 10px;">
                <p>Tên khách hàng: <?php echo $user_od['name_user'] ?></p>
                <p>Số điện thoại: <?php echo '0'.$user_od['phone'] ?></p>
                <p>Email: <?php echo $user_od['email'] ?></p>
                <p>Địa chỉ: <?php echo $user_od['address'] ?></p>
                <p>Ngày đặt: <?php echo $user_od['date'] ?></p>
                <p>Lưu ý của khách hàng: <?php echo $user_od['note'] ?></p>
            </div>
        </div>
    </div>

    <div class="bill_detail">
        <div class="row" style="background-color: #42ddf5;">
            <div class="title" style="margin-left: 15px">
                <h4>Thông tin đơn hàng</h4>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Số lượng</th>
                <th>Thành tiền</th>
            </thead>
            <tbody>
                <?php $total_price =0 ?>
                <?php foreach($pro_od as $val): 
                    $total_price += ($val['price'] * $val['quantity']);   
                ?>
                <tr>
                    <td><?php echo $val['name_product'] ?></td>
                    <td><img src="../images/<?php echo $val['image'] ?>" alt="" width="50px"></td>
                    <td><?php echo number_format($val['sale']) ?></td>
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


    </div>




  <script>
      function Up(){
          return confirm("Nhân viên đã gửi hàng đi!");
      }
  </script>