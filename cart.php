<?php 
	session_start();
	if(isset($_SESSION['name']))
	{
		$name_user = $_SESSION['name'];
		// print_r($name_user);
	}

?>
<?php require_once './db/connect.php' ?>
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}


	$action = (isset($_GET['action']))? $_GET['action']: 'add';

	$quantity = (isset($_GET['quantity']))? $_GET['quantity'] : 1;
	if($quantity < 0){
		$quantity = 1;
	}
	// var_dump($quantity);
	// var_dump($action);
	// die();

	$sql = "SELECT * FROM product WHERE id_product = $id";
	$stmt = $conn -> prepare($sql);
	$stmt->execute();
	$cart = $stmt -> fetch();


	$item = [
		'id' => $cart['id_product'],
		'name_product' => $cart['name_product'],
		'image' => $cart['image'],
		'price' => $cart['sale'],
		'quantity' => $quantity
	];
	if(isset($_SESSION['carts'][$id])){
		$_SESSION['carts'][$id]['quantity'] += $quantity;
	}else{
		$_SESSION['carts'][$id] = $item;
	}
	// session_destroy();
	// die();
	// $_SESSION['carts'][$id] = $item;
	if(isset($_GET['action']) && $_GET['action'] === 'delete'){
		unset($_SESSION['carts'][$id]);
		header("location: view_cart.php");
	}

	if(isset($_GET['action']) && $_GET['action'] === 'update'){
		$_SESSION['carts'][$id]['quantity'] = $quantity;
	}


	// header('location: view_cart.php');

	header('location: view_cart.php');
	// echo '<pre>';
	// print_r($_SESSION['carts'])
?>