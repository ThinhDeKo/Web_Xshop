<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $id = $_GET['id'];
    $dta = "SELECT * FROM category WHERE id_category=$id ";
    $md = $conn->prepare($dta);
    $md->execute();
    $cate = $md->fetch();
    echo '<script>window.location.replace("category.php")</script>';
?>

<div class="content-wrapper">
    <form action="save_cate.php" method="post">
        <div class="form-group" hidden>
            <input type="text" class="form-control" name="id" value="<?php echo $cate['id_category'] ?>">
        </div>
        <div class="form-group">
            <label for="">Tên danh mục:</label>
            <input type="text" class="form-control" name="name" value="<?php echo $cate['name_category'] ?>">
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Sửa</button>
    </form>

</div>