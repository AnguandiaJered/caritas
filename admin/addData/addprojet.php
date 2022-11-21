<?php
    include '../../config/database.php';

    if(isset($_POST['designation']) &&  isset($_POST['description']) && isset($_POST['coordonateur']) && isset($_POST['service_id']) && isset($_POST['departement_id'])){
     
        $designation=$_POST['designation'];  
        $description=$_POST['description'];  
        $coordonateur=$_POST['coordonateur'];  
        $service_id=$_POST['service_id'];   
        $departement_id=$_POST['departement_id'];   

        $req=$db->prepare('INSERT INTO `projets`(designation,description,coordonateur,service_id,departement_id) VALUES (:designation,:description,:coordonateur,:service_id,:departement_id)');
        $req->execute([
            'designation'=>$designation,
            'description'=>$description,
            'coordonateur'=>$coordonateur,
            'service_id'=>$service_id,
            'departement_id'=>$departement_id,
        
        ]);
        header('location:../../projet.php');  
    }
?>