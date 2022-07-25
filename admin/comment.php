<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $dta = "SELECT comment.*,user.user,product.name_product FROM comment INNER JOIN user
            ON comment.user = user.user 
            INNER JOIN product ON
             comment.id_product = product.id_product";
    $md = $conn->prepare($dta);
    $md->execute();
    $ct = $md->fetchAll();


?>
<div class="content-wrapper">
    <h1>Bình luận sản phẩm</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID bình luận</th>
                <th>Nội dung</th>
                <th>Sản phẩm</th>
                <th>Khách hàng</th>
                <th>Ngày</th>
                <th>Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ct as $u): ?>
                <tr>
                    <td><?php echo $u['id_comment'] ?></td>
                    <td><?php echo $u['content'] ?></td>
                    <td><?php echo $u['name_product'] ?></td>
                    <td><?php echo $u['user'] ?></td>
                    <td><?php echo $u['create_at'] ?></td>
                    <td>
                        <a onclick="return Del()" href="dele_cmt.php?id=<?php echo $u['id_comment'] ?>" title="Xóa bình luận" class="btn btn-danger"><i class="fa fa-fw fa-trash"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>
  <script>
      function Del(){
          return confirm("Bạn có muốn xóa bình luận!");
      }
  </script>