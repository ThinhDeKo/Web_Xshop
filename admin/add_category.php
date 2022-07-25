<?php
    require_once "index.php";
?>
<?php require_once '../db/connect.php' ?>
<?php
    $into = array();
    $eror = array();
    if (isset($_POST['submit']))
    {
        $into['name'] = isset($_POST['name'])? $_POST['name']: '';
        if($into['name'] == '')
        {
            $eror['name'] = '*. Bạn không được để trống danh mục';
        }else{
            $name_cate = $_POST['name'];
            $dta = "INSERT INTO category(name_category) VALUES ('$name_cate')";
            $md = $conn->prepare($dta);
            $md->execute();
            echo '<script>window.location.replace("category.php")</script>';
        }
    }
?>
<div class="content-wrapper">
    <form action="" method="post">
    <div class="form-group">
        <label for="">Tên danh mục:</label>
        <input type="text" class="form-control" placeholder="Tên danh mục ..." name="name">
        <div><?php echo isset($eror['name'])? $eror['name']: '' ?></div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    <div><?php echo isset($eror['ok'])? $eror['ok']: '' ?></div>
    </form>
</div>