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
    <link rel="stylesheet" href="./css/style_installment.css">
<body>
    <!-- page -->
    <div class="services-breadcrumb" style="margin-bottom: 50px;">
		<div class="agile_inner_breadcrumb">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li>CHÍNH SÁCH TRẢ GÓP</li>
				</ul>
			</div>
		</div>
	</div>
    <!-- page -->
    <div class="container">
        <div class="header">
            <div class="title">
                <p>Chính Sách Trả Góp Của King Phone </p>
            </div>
            <p id="news">Chính sách trả góp tại King Phone</p>
            <p id="news">Thủ tục mua hàng trả góp</p>
            <p id="news">Hiện tại King Phone hợp tác với 5 công ty tài chính là HOME CREDIT (PPF), FE CREDIT (VPBank), Mirae Asset, HD Saison và ACS để cung cấp dịch vụ trả góp. Qúy Khách hàng có thể tham khảo thông tin chi tiết ở bảng dưới đây:</p>
        </div>
        <div class="list">
            <ul>
                <li>Thời gian duyệt: 10 phút.</li>
                <li>Tuổi: 20 - 60 tuổi.</li>
                <li>Thủ tục: CMND/TCC.</li>
                <li>Kỳ hạn: 4 - 12 tháng.</li>
            </ul>
            <img src="./images/image 1.png" alt="">
        </div>
        <div class="list">
            <ul>
                <li> Thời gian duyệt: 15 - 20 phút.</li>
                <li> Tuổi: 20 - 60 tuổi</li>
                <li>Thủ tục: Khoản vay < 8 triệu: CMND + Bằng lái xe. <br>
                    Khoản vay ≥ 8 triệu: CMND + Hộ khẩu.
                </li>
                <li>Kỳ hạn: 6 - 12 tháng.</li>
            </ul>
            <img src="./images/image 2.png" alt="">
        </div>
        <div class="list">
            <ul>
                <li>Thời gian duyệt: 10 phút.</li>
                <li>Tuổi: 20 - 60 tuổi.</li>
                <li>Thủ tục: Khoản vay < 8 triệu: CMND + Bằng lái xe. <br>
                    Khoản vay ≥ 8 triệu: CMND + Hộ khẩu.
                </li>
                <li>Kỳ hạn: 6 - 12 tháng.</li>
            </ul>
            <img src="./images/image 3.png" alt="">
        </div>
    </div>
</body>
</html>
<?php require_once './inc/footer.php' ?>