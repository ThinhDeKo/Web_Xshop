<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $dta = "SELECT * FROM information";
    $md = $conn->prepare($dta);
    $md->execute();
    $ct = $md->fetchAll();
?>
<div class="content-wrapper">
    <h1>Thông tin trang web</h1>
    <a href="add_info.php" style="margin-left: 20px;"><button>Thêm thông tin ++</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Logo</th>
                <th>Địa chỉ</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Giấy phép</th>
                <th colspan="2">Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ct as $u): ?>
                <tr>
                    <td><?php echo $u['id'] ?></td>
                    <td><img src="../images/<?php echo $u['logo'] ?>" alt="" width="60px"></td>
                    <td><?php echo $u['address'] ?></td>
                    <td><?php echo $u['email'] ?></td>
                    <td><?php echo $u['phone'] ?></td>
                    <td><?php echo $u['license'] ?></td>
                    <td><a href="update_info.php?id=<?php echo $u['id'] ?>"><button>Sửa</button></a></td>
                    <td><a onclick="return Del()" href="delete_info.php?id=<?php echo $u['id'] ?>"><button>Xóa</button></a></td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>
  <script>
      function Del(){
          return confirm("Bạn có muốn xóa danh mục!");
      }
  </script>

