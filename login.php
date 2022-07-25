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
<body>	
<?php require_once './db/connect.php' ?>
				<?php
					session_start();
						$into = array();
						$error = array();
						if(isset($_POST['dnhap']))
						{
							$_SESSION['name'] = $_POST['Name'];
							$_SESSION['Password'] = $_POST['Password'];
 							$into['Name'] = isset($_POST['Name'])? $_POST['Name']: '';
							$into['Password'] = isset($_POST['Password'])? $_POST['Password']: '';
							$into['checkbox'] = isset($_POST['checkbox'])? $_POST['checkbox']: '';
							if($into['Name'] == ''){
								$error['Name'] = '<p id=holu> *. Vui lòng điền đủ thông tin <?p>';
								if($into['Password'] == ''){
									$error['Password'] = '<p id=holu> *. Vui lòng điền đủ thông tin <?p>';
								}
							}else{
								$sql = "SELECT * FROM user WHERE permission = 1";
								$stmt = $conn->prepare($sql);
								$stmt -> execute();
								$user = $stmt->fetchAll();
								foreach($user as $u){
									if ($_SESSION['name'] == $u['user'] && $_SESSION['Password'] == $u['password'] )
									{
											header('location: admin/index.php');
										
									}else{
										$error['error'] = '*. Đăng nhập thất bại!';
									}
								}
								$sqll = "SELECT * FROM user WHERE permission = 0";
								$stmtt = $conn->prepare($sqll);
								$stmtt -> execute();
								$userr = $stmtt->fetchAll();
								foreach($userr as $v){
									if ($_SESSION['name'] == $v['user'] && $_SESSION['Password'] == $v['password'] )
									{
										if(isset($_GET['action'])){
											$action = $_GET['action'];
											header('location: '.$action.'.php');
										}
										else{
											header('location: index.php');
										}
									}else{
										$error['error'] = '<p id=holu>*. Đăng nhập thất bại! </p>';
									}
								}
							}
						}
					?>
					<form action="" method="POST">
						<h1>Đăng nhập</h1>
						<div>
							<label for="">Tên Đăng Nhập</label><br>
							<input type="text" name="Name" value="" placeholder="Tên đăng nhập">
							<div>
								<?php echo isset($error['Name'])? $error['Name']: '' ?>
							</div>
						</div>
						<div class="pass">
							<label for="">Mật Khẩu</label><br>
							<input type="Password" name="Password" value="" placeholder="Mật Khẩu">
							<div>
								<?php echo isset($error['Password'])? $error['Password']: '' ?>
							</div>
						</div>
						<div>
							<input type="submit" name="dnhap" value="Đăng nhập">
							<div>
								<?php echo isset($error['error'])? $error['error']: '' ?>
							</div>
						</div>
					</form>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>