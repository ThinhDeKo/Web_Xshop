<footer>
	<?php require_once './db/connect.php' ?>
	<?php
		$ql = "SELECT * FROM information WHERE id = 1";
		$ss = $conn->prepare($ql);
		$ss->execute();
		$inf = $ss->fetch();
	?>
		<div class="footer-top-first">
			<div class="container py-md-5 py-sm-4 py-3">
				<!-- footer first section -->				
				<!-- //footer first section -->
				<!-- footer second section -->
				<div class="row w3l-grids-footer border-top border-bottom py-sm-4 py-3">
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-dolly"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Miễn phí ship</h3>
								<p>đối với sản phẩm từ 5 triệu</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer my-md-0 my-4">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="fas fa-shipping-fast"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Giao hàng nhanh</h3>
								<p>từ 2-3 ngày</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 offer-footer">
						<div class="row">
							<div class="col-4 icon-fot">
								<i class="far fa-thumbs-up"></i>
							</div>
							<div class="col-8 text-form-footer">
								<h3>Sản phẩm uy tín</h3>
								<p>nhập khẩu 100%</p>
							</div>
						</div>
					</div>
				</div>
				<!-- //footer second section -->
			</div>
		</div>
		<!-- footer third section -->
		<div class="w3l-middlefooter-sec">
			<div class="container py-md-5 py-sm-4 py-3">
				<div class="row footer-info w3-agileits-info">
					<!-- footer categories -->
					<div class="col-md-3 col-sm-6 footer-grids">
						<h3 class="text-white font-weight-bold mb-3">Công ty</h3>
						<ul>
							<li class="mb-3">
								<a href="product.php">Giới thiệu về công ty </a>
							</li>
							<li class="mb-3">
								<a href="product.php">Chính sách bảo mật</a>
							</li>
							<li class="mb-3">
								<a href="product.php">Quy chế hoạt động</a>
							</li>
							<li class="mb-3">
								<a href="product2.php">Kiểm tra hóa đơn điện tử</a>
							</li>
							<li class="mb-3">
								<a href="product.php">Tra cứu thông tin bảo hành</a>
							</li>
							
						</ul>
					</div>
					<!-- //footer categories -->
					<!-- quick links -->
					<div class="col-md-3 col-sm-6 footer-grids mt-sm-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Chính sách</h3>
						<ul>
							<li class="mb-3">
								<a href="about.php">Chính sách trả góp</a>
							</li>
							<li class="mb-3">
								<a href="contact.php">Chính sách đổi trả</a>
							</li>
							<li class="mb-3">
								<a href="help.php">Kiểm tra hàng chính hãng</a>
							</li>
							
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids mt-md-0 mt-4">
						<h3 class="text-white font-weight-bold mb-3">Cửa hàng</h3>
						<ul>
							<li class="mb-3">
								<i class="fas fa-map-marker"></i><?php echo $inf['address'] ?></li>
							<li class="mb-3">
								<i class="fas fa-mobile"></i> 1800 6601 </li>
							<li class="mb-3">
								<i class="fas fa-phone"></i> <?php echo '0'.$inf['phone'] ?></li>
							<li class="mb-3">
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"><?php echo $inf['email'] ?></a>
							</li>
							<li>
								<i class="fas fa-envelope-open"></i>
								<a href="mailto:example@mail.com"> <?php echo $inf['email'] ?></a>
							</li>
						</ul>
					</div>
					<div class="col-md-3 col-sm-6 footer-grids w3l-agileits mt-md-0 mt-4">
						<!-- newsletter -->
						<h3 class="text-white font-weight-bold mb-3">Dịch vụ</h3>
						<ul>
							<li class="mb-3">
								<a href="about.php">Tin tuyển dụng</a></li>
							<li class="mb-3">
								<a href="about.php">Tin khuyến mãi</a> </li>
							<li class="mb-3">
								<a href="about.php">Hướng dẫn mua online</a> </li>
								<li class="mb-3">
								<a href="about.php">Hướng dẫn mua trả góp</a>  </li>
						</ul>
						<!-- //newsletter -->
						<!-- social icons -->
						
						<!-- //social icons -->
					</div>
				</div>
				<!-- //quick links -->
			</div>
		</div>
		<!-- //footer third section -->

		
		<!-- //footer fourth section (text) -->
	</footer>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white" style="font-size: 7px;">© 2007 - 2021 Công Ty Cổ Phần Bán Lẻ Kỹ Thuật Số FPT /
				 Địa chỉ: 261 - 263 Khánh Hội, P2, Q4, TP. Hồ Chí Minh / GPĐKKD số 0311609355 do Sở 
				 KHĐT TP.HCM cấp ngày 08/03/2012. GP số 47/GP-TTĐT do sở TTTT TP HCM cấp ngày 02/07/2018. 
				 Điện thoại: (028)73023456. Email: fptshop@fpt.com.vn. Chịu trách nhiệm nội dung: Nguyễn Chí Dũng.
				
			</p>
		</div>
	</div>
	<!-- //copyright -->

	<!-- js-files -->
	<!-- jquery -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- //jquery -->

	<!-- nav smooth scroll -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //nav smooth scroll -->

	<!-- popup modal (for location)-->
	<script src="js/jquery.magnific-popup.js"></script>
	<script>
		$(document).ready(function () {
			$('.popup-with-zoom-anim').magnificPopup({
				type: 'inline',
				fixedContentPos: false,
				fixedBgPos: true,
				overflowY: 'auto',
				closeBtnInside: true,
				preloader: false,
				midClick: true,
				removalDelay: 300,
				mainClass: 'my-mfp-zoom-in'
			});

		});
	</script>
	<!-- //popup modal (for location)-->

	<!-- cart-js -->
	<script src="js/minicart.js"></script>
	<script>
		paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

		paypals.minicarts.cart.on('checkout', function (evt) {
			var items = this.items(),
				len = items.length,
				total = 0,
				i;

			// Count the number of each item in the cart
			for (i = 0; i < len; i++) {
				total += items[i].get('quantity');
			}

			if (total < 3) {
				alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
				evt.preventDefault();
			}
		});
	</script>
	<!-- //cart-js -->

	<!-- password-script -->
	<script>
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->
	
	<!-- scroll seller -->
	<script src="js/scroll.js"></script>
	<!-- //scroll seller -->

	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

	<!-- start-smooth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();

				$('php,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- //end-smooth-scrolling -->

	<!-- smooth-scrolling-of-move-up -->
	<script>
		$(document).ready(function () {
			/*
			var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
			};
			*/
			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //smooth-scrolling-of-move-up -->

	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- //js-files -->
</body>

	</html>