<?php
    include '../../config/database.php';

    if(isset($_POST['designation'])){
      
        $designation=$_POST['designation'];  

        $req=$db->prepare('INSERT INTO services(designation) VALUES (:designation)');
        $req->execute([
            'designation'=>$designation
        ]);
        header('location:../../service.php');  
    }
?>