<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $dta = "SELECT * FROM category";
    $md = $conn->prepare($dta);
    $md->execute();
    $ct = $md->fetchAll();
?>
<div class="content-wrapper">
    <h1>Danh mục sản phẩm</h1>
    <a href="add_category.php" style="margin-left: 20px"><button>Thêm danh mục ++</button></a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID danh mục</th>
                <th>Tên danh mục</th>
                <th>Ngày thêm</th>
                <th>Chỉnh sửa</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($ct as $u): ?>
                <tr>
                    <td><?php echo $u['id_category'] ?></td>
                    <td><?php echo $u['name_category'] ?></td>
                    <td><?php echo $u['create_at'] ?></td>
                    <td>
                        <a href="update_cate.php?id=<?php echo $u['id_category'] ?>" title="Sửa" class="btn btn-success"><i class="fa fa-fw fa-edit"></i></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
  </table>