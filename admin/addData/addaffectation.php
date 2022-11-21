<?php
    include '../../config/database.php';

    if(isset($_POST['enseignant_id']) && isset($_POST['ecole_id'])){
      
        $enseignant_id=$_POST['enseignant_id'];  
        $ecole_id=$_POST['ecole_id'];  

        $req=$db->prepare('INSERT INTO affectation(enseignant_id,ecole_id) VALUES (:ecole_id,:ecole_id)');
        $req->execute([
            'enseignant_id'=>$enseignant_id,
            'ecole_id'=>$ecole_id,
        ]);
        header('location:../../affectation.php');  
    }
?>