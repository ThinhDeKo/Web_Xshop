<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
	<style>
        *{margin: 0;padding: 0; }
        body{margin: 0 auto;text-align: center; }
        form{background-color: rgb(130, 250, 250);margin: 60px 500px; }
        h1{color: indianred;margin: 2rem ; }
        input[type='text'],
        input[type='password']{margin-bottom: 1rem;margin-top: 0.5rem;width: 60%;height: 2rem;
        border-radius: 15px;border: 2px solid indianred; }
        .pass{margin-top: 10px; }
        input[type='checkbox']{margin-top: 10px;margin-bottom: 7px; }
        input[type='submit']{width: 30%;margin: 30px;height: 35px;cursor: pointer;
            background-color: indianred;color: white;font-size: 15px; }
        input[type='submit']:hover{background-color: red;transition: .8s; }
        #holu{color: red; }
    </style>
</head>
<?php require_once './db/connect.php' ?>
<body>
				<?php
						$into = array();
						$error = array();
						if(isset($_POST['dky']))
						{
                            $into['user'] = isset($_POST['user'])? $_POST['user']: '';
							$into['name'] = isset($_POST['name'])? $_POST['name']: '';
							$into['password'] = isset($_POST['password'])? $_POST['password']: '';
							$into['address'] = isset($_POST['address'])? $_POST['address']: '';
							if($into['user'] == ''){
								$error['user'] = '<p id=holu> *. Vui lòng điền đủ thông tin <?p>';
								if($into['password'] == ''){
									$error['password'] = '<p id=holu> *. Vui lòng điền đủ thông tin <?p>';
								}if($into['name'] == ''){
									$error['name'] = '<p id=holu> *. Bạn có tin chúng tôi? <?p>';
								}if($into['address'] == ''){
									$error['address'] = '<p id=holu> *. Bạn có tin chúng tôi? <?p>';
								}
							}else{
								$user = $_POST['user'];
								$password = $_POST['password'];
								$name = $_POST['name'];
								$address = $_POST['address'];
								$permited = array('jpg', 'jpeg', 'png', 'gif');
								$file_name = $_FILES['image']['name'];
								$file_size = $_FILES['image']['size'];
								$file_temp = $_FILES['image']['tmp_name'];
								$div = explode('.', $file_name); //khi gặp dấu . nó sẽ phân tách vd: 123.jpg -> 123 . jpg
								$file_ext = strtolower(end($div)); //strtolower sẽ chuyển hoa thành thường, end($div) lấy phần cuối cùng jpg
								$unique_image = substr(md5(time()), 0, 10). '.'.$file_ext; 
								//substr(md5(time()), 0, 10) random để đưa vào csdl nối với đuôi tách ở $file_ext
								$uploaded_image = "./image_user/".$unique_image;

								if (!empty($file_name)){
									move_uploaded_file($file_temp, $uploaded_image);
									$sql = "INSERT INTO user(user,password,avatar,name,address) VALUES ('$user','$password','$unique_image','$name','$address')";
									$stmt = $conn->prepare($sql);
									$stmt -> execute();
									header("location: index.php");
								}else{
									$sql = "INSERT INTO user(user,password,name,address) VALUES ('$user','$password','$name','$address')";
									$stmt = $conn->prepare($sql);
									$stmt -> execute();
									header("location: index.php");
								}
							}
						}
					?>
					
					<form action="" method="POST" enctype="multipart/form-data">
						<h1>Đăng Ký</h1>
						<div>
							<label for="">Tên Đăng Nhập</label><br>
							<input type="text" name="user" value="" placeholder="Tên đăng nhập">  
							<div>
								<?php echo isset($error['user'])? $error['user']: '' ?>
							</div>
						</div>
						<div class="pass">
							<label for="">Mật Khẩu</label><br>
							<input type="password" name="password" value="" placeholder="Mật Khẩu">
							<div>
								<?php echo isset($error['password'])? $error['password']: '' ?>
							</div>
						</div>
						<div class="">
							<label for="">Hình ảnh:</label>
							<input type="file" name="image" value="">
						</div>
						<div>
							<label for="">Họ Tên</label><br>
							<input type="text" name="name" value="" placeholder="Họ Tên">  
							<div>
								<?php echo isset($error['name'])? $error['name']: '' ?>
							</div>
						</div>
                        <div>
							<label for="">Địa Chỉ</label><br>
							<input type="text" name="address" value="" placeholder="Địa chỉ">  
							<div>
								<?php echo isset($error['address'])? $error['address']: '' ?>
							</div>
						</div>
						<div>
							<input type="submit" name="dky" value="Đăng ký">
							<div>
								<?php echo isset($error['failed'])? $error['failed']: '' ?>
							</div>
						</div>
					</form>
	

	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>