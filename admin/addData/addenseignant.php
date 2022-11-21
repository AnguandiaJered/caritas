<?php
    include '../../config/database.php';

    if(isset($_POST['nom']) &&  isset($_POST['postnom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['datenaiss']) && isset($_POST['adresse']) && isset($_POST['mail']) && isset($_POST['telephone'])){
     
        $nom=$_POST['nom'];  
        $postnom=$_POST['postnom'];  
        $prenom=$_POST['prenom'];  
        $sexe=$_POST['sexe'];   
        $datenaiss=$_POST['datenaiss'];   
        $adresse=$_POST['adresse'];       
        $mail=$_POST['mail'];  
        $telephone=$_POST['telephone']; 

        $req=$db->prepare('INSERT INTO `enseignant`(nom,postnom,prenom,sexe,datenaiss,adresse,mail,telephone) VALUES (:nom,:postnom,:prenom,:sexe,:datenaiss,:adresse,:mail,:telephone)');
        $req->execute([
            'nom'=>$nom,
            'postnom'=>$postnom,
            'prenom'=>$prenom,
            'sexe'=>$sexe,
            'datenaiss'=>$datenaiss,
            'adresse'=>$adresse,            
            'mail'=>$mail,           
            'telephone'=>$telephone,
        ]);
        header('location:../../enseignant.php');  
    }
?>