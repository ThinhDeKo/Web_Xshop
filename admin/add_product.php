<?php
    require_once 'index.php';
?>
<?php require_once '../db/connect.php' ?>
<?php
    $sq = "SELECT * FROM category";
    $sm = $conn->prepare($sq);
    $sm->execute();
    $ct = $sm->fetchAll();
    $into = array();
    $eror = array();
    const special = [
        0 => 'Không phải sản phẩm mới',
        1 => 'Sản phẩm mới'
    ];
    if (isset($_POST['submit']))
    {
        $into['name'] = isset($_POST['name'])? $_POST['name']: '';
        $into['image'] = isset($_POST['image'])? $_POST['image']: '';
        $into['price'] = isset($_POST['price'])? $_POST['price']: '';
        $into['sale'] = isset($_POST['sale'])? $_POST['sale']: '';
        $into['amount'] = isset($_POST['amount'])? $_POST['amount']: '';
        $into['detail'] = isset($_POST['detail'])? $_POST['detail']: '';
        if($into['name'] == '')
        {
            $eror['name'] = '*. Bạn không được để trống!';
            if ($into['price'] == ''){
                $eror['price'] = '*. Bạn không được để trống!';
                if ($into['price'] <0){
                    $eror['price'] = '*. Không được nhập âm';
                }
            }
            if ($into['image'] == ''){
                $eror['image'] = '*. Bạn không được để trống!';
            }
            if ($into['sale'] == ''){
                $eror['sale'] = '*. Bạn không được để trống!';
                if ($into['sale'] <0){
                    $eror['sale'] = '*. Không được nhập âm';
                }
            }
            if ($into['amount'] == ''){
                $eror['amount'] = '*. Bạn không được để trống!';
                if ($into['amount'] <0){
                    $eror['amount'] = '*. Không được nhập âm';
                }
            }
            if ($into['detail'] == ''){
                $eror['detail'] = '*. Bạn không được để trống!';
            }
            
        }else
        {
            $name = $_POST['name'];
            $price = $_POST['price'];
            $sale = $_POST['sale'];
            $special = $_POST['special'];
            $amount = $_POST['amount'];
            $category = $_POST['category'];
            $detail = $_POST['detail'];

            $permited = array('jpg', 'jpeg', 'png', 'gif');
            $file_name = $_FILES['image']['name'];
            $file_size = $_FILES['image']['size'];
            $file_temp = $_FILES['image']['tmp_name'];
            $div = explode('.', $file_name); //khi gặp dấu . nó sẽ phân tách vd: 123.jpg -> 123 . jpg
            $file_ext = strtolower(end($div)); //strtolower sẽ chuyển hoa thành thường, end($div) lấy phần cuối cùng jpg
            $unique_image = substr(md5(time()), 0, 10). '.'.$file_ext; 
            //substr(md5(time()), 0, 10) random để đưa vào csdl nối với đuôi tách ở $file_ext
            $uploaded_image = "../images/".$unique_image;

            //Nếu $file_name(hình ảnh) không trống thì insert
            if (!empty($file_name))
            {
                move_uploaded_file($file_temp, $uploaded_image);
                $query = "INSERT INTO product(name_product,image,price,sale,special,amount,detail,id_category) 
                VALUES ('$name','$unique_image',$price,$sale,$special,$amount,'$detail',$category)";
                $st = $conn->prepare($query);
                $st->execute();
                echo '<script>window.location.replace("product_all.php")</script>';
            }
            
        }
    }
?>

<div class="content-wrapper">
    <form action="" method="post" enctype="multipart/form-data">
    <div><?php echo isset($eror['oke'])? $eror['oke']: '' ?></div>
    <div class="form-group">
        <label for="">Tên sản phẩm:</label>
        <input type="text" class="form-control" placeholder="Tên sản phẩm ..." name="name">
        <div><?php echo isset($eror['name'])? $eror['name']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Hình ảnh sản phẩm:</label>
        <input type="file" class="form-control" name="image">
        <div><?php echo isset($eror['image'])? $eror['image']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Giá sản phẩm:</label>
        <input type="number" class="form-control" placeholder="Giá sản phẩm ..." name="price">
        <div><?php echo isset($eror['price'])? $eror['price']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Giá khuyễn mãi:</label>
        <input type="number" class="form-control" placeholder="Giá khuyến mãi ..." name="sale">
        <div><?php echo isset($eror['sale'])? $eror['sale']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Loại hàng:</label>
        <select name="special" id="">
            <?php foreach(special as $key=>$value): ?>
                <option value="<?php echo $key ?>"><?php echo $value ?></option>
            <?php endforeach ?>
        </select>
    </div>
    <div class="form-group">
        <label for="">Số lượng:</label>
        <input type="number" class="form-control" placeholder="Số lượng sản phẩm ..." name="amount">
        <div><?php echo isset($eror['amount'])? $eror['amount']: '' ?></div>
    </div>
    <div class="form-group">
        <label for="">Chọn danh mục</label>
        <select name="category" id="" >
            <option>>--- Chọn danh mục ---<</option>
            <?php foreach($ct as $v): ?>
            <option value="<?php echo $v['id_category'] ?>"><?php echo $v['name_category'] ?></option>
            <?php endforeach ?>
        </select>
    </div>


    <div class="form-group">
        <label>Mô Tả Sản Phẩm</label>
        <textarea name="detail" id="detail" cols="80" rows="10"></textarea>
        <script type="text/javascript">
            CKEDITOR.replace('detail');
        </script>
        <div><?php echo isset($eror['detail'])? $eror['detail']: '' ?></div>
    </div>
    <!-- <div class="form-group">
        <label for="">Chi tiết sản phẩm:</label>
        <input type="text" class="form-control" placeholder="Chi tiết sản phẩm ..." name="detail">
        <div><?php echo isset($eror['detail'])? $eror['detail']: '' ?></div>
    </div> -->

    <button type="submit" name="submit" class="btn btn-primary">Thêm sản phẩm</button>
    <div><?php echo isset($eror['ok'])? $eror['ok']: '' ?></div>
    </form>
</div>