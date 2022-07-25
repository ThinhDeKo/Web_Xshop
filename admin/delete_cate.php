<?php require_once '../db/connect.php' ?>
<?php   
    $id = $_GET['id'];
    $dta = "DELETE FROM category WHERE id_category=$id ";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: category.php");
?>