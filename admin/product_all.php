<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $select = "SELECT product.*,category.name_category FROM product INNER JOIN category 
                ON product.id_category = category.id_category ORDER BY product.id_product desc";
    $st = $conn->prepare($select);
    $st->execute();
    $pr = $st->fetchAll();
?>
<div class="content-wrapper">
    <h1>Sản Phẩm</h1>
    <a href="add_product.php" style="margin-left: 20px"><button>Thêm sản phẩm ++</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên sản phẩm</th>
                <th>Hình ảnh</th>
                <th>Giá</th>
                <th>Giá khuyến mãi</th>
                <th>Đặc biệt</th>
                <th>Số lượng</th>
                <th>Chi tiết</th>
                <th>Lượt xem</th>
                <th>Id danh mục</th>
                <th colspan="2">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($pr as $u): ?>
                <tr>
                    <td><?php echo $u['name_product'] ?></td>
                    <td><img src="../images/<?php echo $u['image'] ?>" alt="" width="60px"></td>
                    <td><?php echo $u['price'] ?></td>
                    <td><?php echo $u['sale'] ?></td>
                    <td><?php echo $u['special']==1? 'Mới': 'Cũ' ?></td>
                    <td><?php echo $u['amount'] ?></td>
                    <td><?php echo $u['detail'] ?></td>
                    <td><?php echo $u['view'] ?></td>
                    <td><?php echo $u['name_category'] ?></td>
                    <td><a href="update_pro.php?id=<?php echo $u['id_product'] ?>"><button>Sửa</button></a></td>
                    <td><a onclick="return Del()" href="delete_pro.php?id=<?php echo $u['id_product'] ?>"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>
<script>
    function Del(){
        return confirm("Bạn có muốn xóa sản phẩm!");
    }
</script>

</div>