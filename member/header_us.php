<?php
  if(isset($_SESSION['name']))
  {
    $name_user = $_SESSION['name'];
  }else{
	  require_once '../inc/header.php';
  }

?>
<?php require_once './db/connect.php' ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title>King Phone</title>
	<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
	<link rel="shortcut icon" href="images/favicon2.png" type="image/x-icon">
	<link rel="stylesheet" href="../Form/Form/style.css">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"/>

	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Bootstrap css -->
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Main css -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<link href="css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
	<!-- pop-up-box -->
	<link href="css/menu.css" rel="stylesheet" type="text/css" media="all" />
	<!-- menu style -->
	<!-- //Custom-Files -->

	<!-- web fonts -->
	<link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //web fonts -->

</head>

<body>
<?php 
	$sql = "SELECT * FROM user";
	$stmt = $conn -> prepare($sql);
	$stmt->execute();
	$user = $stmt -> fetchAll();
	$ql = "SELECT * FROM information WHERE id = 1";
	$ss = $conn->prepare($ql);
	$ss->execute();
	$inf = $ss->fetch();
	?>
	<?php
	  
		foreach($user as $val):
		  if ($val['user'] == $name_user):
		  $img = $val['avatar'];
		  $name = $val['user'];
		  endif;
		endforeach;
		
	?>
	
	<!-- top-header -->
	<div class="agile-main-top">
		<div class="container-fluid">
			<div class="row main-top-w3l py-2">
				<div class="col-lg-4 header-most-top">
					<p class="text-white text-lg-left text-center">Ưu đãi và giảm giá hàng đầu
						<i class="fas fa-shopping-cart ml-1"></i>
					</p>
				</div>
				<div class="col-lg-8 header-right mt-lg-0 mt-2">
					<!-- header lists -->
					<ul>
						
						<li class="text-center border-right text-white">
							<i class="fas fa-phone mr-2"></i> <?php echo '0'.$inf['phone'] ?>
						</li>
						<!-- <li class="text-center border-right text-white">
							<a href="" class="text-white">
								<i class="fas fa-sign-in-alt mr-2"></i> <?php echo $name ?> </a>
						</li> -->
						
						
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2 text-center border-right text-white">
						<!-- <i class="ri-apple-fill" style="font-size: 30px;"></i> -->
							<a class="nav-link dropdown-toggle" href="../web/index.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff;">
								<strong><i class="fas fa-sign-in-alt mr-2"></i> <?php echo $name ?></strong>
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
			
									<div class="row">
										<div class="col-sm-12">
											<ul class="multi-column-dropdown">
												<li>
													<a href="cart_user.php"><strong>Giỏ hàng <i class="fas fa-cart-arrow-down"></i></strong></a>
												</li><br>
												<li>
													<a href="change_pass.php"><strong>Đổi mật khẩu </strong></a>
												</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</li>
						
						
						
						
						<?php
                                // Nếu route là action và action=logout thì dăng xuất
                                if(isset($_GET['action']) && $_GET['action'] == 'logout')
                                {
                                    session_destroy();
									header("location: index.php");
                                }
                            ?>
						<li class="text-center border-right text-white">
							<a href="?action=logout" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đăng xuất </a>
						</li>
						<!-- <li class="text-center text-white">
							<a href="change_pass.php" class="text-white">
								<i class="fas fa-sign-out-alt mr-2"></i>Đổi mật khẩu </a>
						</li> -->
					</ul>
					<!-- //header lists -->
				</div>
			</div>
		</div>
	</div>
	<!-- Button trigger modal(select-location) -->
	<div id="small-dialog1" class="mfp-hide">
		<div class="select-city">
			<h3>
				<i class="fas fa-map-marker"></i> Vui lòng chọn vị trí của bạn</h3>
			<select class="list_of_cities">
				<optgroup label="">
					<option selected style="display:none;color:#eee;">Chọn tỉnh, thành phố</option>
					<option>Hà Nội</option>
					<option>Hồ Chí Minh</option>
					<option>Hải Phòng</option>
					<option>Đà Nẵng</option>
					<option>Bắc Ninh</option>
					<option>Bắc Giang</option>
					<option>Ninh Bình</option>
					<option>Quảng Ninh</option>
					<option>Sơn La</option>
					<option>Cà Mau</option>
					<option>Thanh Hóa</option>
					<option>Tuyên Quang</option>
					<option>Lào Cai</option>
					<option>Nha Trang</option>
				</optgroup>
			</select>
			<div class="clearfix"></div>
		</div>
	</div>
	<!-- //shop locator (popup) -->
	<!-- //modal -->
	<!-- //top-header -->

	<!-- header-bottom-->
	<div class="header-bot">
		<div class="container">
			<div class="row header-bot_inner_wthreeinfo_header_mid">
				<!-- logo -->
				<div class="col-md-3">
					<h1 class="text-center">
						<a href="">
							<img src="images/<?php echo $inf['logo'] ?>" alt="" class="img-fluid" width="120px">
						</a>
					</h1>
				</div>
				<!-- //logo -->
				<!-- header-bot -->
				<div class="col-md-9 header mt-4 mb-md-0 mb-4">
					<div class="row">
						<!-- search -->
						<div class="col-10 agileits_search">
							<form class="form-inline" action="#" method="post">
								<input class="form-control mr-sm-2" type="search" placeholder="Tìm kiếm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- //search -->
						<div class="col-2 top_nav_right text-center mt-sm-0 mt-2">
							<div class="wthreecartaits wthreecartaits2 cart cart box_1">
								<button class="btn w3view-cart" type="submit" name="submit" value="">
									<a href="../web/view_cart.php"><i class="fas fa-cart-arrow-down" style="color: white;"></i></a>
								</button>
							</div>
						</div>
						<!-- //cart details -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- shop locator (popup) -->
	<!-- //header-bottom -->
	<!-- navigation -->
	<div class="navbar-inner">
		<div class="container">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="agileits-navi_search">
					<form action="#" method="post">
						<select id="agileinfo-nav_search" name="agileinfo_search" class="border" required="">
							<option value="">Tất cả danh mục</option>
							<option value="">Iphone</option>
							<option value="">Samsung</option>	
						</select>
					</form>
				</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					
					<ul class="navbar-nav ml-auto text-center mr-xl-5">
						
						<li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
						<i class="ri-home-4-fill" style="font-size: 30px;"></i>
							<a class="nav-link" href="index.php">
								<strong>TRANG CHỦ</strong>
							</a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
						<i class="ri-smartphone-fill" style="font-size: 30px"></i>
						<!-- <i class="ri-apple-fill" style="font-size: 30px;"></i> -->
							<a class="nav-link dropdown-toggle" href="iphone.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<strong>ĐIỆN THOẠI</strong>
							</a>
							<div class="dropdown-menu">
								<div class="agile_inner_drop_nav_info p-4">
									<h5 class="mb-3"><strong>Các hãng sản xuất</strong></h5>
			
									<div class="row">
										<div class="col-sm-5 multi-gd-img">
											<ul class="multi-column-dropdown">
												<li>
													<a href="iphone.php"><strong>IPHONE</strong></a>
												</li>
												<li>
													<a href="samsung.php"><strong>SAMSUNG</strong></a>
												</li>
											</ul>
										</div>
										<div class="col-sm-7 multi-gd-img">
											<h5 class="mb-3"><strong>Sản phẩm bán chạy</strong></h5>
											<ul class="multi-column-dropdown">
												<li>
													<div class="row">
														<div class="col-sm-4">
															<a href="iphone.php"><img src="./images/iphone_new.jpg" alt="" width="100px"></a>
														</div>
														<div class="col-sm-8">
															<a href="iphone.php"><strong> Iphone 12 64GB</strong></a><br>
															<a href="iphone.php" style="color: red;"><strong>19.499.000 <ins>đ</ins></strong></a>
														</div>
													</div>
												</li>
												<li>
													<div class="row">
														<div class="col-sm-4">
															<a href="iphone.php"><img src="./images/iphone_new_2.jpg" alt="" width="100px"></a>
														</div>
														<div class="col-sm-8">
															<a href="iphone.php"><strong> Iphone 12 Pro Max 128GB</strong></a><br>
															<a href="iphone.php" style="color: red;"><strong>30.449.000 <ins>đ</ins></strong></a>
														</div>
													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</li>
						
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2" style="margin: 0px 20px">
							<i class="fas fa-address-book" style="font-size: 27px;padding-top: 9.5px;padding-bottom: 9px"></i><br>
							<!-- <i class="ri-coupon-fill" ></i><br> -->
							<a class="nav-link" href="contact.php"><strong>LIÊN HỆ</strong></a>
						</li>
						<li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2" style="margin: 0px 20px">
						<i class="fas fa-book" style="font-size: 27px;padding-top: 9.5px;padding-bottom: 9px"></i>
						<!-- <i class="ri-apple-fill" style="font-size: 30px;"></i> -->
							<a class="nav-link dropdown-toggle" href="../web/warranty.php" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<strong>CHÍNH SÁCH</strong>
							</a>
							<div class="dropdown-menu">
								<div class="p-4">
			
									<div class="row">
										<div class="col-sm-12">
											<ul class="multi-column-dropdown">
												<li>
													<a href="installment.php"><strong>TRẢ GÓP</strong></a>
												</li>
												<li>
													<a href="warranty.php"><strong>BẢO HÀNH</strong></a>
												</li>
											</ul>
										</div>
										
									</div>
								</div>
							</div>
						</li>
						<li class="nav-item mr-lg-2 mb-lg-0 mb-2" style="margin: 0px 20px">
							<i class="fas fa-newspaper" style="font-size: 27px;padding-top: 9.5px;padding-bottom: 9px"></i><br>
							<!-- <i class="ri-money-cny-box-fill" style="font-size: 30px;"></i><br> -->
							<a class="nav-link" href="news.php"><strong>TIN TỨC</strong></a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
	<!-- //navigation -->