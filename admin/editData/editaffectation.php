<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['enseignant_id']) && isset($_POST['ecole_id'])){
      
        $id=$_POST['id'];  
        $enseignant_id=$_POST['enseignant_id'];  
        $ecole_id=$_POST['ecole_id'];  

        $req=$db->prepare('UPDATE affectation SET enseignant_id=:enseignant_id,ecole_id=:ecole_id WHERE id=:id');
        $req->execute([
            'enseignant_id'=>$enseignant_id,
            'ecole_id'=>$ecole_id,
            'id'=>$id
        ]);
        header('location:../../affectation.php');  
    }
?>