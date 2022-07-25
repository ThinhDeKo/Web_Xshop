<?php session_start();
  if(isset($_SESSION['name']))
  {
    $name_user = $_SESSION['name'];
  }

?>
<?php
	if (isset($_SESSION['name'])){
		require_once './member/header_us.php';
	}else{
		require_once './inc/header.php';
	}	
?>
<?php require_once './db/connect.php' ?>
<?php 
	$id = $_GET['id'];
	$sql = "SELECT * FROM product WHERE id_product = $id";
	$stmt = $conn -> prepare($sql);
	$stmt->execute();
	$pro = $stmt -> fetchAll();
	// 
	if (isset($_POST['submit_cmt'])){
		$content = $_POST['content'];
		$mem_id = "SELECT * FROM user WHERE user='".$_SESSION['name']."' ";
		$mm = $conn->prepare($mem_id);
		$mm->execute();
		$member_id = $mm->fetch();
		if (isset($_SESSION['name'])){
			$pro_id = $_GET['id'];
			
			$member = $member_id['user'];
			$ad_cmt = "INSERT INTO comment(user,id_product,content) VALUES ('$member','$pro_id','$content')";
			$st = $conn->prepare($ad_cmt);
			$st->execute();
			echo '<script>alert("Bình luận của bạn đã được gửi!") </script>';
		}
	}
	$select = "SELECT comment.*,user.name,user.avatar FROM comment INNER JOIN user 
                ON comment.user = user.user WHERE id_product=$id";
    $sthm = $conn->prepare($select);
    $sthm->execute();
    $cm = $sthm->fetchAll();
?>
<body>
	<!-- page -->
	<div class="services-breadcrumb" style="margin-top: 60px;">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Chi tiết sản phẩm</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->

	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<span>S</span>ản
				<span>P</span>hẩm</h3>
			<!-- //tittle heading -->
			<div class="row">
				<?php foreach($pro as $u): ?>
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<div class="thumb-image">
								<img src="images/<?php echo $u['image'] ?>" data-imagezoom="true" class="img-fluid" alt="" width="300px"> 
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $u['name_product'] ?></h3>
					<p class="mb-3">
						<span class="item_price"><strong><?php echo number_format($u['sale'])  ?><ins>đ</ins></strong></span> <br>
						<del class="mx-2 font-weight-light"><strong><?php echo number_format($u['price'])  ?><ins>đ</ins></strong></del>
					</p>
					<div class="single-infoagile">
						<ul>
							<li class="mb-3">
								<?php echo $u['detail'] ?>
							</li>
						</ul>
					</div>
					<div class="product-single-w3l">
						<p class="my-3">
							<i class="far fa-hand-point-right mr-2"></i>
							<label>Bảo hành</label> 5 năm nếu sản phẩm lỗi</p>
						<ul>
							<li class="mb-1">
								Sản phẩm nhập khẩu chính hãng
							</li>
							<li class="mb-1">
								Đổi trả sau khi sử dụng trong 2 tháng
							</li>
							<li class="mb-1">
								Tặng kèm các phụ kiện đi kèm
							</li>
							<li class="mb-1">
								Nhận voucher ưu đãi  
							</li>
						</ul>
						<p class="my-sm-4 my-3">
							<i class="fas fa-retweet mr-3"></i>Ngân hàng trực tuyến & Thẻ tín dụng / Ghi nợ / ATM
						</p>
					</div>
				</div>
				<?php endforeach ?>
				<button type="submit" class="js-buy" style="background-color: #0879c9;padding: 12px 25px;transition: 0.5s all;border-radius: 10px;margin-left: 30rem">
					<a style="color:#fff;font-size: 16px;" href="./cart.php?id=<?php echo $id ?>">Thêm vào giỏ hàng</a></button>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<!-- Comment -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2"  style="border: 1px solid #ccc;">
			<div>
				<h2>Hỏi và đáp về sản phẩm</h2>
			</div>
			<form action="" method="post">
				<div class="cmt" style="margin-top: 35px;">
					<textarea name="content" cols="130" rows="2" placeholder="Viết câu hỏi của bạn ..."></textarea>
				</div>
				<input type="submit" name="submit_cmt" value="Gửi câu hỏi" style="border-radius: 8px;background-color: blue;color: white">
			</form>
			<?php foreach($cm as $c): ?>
			<div class="people" style="margin-top: 40px;">
				<div class="row">
						<div class="col-md-1">
							<img src="image_user/<?php echo $c['avatar'] ?>" alt="" width="80px">
						</div>
						<div class="col-md-11">
							<h5><strong><?php echo $c['user'] ?></strong></h5>
							<span><?php echo $c['content'] ?></span>
						</div>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
	<!-- /Comment -->
	<!-- middle section -->
	<div class="join-w3l1 py-sm-5 py-4" >
		<div class="container py-xl-4 py-lg-2">
			<div class="row">
				<div class="col-lg-6">
					<div class="join-agile text-left p-4"style="background-color: #fff;">
						<div class="row">
							<div class="col-sm-7 offer-name">
								<h6>Sản phẩm mới nhất</h6>
								<h4 class="mt-2 mb-3">Iphone 13 Series</h4>
								<p>Giá mới nhất chỉ từ: <strong>21.999.000 <ins>đ</ins></strong></p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/iphone_13_hong.jpg" alt="" class="img-fluid">
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-6 mt-lg-0 mt-5">
					<div class="join-agile text-left p-4" style="background-color: #fff;">
						<div class="row ">
						<div class="col-sm-7 offer-name">
								<h6>Sản phẩm mới nhất</h6>
								<h4 class="mt-2 mb-3">Samsung Z Flip 5G</h4>
								<p>Giá chỉ từ: <strong>21.990.000 <ins>đ</ins></strong> </p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/galaxy_z.jpg" alt="" class="" width="185px">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->
<?php require_once './inc/footer.php' ?>