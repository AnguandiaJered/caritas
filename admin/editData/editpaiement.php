<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['montant']) && isset($_POST['devise']) && isset($_POST['agent']) && isset($_POST['service'])){
      
        $id=$_POST['id'];  
        $montant=$_POST['montant'];  
        $devise=$_POST['devise'];  
        $agent=$_POST['agent'];  
        $service=$_POST['service'];  

        $req=$db->prepare('UPDATE paiement SET montant=:montant,devise=:devise,agent=:agent,service=:service WHERE id=:id');
        $req->execute([
            'montant'=>$montant,
            'devise'=>$devise,
            'agent'=>$agent,
            'service'=>$service,
            'id'=>$id
        ]);
        header('location:../../paiement.php');  
    }
?>