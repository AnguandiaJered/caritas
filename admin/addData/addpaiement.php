<?php
    include '../../config/database.php';

    if(isset($_POST['montant']) && isset($_POST['devise']) && isset($_POST['agent']) && isset($_POST['service'])){
      
        $montant=$_POST['montant'];  
        $devise=$_POST['devise'];  
        $agent=$_POST['agent'];  
        $service=$_POST['service'];  

        $req=$db->prepare('INSERT INTO paiement(montant,devise,agent,service) VALUES (:montant,:devise,:agent,:service)');
        $req->execute([
            'montant'=>$montant,
            'devise'=>$devise,
            'agent'=>$agent,
            'service'=>$service,
        ]);
        header('location:../../paiement.php');  
    }
?>