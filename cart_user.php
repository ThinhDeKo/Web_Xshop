<?php
    require_once './db/connect.php';
?>
<?php 
    session_start();
    if (isset($_SESSION['name'])){
		require_once './member/header_us.php';
	}else{
		require_once './inc/header.php';
	}	
?>
<?php
    $cart_order = "SELECT user FROM cart";
    $stmt_od = $conn -> prepare($cart_order);
    $stmt_od -> execute();
    $user_od = $stmt_od -> fetchAll();
    // var_dump($_SESSION);
    foreach($user_od as $a):
        if($_SESSION['name'] === "$a[user]" ){
        echo "<script>window.location = 'cart_detail.php'</script>";
        }
    endforeach;
    echo '<h3 class="text-center">Chưa có đơn hàng</h3>'
?>

