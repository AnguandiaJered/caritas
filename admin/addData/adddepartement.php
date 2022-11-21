<?php
    include '../../config/database.php';

    if(isset($_POST['designation'])){
      
        $designation=$_POST['designation'];  

        $req=$db->prepare('INSERT INTO departements(designation) VALUES (:designation)');
        $req->execute([
            'designation'=>$designation
        ]);
        header('location:../../departement.php');  
    }
?>