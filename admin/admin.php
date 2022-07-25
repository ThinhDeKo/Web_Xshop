<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $dta = "SELECT * FROM user WHERE permission = 1";
    $md = $conn->prepare($dta);
    $md->execute();
    $ct = $md->fetchAll();
?>
<div class="content-wrapper">
    <h1>Tài khoản quản trị</h1>
    <a href="add_admin.php" style="margin-left: 20px"><button>Thêm quản trị ++</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Tên người dùng</th>
                <th>Mật khẩu</th>
                <th>Hình ảnh</th>
                <th>Họ tên</th>
                <th>Địa chỉ</th>
                <th>Ngày thêm</th>
                <th colspan="2">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ct as $u): ?>
                <tr>
                    <td><?php echo $u['user'] ?></td>
                    <td><?php echo $u['password'] ?></td>
                    <td><img src="../image_user/<?php echo $u['avatar'] ?>" alt="" width="60px"></td>
                    <td><?php echo $u['name'] ?></td>
                    <td><?php echo $u['address'] ?></td>
                    <td><?php echo $u['create_at'] ?></td>
                    <td><a href="update_admin.php?user=<?php echo $u['user'] ?>"><button>Sửa</button></a></td>
                    <td><a onclick="return Del()" href="delete_admin.php?user=<?php echo $u['user'] ?>"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>
  <script>
      function Del(){
          return confirm("Bạn có muốn xóa danh mục!");
      }
  </script>