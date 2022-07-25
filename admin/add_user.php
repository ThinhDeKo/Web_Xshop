<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $into = array();
    $eror = array();
    if (isset($_POST['submit']))
    {
        $into['user'] = isset($_POST['user'])? $_POST['user']: '';
        $into['password'] = isset($_POST['password'])? $_POST['password']: '';
        $into['avatar'] = isset($_POST['avatar'])? $_POST['avatar']: '';
        $into['name'] = isset($_POST['name'])? $_POST['name']: '';
        $into['address'] = isset($_POST['address'])? $_POST['address']: '';
        if($into['user'] == '')
        {
            $eror['user'] = '*. Bạn không được để trống';
            if ($into['password'] == ''){
                $eror['password'] = '*. Bạn không được để trống';
            }
            if ($into['name'] == ''){
                $eror['name'] = '*. Bạn không được để trống';
            }
            if ($into['address'] == ''){
                $eror['address'] = '*. Bạn không được để trống';
            }
        }else{
            $user = $_POST['user'];
            $password = $_POST['password'];
            $name = $_POST['name'];
            $address = $_POST['address'];
            $permission = $_POST['permission'];
            
            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];
            $div = explode('.', $file_name); //khi gặp dấu . nó sẽ phân tách vd: 123.jpg -> 123 . jpg
            $file_ext = strtolower(end($div)); //strtolower sẽ chuyển hoa thành thường, end($div) lấy phần cuối cùng jpg
            $unique_image = substr(md5(time()), 0, 10). '.'.$file_ext; 
            //substr(md5(time()), 0, 10) random để đưa vào csdl nối với đuôi tách ở $file_ext
            $uploaded_image = "../image_user/".$unique_image;

            //Nếu $file_name(hình ảnh) không trống thì insert
            move_uploaded_file($file_temp, $uploaded_image);
            $query = "INSERT INTO user(user,password,avatar,name,address,permission) 
            VALUES ('$user','$password','$unique_image','$name','$address',$permission)";
            $sp = $conn->prepare($query);
            $sp->execute();
            echo '<script>window.location.replace("user.php")</script>';
            
        }
    }
?>
<div class="content-wrapper">
    <?php echo isset($eror['oke'])? $eror['oke']: '' ?>
    <form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="">Tên người dùng:</label>
        <input type="text" class="form-control" placeholder="Tên người dùng ..." name="user">
        <div><?php echo isset($eror['user'])? $eror['user']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Mật khẩu:</label>
        <input type="password" class="form-control" placeholder="Mật khẩu ..." name="password">
        <div><?php echo isset($eror['password'])? $eror['password']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh:</label>
        <input type="file" class="form-control" name="image">
    </div>
    <div class="form-group">
        <label for="">Họ tên:</label>
        <input type="text" class="form-control" placeholder="Họ tên ..." name="name">
        <div><?php echo isset($eror['name'])? $eror['name']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Địa chỉ:</label>
        <input type="text" class="form-control" placeholder="Địa chỉ ..." name="address">
        <div><?php echo isset($eror['address'])? $eror['address']: '' ?></div>
    </div>
    <div class="form-group">
        <input type="number" class="form-control" value="0" name="permission" hidden>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    <div><?php echo isset($eror['ok'])? $eror['ok']: '' ?></div>
    </form>
</div>