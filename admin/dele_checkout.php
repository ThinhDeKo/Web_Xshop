<?php
    require_once '../db/connect.php';
    if(isset($_GET['id'])){
        $id_cart = $_GET['id'];

        $dele = "DELETE FROM cart WHERE id_cart = $id_cart";
        $stmt = $conn -> prepare($dele);
        $stmt -> execute();
        header("location: checkout.php");
    }



?>