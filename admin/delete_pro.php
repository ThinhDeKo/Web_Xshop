<?php require_once '../db/connect.php' ?>
<?php
    $id = $_GET['id'];
    $dta = "DELETE FROM product WHERE id_product=$id";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: product_all.php");
?>