<?php require_once '../db/connect.php' ?>
<?php
    $id = $_GET['id'];
    $dta = "DELETE FROM information WHERE id=$id";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: infomation.php");
?>