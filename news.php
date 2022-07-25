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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style_menu.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
</head>
<body>
    <div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>Tin Mới</li>
				</ul>
			</div>
		</div>
	</div>
    <div class="container">
        <div class="header-news">
            <div class="title">
                <h2>Tin mới</h2>
            </div>
            <!-- end title -->
            <div class="menu-news">
                <ul>
                    <li><strong><a href="" id="news-one">Tin mới</a></strong></li>
                    <li><a href="" id="menu">Khuyến mãi</a></li>
                    <li><a href="" id="menu">Thủ Thuật</a></li>
                    <li><a href="" id="menu">For gamer</a></li>
                    <li><a href="" id="menu">Video hot</a></li>
                    <li><a href="" id="menu">Đánh giá - Tư vấn</a></li>
                    <li><a href="" id="menu">App & Game</a></li>
                    <li><a href="" id="menu">Sự kiện</a></li>
                </ul>
            </div>
            <!-- end menu-news -->
        </div>
        <!-- end header-news -->
        <div class="news-main">
            <div class="news-content">
                <div class="news-product">
                    <div class="news-item-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/490x326/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/5/637717319221622910_nhung-mau-apple-watch-giam-gia-tai-fpt-shop-sau-khi-apple-watch-series-7-len-ke-6.jpg" alt="">
                    </div>
                    <div class="news-item-text">
                        <p>Những mẫu Apple Watch giảm giá tại FPT Shop sau  khi Apple Watch Series 7 lên kệ</p><br>
                        <i class="fas fa-comments com"></i><span id="comments">2</span><span id="comments">-19h trước</span>
                    </div>
                </div>
                <div class="all-news">
                    <div class="news-produccts">
                        <div class="list-new-img">
                            <img src="https://images.fpt.shop/unsafe/fit-in/120x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/5/637717037058938034_tecno-pova-2.jpg" alt="">
                        </div>
                        <div class="list-new-text">
                            <p>Chỉ tầm 4 triệu hơn, Tecno Pova 2 là chọn lựa gaming tuyệt đỉnh</p>
                            <i class="fas fa-comments com"></i><span id="comments">2</span><span id="comments">-Một ngày trước</span>
                        </div>
                    </div>
                    <!-- end 1 new-produccts -->
                    <div class="news-produccts">
                        <div class="list-new-img">
                            <img src="https://images.fpt.shop/unsafe/fit-in/120x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/2/637714741924634262_7-mau-iphone-chinh-hang-giam-gia-tai-fpt-shop-sau-khi-iphone-13-ra-mat-0.jpg" alt="">
                        </div>
                        <div class="list-new-text">
                            <p>7 mẫu iPhone chính hãng đang giảm giá tại FPT Shop sau khi iPhone 13 ra mắt</p>
                            <i class="fas fa-comments com"></i><span id="comments">2</span><span id="comments">-Một ngày trước</span>
                        </div>
                    </div>
                    <div class="news-produccts">
                        <div class="list-new-img">
                            <img src="https://images.fpt.shop/unsafe/fit-in/120x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/2/637714488907085902_samsung-galaxy-tab-s7-fe-01160.jpg" alt="">
                        </div>
                        <div class="list-new-text">
                            <p>Samsung Galaxy Tab S7 FE Wi-Fi lên kệ FPT Shop, giá tốt chỉ 11.99 triệu đồng</p>
                            <i class="fas fa-comments com"></i><span id="comments">2</span><span id="comments">-Một ngày trước</span>
                        </div>
                    </div>
                    <div class="news-produccts">
                        <div class="list-new-img">
                            <img src="https://images.fpt.shop/unsafe/fit-in/120x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/10/29/637711444967282293_laptop-gigabyte-g5-cover.jpg" alt="">
                        </div>
                        <div class="list-new-text">
                            <p>Top 4 laptop gaming chạy chip Intel thế hệ thứ 11 đáng chú ý trong tháng 11/2021</p>
                            <i class="fas fa-comments com"></i><span id="comments">2</span><span id="comments">-Một ngày trước</span>
                        </div>
                    </div>
                </div>
                <!-- end all news -->
            </div>
            <!-- end news-content -->
            <div class="new-views">
                <div class="view-content">
                    <div class="view">
                        <p>Xem nhiều</p>
                    </div>
                    <hr>
                    <ul class="news-mostview">
                        <li>
                            
                            Hướng dẫn bạn cách kiểm tra số điện thoại của mình chỉ với những thao tác đơn giản...
                        </li>
                        <li>Hướng dẫn thanh toán bằng ví Moca trên ứng dụng Grab để được giảm 500.000VNĐ</li>
                        <li>Cùng tìm hiểu về thương hiệu Tecno Mobile, đối tác toàn cầu của đội bóng Manchester City</li>
                        <li>3 lý do bạn nên mua iPad Mini 6 để chơi game, thay vì gaming phone</li>
                        <li>Trên tay Xiaomi Redmi Note 11: Dimensity 810, màn 90Hz, pin 5000 mAh, giá 4,2 triệu</li>
                        <li>Trên tay Xiaomi Redmi Note 11: Dimensity 810, màn 90Hz, pin 5000 mAh, giá 4,2 triệu</li>
                    </ul>
                </div>
            </div>
            <!-- ned most-view -->
        </div>
        <!-- end news-main -->
        <div class="all-item">
            <div class="news-middle">
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/7/637718775594344851_qualcomm-snapdragon-898-cover.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Qualcomm sẽ chính thức ra mắt SoC Snapdragon 898 vào ngày 30/11</span>
                        <p id="text">Nhà sản xuất chip Qualcomm mới đây đã tiết lộ ngày diễn ra Hội nghị thượng đỉnh công nghệ Snapdragon 2021, nơi họ rất có thể sẽ giới thiệu SoC...</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Bùi Viết Toại</span>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/5/637717284287948250_smartphone-thang-11-00.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Loạt smartphone sẽ ra mắt thị trường quốc tế trong tháng 11</span>
                        <p id="text">Một số smartphone đã từng ra mắt trước đó tại thị trường Trung Quốc. Trong khi đó, một số mẫu sẽ được công bố lần đầu tiên trong tháng 11 này.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Nguyễn Chí Dũng</span>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/5/637717297817594206_samsung-galaxy-zfold-3.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Loạt smartphone cao cấp đáng mua nhất hiện nay</span>
                        <p id="text">Bên cạnh cấu hình hàng đầu hiện nay, các smartphone cao cấp này đều sở hữu thiết kế sang trọng và nhiều tính năng tích hợp tiên tiến.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Phạm Văn Thịnh</span>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/6/637718340350839563_vivo-nex-5-cover.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Vivo NEX 5 sẽ ra mắt với 7 camera, một trong số chúng nằm dưới màn hình</span>
                        <p id="text">Theo một báo cáo xuất hiện trước đây, Vivo đang làm việc để sớm ra mắt thành viên tiếp theo thuộc dòng NEX của hãng, dự kiến sẽ tiến ra thị trường với tên gọi là Vivo NEX 5.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Bùi Viết Toại</span>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/6/637718046611126930_branding-synitrang-40.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin khuyến mãi</a><br>
                        <span id="title">Giảm đến 30% cho khách hàng mua gói Bảo hành Samsung Care+ tại FPT Shop</span>
                        <p id="text">Từ ngày 09/11 - 30/11/2021, chọn mua gói Bảo hành Samsung Care+ 1 năm tại FPT Shop, khách hàng sẽ được giảm đến 30% cùng nhiều ưu đãi thiết thực khác.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Phạm Văn Thịnh</span>
                    </div>
                </div>
                <div class="item-news">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/6/637717942837362208_thong-tin-galaxy-s22-ultra.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Samsung Galaxy S22 Ultra sẽ sử dụng camera 108MP cải tiến, giảm độ cong màn hình</span>
                        <p id="text">Mới đây, một rò rỉ khác liên quan đến Galaxy S22 Ultra vừa được chia sẻ trực tuyến. Lần này, rò rỉ đã tiết lộ các chi tiết liên quan đến màn hình cũng như camera chính của điện thoại thông minh này.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Bùi Viết Toại</span>
                    </div>
                </div>
                <div class="item-news" style="border-bottom: none;">
                    <div class="news-middle-img">
                        <img src="https://images.fpt.shop/unsafe/fit-in/300x200/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/5/637717474951779106_tren-tay-honor-x30i.jpg" alt="">
                    </div>
                    <div class="news-middle-text">
                        <a href="" class="tinmoi">Tin mới</a><br>
                        <span id="title">Trên tay Honor X30i: Đẹp như iPhone 13, chip Dimensity 810, màn 90Hz, giá chưa tới 5 triệu</span>
                        <p id="text">Mặc dù có giá bán khá phải chăng, Honor X30i vẫn nổi bật với thiết kế hiện đại như iPhone 13. Máy được trang bị chip xử lý 5G mạnh mẽ, màn hình tốc độ làm tươi cao và hệ thống 3 camera độ phân giải cao ở phía sau.</p>
                        <i class="far fa-user-circle user"></i><span id="line">--</span><span style="color: #9b9b9b;">Nguyễn Chí Dũng</span>
                    </div>
                </div>
            </div>
            <!-- end news-middle -->
            <div class="product">
                <div class="product-content">
                    <div class="product-views">
                        <p>Sản phẩm mới</p>
                    </div>
                    <div class="product-item">
                        <div class="product-img" style="font-size: 14px;">
                            <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/8/11//637643170642413961_samsung-galaxy-z-fold3-xanh-dd.jpg" alt="">
                        </div>
                        <div class="product-text">
                            <p id="name-product">Samsung Galaxy Z Fold3 5G 256GB</p>
                            <span id="number-post">103 bài viết</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img" style="font-size: 14px;">
                            <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/8/12//637643631860574048_samsung-galaxy-z-flip3-5g-vang-dd.jpg" alt="">
                        </div>
                        <div class="product-text">
                            <p id="name-product">Samsung Galaxy Z Flip3 5G 256GB</p>
                            <span id="number-post">103 bài viết</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img" style="font-size: 14px;">
                            <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/6/9//637588529466974447_vivo-y53s-xanhden-dd.jpg" alt="">
                        </div>
                        <div class="product-text">
                            <p id="name-product">Vivo Y53s 8GB+3GB - 128GB</p>
                            <span id="number-post">103 bài viết</span>
                        </div>
                    </div>
                    <div class="product-item">
                        <div class="product-img" style="font-size: 14px;">
                            <img src="https://images.fpt.shop/unsafe/fit-in/80x80/filters:quality(90):fill(white)/fptshop.com.vn/Uploads/Originals/2021/11/1//637713521930355851_00755010-oppo-a74-dd.jpg" alt="">
                        </div>
                        <div class="product-text">
                            <p id="name-product">OPPO A74 8GB-128GB</p>
                            <span id="number-post">103 bài viết</span>
                        </div>
                    </div>
                    <p style="text-align: center;color: #0168fa;padding-bottom: 15px; margin-top: 5px;cursor: pointer;">Xem thêm</p>
                </div>
            </div>
            <!-- end product -->
        </div>
        <!-- end all-item -->
        
    </div>
</body>
</html>