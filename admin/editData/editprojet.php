<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['designation']) && isset($_POST['description']) && isset($_POST['coordonateur']) && isset($_POST['service_id']) && isset($_POST['departement_id'])){
     
        $id=$_POST['id'];  
        $designation=$_POST['designation'];  
        $description=$_POST['description'];  
        $coordonateur=$_POST['coordonateur'];  
        $service_id=$_POST['service_id'];   
        $departement_id=$_POST['departement_id'];   

        $req=$db->prepare('UPDATE `projets` SET designation=:designation,description=:description,coordonateur=:coordonateur,service_id=:service_id,departement_id=:departement_id WHERE id=:id');
        $req->execute([
            'designation'=>$designation,
            'description'=>$description,
            'coordonateur'=>$coordonateur,
            'service_id'=>$service_id,
            'departement_id'=>$departement_id,
            'id'=>$id,
        
        ]);
        header('location:../../projet.php');  
    }
?>