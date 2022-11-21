<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['designation'])){
      
        $id=$_POST['id'];  
        $designation=$_POST['designation'];  

        $req=$db->prepare('UPDATE services SET designation=:designation WHERE id=:id');
        $req->execute([
            'designation'=>$designation,
            'id'=>$id
        ]);
        header('location:../../service.php');  
    }
?>