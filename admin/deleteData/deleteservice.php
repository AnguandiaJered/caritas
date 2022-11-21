<?php
    include '../../config/database.php';

    $id=$_GET['id'];

    $stmt=$db->prepare("DELETE FROM services WHERE id=:id");
    $stmt->execute([
        'id'=>$id
    ]);
    header('location:../../service.php');  
  
?>