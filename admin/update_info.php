<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $id = $_GET['id'];
    $dta = "SELECT * FROM information WHERE id=$id";
    $md = $conn->prepare($dta);
    $md->execute();
    $ad = $md->fetch();

    $into = array();
    $eror = array();
    if (isset($_POST['submit']))
    {

            $address = $_POST['address'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $license = $_POST['license'];
            
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];
            $div = explode('.', $file_name); //khi gặp dấu . nó sẽ phân tách vd: 123.jpg -> 123 . jpg
            $file_ext = strtolower(end($div)); //strtolower sẽ chuyển hoa thành thường, end($div) lấy phần cuối cùng jpg
            $unique_image = substr(md5(time()), 0, 10). '.'.$file_ext; 
            //substr(md5(time()), 0, 10) random để đưa vào csdl nối với đuôi tách ở $file_ext
            $uploaded_image = "../images/".$unique_image;
        if(!empty($file_name)){
            //Nếu $file_name(hình ảnh) không trống thì insert
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "UPDATE information set logo='$unique_image',address='$address',email='$email',
                            phone='$phone',license='$license' WHERE id=$id ";
                $st = $conn->prepare($query);
                $st->execute();
                $eror['oke'] = "Sửa  thành công!";
        }else{
                $query = "UPDATE information set address='$address',email='$email',
                            phone='$phone',license='$license' WHERE id=$id ";
                $st = $conn->prepare($query);
                $st->execute();
                $eror['oke'] = "Sửa  thành công!";
        }
    }
?>
<div class="content-wrapper">
    <?php echo isset($eror['oke'])? $eror['oke']: '' ?>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Logo:</label>
        <img src="../images/<?php echo $ad['logo'] ?>" alt="" width="50px"><br>
        <input type="file" name="image">
    </div>
    <div class="form-group">
        <label for="">Địa chỉ:</label>
        <input type="text" class="form-control" name="address" value="<?php echo $ad['address'] ?>">
        <div><?php echo isset($eror['user'])? $eror['user']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="email" class="form-control" name="email" value="<?php echo $ad['email'] ?>">
    </div>
    <div class="form-group">
        <label for="">Số điện thoại:</label>
        <input type="number" class="form-control" name="phone" value="<?php echo $ad['phone'] ?>">
    </div>
    <div class="form-group">
        <label for="">Giấy phép:</label>
        <input type="text" class="form-control" name="license" value="<?php echo $ad['license'] ?>">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    <div><?php echo isset($eror['ok'])? $eror['ok']: '' ?></div>
    </form>
</div>

