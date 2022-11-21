<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['nom']) && isset($_POST['postnom']) && isset($_POST['prenom']) && isset($_POST['sexe']) && isset($_POST['datenaiss']) && isset($_POST['adresse']) && isset($_POST['mail']) && isset($_POST['telephone'])){
     
        $id=$_POST['id'];  
        $nom=$_POST['nom'];  
        $postnom=$_POST['postnom'];  
        $prenom=$_POST['prenom'];  
        $sexe=$_POST['sexe'];   
        $datenaiss=$_POST['datenaiss'];   
        $adresse=$_POST['adresse'];         
        $mail=$_POST['mail'];  
        $telephone=$_POST['telephone'];

        $req=$db->prepare('UPDATE `enseignant` SET nom=:nom,postnom=:postnom,prenom=:prenom,sexe=:sexe,datenaiss=:datenaiss,adresse=:adresse,mail=:mail,telephone=:telephone WHERE id=:id');
        $req->execute([
            'nom'=>$nom,
            'postnom'=>$postnom,
            'prenom'=>$prenom,
            'sexe'=>$sexe,
            'datenaiss'=>$datenaiss,
            'adresse'=>$adresse,            
            'mail'=>$mail,           
            'telephone'=>$telephone,
            'id'=>$id,           
        ]);
        header('location:../../enseignant.php');  
    }
?>