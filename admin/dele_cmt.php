<?php require_once '../db/connect.php' ?>
<?php
$id = $_GET['id'];
$sql = "DELETE FROM comment WHERE id_comment = $id";
$stmt = $conn -> prepare($sql);
$stmt->execute();
header("location: comment.php")
?>