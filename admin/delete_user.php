<?php require_once '../db/connect.php' ?>
<?php
    $user = $_GET['user'];
    $dta = "DELETE FROM user WHERE user='$user'";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: user.php");
?>