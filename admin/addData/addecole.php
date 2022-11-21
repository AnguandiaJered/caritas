<?php
    include '../../config/database.php';

    if(isset($_POST['nomecole']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail']) && isset($_POST['responsable'])){
      
        $nomecole=$_POST['nomecole'];  
        $adresse=$_POST['adresse'];  
        $telephone=$_POST['telephone'];  
        $mail=$_POST['mail'];  
        $responsable=$_POST['responsable'];  

        $req=$db->prepare('INSERT INTO `ecole`(nomecole,adresse,telephone,mail,responsable) VALUES (:nomecole,:adresse,:telephone,:mail,:responsable)');
        $req->execute([
            'nomecole'=>$nomecole,
            'adresse'=>$adresse,
            'telephone'=>$telephone,
            'mail'=>$mail,
            'responsable'=>$responsable,
        ]);
        header('location:../../ecole.php');  
    }
?>