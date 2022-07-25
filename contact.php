<?php
    session_start();
    if(isset($_SESSION['name']))
    {
      $name_user = $_SESSION['name'];
      // print_r($name_user);
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style_contact.css">
</head>
<body>
    <div class="services-breadcrumb" style="margin-bottom: 50px;">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>LIÊN HỆ</li>
				</ul>
			</div>
		</div>
	</div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                <h1 id="title">Thông Tin Liên Hệ Cửa Hàng</h1>
                <div class="content">
                    <h2>Giới Thiệu Công Ty Cổ Phần Viễn Thông King Phone</h2>
                    <p id="text">I. Lịch sử hình thành</p>
                    <p>King Phone là hệ thống kinh doanh nhượng quyền bán lẻ Smartphone, Phụ kiện chính hãng và sửa chữa dịch vụ, là đối tác của các hãng điện thoại chính hãng lớn tại Việt Nam như: Apple, Samsung, Oppo, Realme, Xiaomi,…</p>
                    <p>Hệ thống bán lẻ King Phone hiện có trụ sở chính tại địa chỉ:thị trấn phúc thọ - Phúc Thọ - Hà Nội </p>
                    <p>Thành lập từ năm 2012, trải qua gần 10 năm phát triển, Phone King đã trở thành điểm đến quen thuộc của khách hàng yêu công nghệ trên toàn quốc với các sản phẩm điện thoại, máy tính bảng, Smartphone chính hãng uy tín chất lượng. Thời điểm hiện tại hệ thống đã có 17 cửa hàng nhượng quyền + 4 trung tâm bảo hành trải dài khắp toàn quốc tạo sự thuận tiện cho khách hàng.</p>
                </div>
                <div class="wrapper">
                    <div class="col1">
                        <p id="text">Một vài thông tin về công ty:</p>
                        <p>Tên công ty: Công Ty Cổ Phần Viễn Thông Phone King</p>
                        <p>Địa chỉ: Thị trấn phúc thọ - Phúc Thọ - Hà Nội, Việt Nam</p>
                        <p>MST: 0105815899 (Số giấy chứng nhận đăng ký kinh doanh thương nhân</p>
                        <p>Ngày cấp lần đầu: 12/03/2012</p>
                        <p>Đăng ký thay đổi lần 2: 04/11/2013</p>
                        <p>Nơi cấp: Sở kế hoạch và đầu tư thành phố Hà Nội</p>
                        <p>Số điện thoại : 1800 6601 / 0865998921</p>
                        <p>Email: Dungncshop@gmail.com</p>
                    </div>
                    <div class="img">
                        <img src="./images/5afbe7b3e6.png" alt="">
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
        </div>
    </div>
</body>
</html>
<?php require_once './inc/footer.php' ?>