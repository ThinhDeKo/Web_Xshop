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
    <link rel="stylesheet" href="./css/style_warranty.css">
</head>
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
					<li>CHÍNH SÁCH BẢO HÀNH</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
    <div class="container">
        <div class="main">
            <h1>Chính sách bảo hành của King Phone</h1>
            <div class="line1">
                <strong><p id="title">Chính sách bảo hành tại King Shop</p></strong>
                <p id="text">Đầu tiên, xin chân thành cảm ơn Quý khách đã tin tưởng và lựa chọn mua sắm tại KING SHOP.</p>
                <ul class="list">
                    <li>Với phương châm “Quyền lợi của Khách hàng là quan trọng nhất”, tất cả các sản phẩm mua tại Hệ thống KING PHONE trên toàn quốc đều được áp dụng chính sách bảo hành theo đúng quy định của Hãng</li>
                    <li>ĐẶC BIỆT, đối với sản phẩm là Điện thoại di động, Máy tính bảng, Máy tính xách tay, Đồng hồ, Máy in và 1 số phụ kiện có điện khác, Khách hàng được hưởng chính sách riêng của KING PHONE:</li>
                    <span id="free">“MIỄN PHÍ 1 ĐỔI 1 NẾU CÓ LỖI PHẦN CỨNG TRONG VÒNG 30 NGÀY ĐẦU TIÊN MUA HÀNG”.</span><br>
                    <span id="free">Quý khách vui lòng lưu ý 1 số nội dung sau:</span>
                </ul>
                <ol class="warning">
                    <li> Chương trình bảo hành bắt đầu có hiệu lực từ thời điểm KING PHONE xuất hóa đơn cho Quý khách.</li>
                    <li>Với mỗi dòng sản phẩm khác nhau sẽ có chính sách bảo hành khác nhau tùy theo chính sách của Hãng/Nhà cung cấp.</li>
                    <li> Để tìm hiểu thông tin chi tiết về chính sách bảo hành cho sản phẩm cụ thể, xin liên hệ bộ phận Chăm sóc Khách hàng của KING PHONE: 1800 6616                    </li>
                </ol>
            </div>
            <div class="line2">
                <p id="title">Các trường hợp nằm ngoài chính sách bảo hành</p>
                <p id="text">Những trường hợp dưới đây sẽ không nằm trong chính sách bảo hành miễn phí của Nhà sản xuất:</p>
                <ul class="list2">
                    <li>Sản phẩm hết hạn bảo hành (Vui lòng tra cứu thời hạn bảo hành sản phẩm tại đây).</li>
                    <li>Sản phẩm đã bị thay đổi, sửa chữa không thuộc các Trung Tâm Bảo Hành Ủy Quyền của Hãng.</li>
                    <li>Sản phẩm lắp đặt, bảo trì, sử dụng không đúng theo hướng dẫn của Nhà sản xuất gây ra hư hỏng.</li>
                    <li>Sản phẩm trong tình trạng bị khóa tài khoản cá nhân như: Tài khoản khóa máy/màn hình, khóa tài khoản trực tuyến Gmail, iCloud...</li>
                    <li>Khách hàng sử dụng phần mềm, ứng dụng không chính Hãng, không bản quyền.                    </li>
                    <li>Màn hình có từ bốn (04) điểm chết trở lên.</li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px;color: red;">Ngoài ra, cơ chế bảo hành cũng không có hiệu lực đối với các lỗi thường thấy nhưng không đến từ nhà sản xuất như:</p>
                <ul class="list2">
                    <li>Sản phẩm lỗi do ngấm nước, chất lỏng và bụi bẩn. Quy định này áp dụng cho cả những thiết bị đạt chứng nhận chống bụi/chống nước cao nhất là IP68.</li>
                    <li>Sản phẩm bị biến dạng, nứt vỡ, cấn móp, trầy xước nặng do tác động nhiệt, tác động bên ngoài.</li>
                    <li>Sản phẩm có vết mốc, rỉ sét hoặc bị ăn mòn, oxy hóa bởi hóa chất.                    </li>
                    <li>Sản phẩm bị hư hại do thiên tai, hỏa hoạn, lụt lội, sét đánh, côn trùng, động vật vào</li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px;color: red;">Một số lưu ý trước khi bảo hành</p>
                <ul class="list2">
                    <li>Trong quá trình thực hiện dịch vụ bảo hành, các nội dung lưu trữ trên sản phẩm của Quý khách sẽ bị xóa và định dạng lại. Do đó, Quý khách vui lòng tự sao lưu toàn bộ dữ liệu trong sản phẩm, đồng thời gỡ bỏ tất cả các thông tin cá nhân mà Quý khách muốn bảo mật. KING PHONE không chịu trách nhiệm đối với bất kỳ mất mát nào liên quan tới các chương trình phần mềm, dữ liệu hoặc thông tin nào khác lưu trữ trên sản phẩm bảo hành.</li>
                    <li> Vui lòng tắt tất cả các mật khẩu bảo vệ KING PHONE sẽ từ chối tiếp nhận bảo hành nếu thiết bị của bạn bị khóa bởi bất cứ phương pháp nào.</li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px;color: red;">Chính sách bảo hành iphone</p>
                <p id="text">Sản phẩm có lỗi phần cứng thuộc phạm vi bảo hành sẽ được hưởng chính sách 1 đổi 1 trong vòng 01 tháng kể từ ngày mua máy; từ tháng thứ 02 đến tháng thứ 12, sản phẩm sẽ được bảo hành theo đúng chính sách của Hãng Apple. Quý khách hàng vui lòng tham khảo chính sách bảo hành của Hãng Apple theo đường link sau: <a href="https://www.apple.com/legal/warranty/products/ios-warranty-rest-of-apac-vietnamese.html">Tại đây</a></p>
                <p id="text">Hoặc liên hệ tổng đài Chăm sóc khách hàng của Apple tại Việt Nam để biết thêm chi tiết: 1800 1127</p>
                <p style="font-size: 20px;margin-top: 10px;color: red;">Lưu ý các trường hợp bảo hành Apple Watch:</p>
                <ul class=" list2">
                    <li> Các bộ phận được bảo hành gồm: Thân máy, phụ kiện kèm bên trong hộp máy, dây đeo (tùy tình trạng thực tế)                    </li>
                    <li>Khi mua Apple Watch tại nước bán nhưng đến nước chưa được phép bán Apple Watch thì sẽ không được hưởng chế độ bảo hành Apple Watch.</li>
                    <li>Việt Nam không được bảo hành Apple Watch Edition.</li>
                    <li>Tham khảo thêm về vấn đề da nhạy cảm với dây đeo Apple Watch <a href="https://www.apple.com/legal/warranty/products/ios-warranty-rest-of-apac-vietnamese.html">tại đây</a></li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px; color: red;">Ngoài ra, Quý khách lưu ý các trường hợp dưới đây sẽ không được bảo hành về lỗi thẩm mỹ:</p>
                <ul class="list2">
                    <li>Dây đeo bị biến dạng (cong, gãy, nứt) tại vị trí chốt, khóa</li>
                    <li>Dây đeo bị giãn, nở tại vị trí chốt, khóa.</li>
                    <li>Dây bị trầy, xước, cạ, cấn.</li>
                    <li>Dây da thấm nước, chất lỏng bị biến dạng.</li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px; color: red;">Các trường hợp lỗi chất liệu và lỗi gia công dưới đây sẽ chỉ được bảo hành khi:</p>
                <ul class="list2">
                    <li>Dây đeo thể thao bị bong tróc mà không bị biến dạng, rách, …</li>
                    <li>Dây đeo Da có nam châm (Leather Loop) bị tróc, hở viền.</li>
                    <li>Dây kim loại khoá màu xám (Black Link Bracelet) bị đổi màu, oxy hoá.</li>
                </ul>
                <p style="font-size: 20px;margin-top: 10px; color: red;">Ngoài ra, chương trình bảo hành không áp dụng cho trường hợp gãy khoá dây black Link Bracelet, tuy nhiên sẽ hỗ trợ dịch vụ đổi bù phí cho Quý khách hàng.</p>
                <p id="text">Hệ thống sẽ từ chối bảo hành và từ chối dịch vụ đổi bù phí với tất cả các trường hợp dưới đây:</p>
                <ul class="list2">
                    <li>Sản phẩm đã bị thay thế linh kiện không chính hãng</li>
                    <li>Sản phẩm đã bị thay thế linh kiện không chính hãng.</li>
                    <li>Sản phẩm bị tháo rời hoặc thiếu linh kiện bên trong.</li>
                </ul>
                <p id="text">Trung tâm bảo hành hãng</p>
                <p id="text">Khách hàng có thể bảo hành máy tại các cửa hàng KING PHONE trên toàn quốc cũng như trung tâm bảo hành chính hãng sản phẩm
                </p>
            </div>
            

        </div>
    </div>
</body>
</html>
<?php require_once './inc/footer.php' ?>