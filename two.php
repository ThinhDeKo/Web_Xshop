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
		$sql = "SELECT * FROM product WHERE sale > 2000000 AND sale < 7000000";
		$st = $conn->prepare($sql);
		$st->execute();
		$pr_ip = $st->fetchAll();
	?>
    <!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">TRANG CHỦ</a>
						<i>|</i>
					</li>
					<li>SẢN PHẨM</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<strong>
				<span>S</span>ẢN
                <span>P</span>HẨM
				</strong>
			</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><strong>Tất cả sản phẩm</strong></h3>
							<div class="row">
								<!--  -->
								<?php foreach($pr_ip as $u): ?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="./images/<?php echo $u['image'] ?>" alt="" width="200px">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="single.php?id=<?php echo $u['id_product'] ?>" class="link-product-add-cart">Xem chi tiết</a>
												</div>
											</div>
											<span class="product-new-top">Mới</span>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="#"><strong><?php echo $u['name_product'] ?> </strong></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><strong><?php echo number_format($u['sale'])  ?><ins>đ</ins></strong></span><br>
												<del><?php echo number_format($u['price']) ?> <ins>đ</ins></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
                                                <a href="./cart.php?id=<?php echo $u['id_product'] ?>"><input type="submit" name="submit" value="Thêm vào giỏ hàng" class="button btn" /></a>
											</div>
										</div>
									</div>
								</div>
								<?php endforeach ?>
								<!--  -->
							</div>
						</div>
						<!-- //first section -->
						
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm..</h3>
							<form action="#" method="post">
								<input type="search" placeholder="Tên danh mục..." name="search" required="">
								<input type="submit" value=" ">
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Điện thoại</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<input type="checkbox" class="checked">
										<a href="all_product.php">Tất cả</a>
									</li>
									<li class="my-1">
										<input type="checkbox" class="checked" checked>
										<a href="two.php">Từ 2 - 7 triệu</a>
									</li>
									<li class="my-1">
										<input type="checkbox" class="checked">
										<a href="seventeen.php">Từ 7 - 13 triệu</a>
									</li>
									<li>
										<input type="checkbox" class="checked">
										<a href="thirteen.php">Trên 13 triệu</a>
									</li>
									
								</ul>
							</div>
						</div>
						<!-- //price -->
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Đánh giá</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>4.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>3.5</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>3.0</span>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star-half"></i>
										<span>2.5</span>
									</a>
								</li>
							</ul>
						</div>
						<!-- //reviews -->
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Sản phẩm khuyến mãi</h3>
							<div class="box-scroll">
								<div class="scroll">
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/k1.jpg" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy On7 Prime (Vàng, 4GB RAM + 64GB ROM)</a>
											<a href="" class="price-mar mt-2">11.199.000 <ins>đ</ins></a>
										</div>
									</div>
									<div class="row my-4">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/glaxy_not.jfif" alt="" class="" width="55px">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung Galaxy Note Series </a>
											<a href="" class="price-mar mt-2">19.999.000 <ins>đ</ins></a>
										</div>
									</div>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/galaxy_z.jpg" alt="" class="" width="55px">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href="">Samsung galaxy Z Flip 3 5G 128GB</a>
											<a href="" class="price-mar mt-2">25.999.000 <ins>đ</ins></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->

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
								<h4 class="mt-2 mb-3">Dell Gamming G7 i7</h4>
								<p>Giá chỉ từ: <strong>37.899.000 <ins>đ</ins></strong> </p>
							</div>
							<div class="col-sm-5 offerimg-w3l">
								<img src="images/dell_gamming_g7.jpg" alt="" class="" width="210px">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- middle section -->

	<!-- footer -->
<?php
	require_once './inc/footer.php';
?>