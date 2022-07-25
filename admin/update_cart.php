<?php 
    require_once '../db/connect.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];

        $update = "UPDATE cart SET status = 1 WHERE id_cart = $id";
        $stmt = $conn -> prepare($update);
        $stmt -> execute();
        header("location: checkout.php");
    }


?>