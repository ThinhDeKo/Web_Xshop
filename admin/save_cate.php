<?php require_once '../db/connect.php' ?>
<?php
    $id = $_POST['id'];
    $name = $_POST['name'];
    $dta = "UPDATE category SET name_category='$name' WHERE id_category=$id ";
    $md = $conn->prepare($dta);
    $md->execute();
    header("location: category.php");
?>