<?php require_once '../db/connect.php' ?>
<?php
    $userr = $_GET['user'];
    $dta = "DELETE FROM user WHERE user='$userr'";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: admin.php");
?>