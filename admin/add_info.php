<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $into = array();
    $eror = array();
    if (isset($_POST['submit']))
    {
        $into['address'] = isset($_POST['address'])? $_POST['address']: '';
        $into['email'] = isset($_POST['email'])? $_POST['email']: '';
        $into['phone'] = isset($_POST['phone'])? $_POST['phone']: '';
        $into['license'] = isset($_POST['license'])? $_POST['license']: '';

        if($into['address'] == ''){
            $eror['address'] = '*. Bạn không được để trống';
            if ($into['email'] == ''){
                $eror['email'] = '*. Bạn không được để trống';
            }
            if ($into['phone'] == ''){
                $eror['phone'] = '*. Bạn không được để trống';
            }
            if ($into['license'] == ''){
                $eror['license'] = '*. Bạn không được để trống';
            }
        }
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
                $query = "INSERT INTO information(logo,address,email,phone,license) 
                        VALUES ('$unique_image','$address','$email',$phone,'$license') ";
                $st = $conn->prepare($query);
                $st->execute();
                $eror['oke'] = "Thêm thông tin thành công!";
        }else{
            $eror['img'] = '*. Bạn không được để trống';
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
        <div><?php echo isset($eror['img'])? $eror['img']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Địa chỉ:</label>
        <input type="text" class="form-control" name="address">
        <div><?php echo isset($eror['address'])? $eror['address']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Email:</label>
        <input type="email" class="form-control" name="email">
        <div><?php echo isset($eror['email'])? $eror['email']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Số điện thoại:</label>
        <input type="number" class="form-control" name="phone">
        <div><?php echo isset($eror['phone'])? $eror['phone']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Giấy phép:</label>
        <input type="text" class="form-control" name="license">
        <div><?php echo isset($eror['license'])? $eror['license']: '' ?></div>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Thêm</button>
    <div><?php echo isset($eror['ok'])? $eror['ok']: '' ?></div>
    </form>
</div>

