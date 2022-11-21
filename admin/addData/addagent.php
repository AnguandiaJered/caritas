<?php
    include '../../config/database.php';

    if(isset($_POST['nom']) &&  isset($_POST['postnom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['datenaiss']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail']) && isset($_POST['fonction'])){
     
        $nom=$_POST['nom'];  
        $postnom=$_POST['postnom'];  
        $prenom=$_POST['prenom'];  
        $sexe=$_POST['sexe'];   
        $datenaiss=$_POST['datenaiss'];   
        $adresse=$_POST['adresse'];  
        $telephone=$_POST['telephone'];  
        $mail=$_POST['mail'];  
        $fonction=$_POST['fonction'];  

        $req=$db->prepare('INSERT INTO `agent`(nom,postnom,prenom,sexe,datenaiss,adresse,telephone,mail,fonction) VALUES (:nom,:postnom,:prenom,:sexe,:datenaiss,:adresse,:telephone,:mail,:fonction)');
        $req->execute([
            'nom'=>$nom,
            'postnom'=>$postnom,
            'prenom'=>$prenom,
            'sexe'=>$sexe,
            'datenaiss'=>$datenaiss,
            'adresse'=>$adresse,
            'telephone'=>$telephone,
            'mail'=>$mail,           
            'fonction'=>$fonction,           
        ]);
        header('location:../../agent.php');  
    }
?>