<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['nomecole']) && isset($_POST['adresse']) && isset($_POST['telephone']) && isset($_POST['mail']) && isset($_POST['responsable'])){
      
        $id=$_POST['id'];  
        $nomecole=$_POST['nomecole'];  
        $adresse=$_POST['adresse'];  
        $telephone=$_POST['telephone'];  
        $mail=$_POST['mail'];  
        $responsable=$_POST['responsable'];  

        $req=$db->prepare('UPDATE `ecole` SET nomecole=:nomecole,adresse=:adresse,telephone=:telephone,mail=:mail,responsable=:responsable WHERE id=:id');
        $req->execute([
            'nomecole'=>$nomecole,
            'adresse'=>$adresse,
            'telephone'=>$telephone,
            'mail'=>$mail,
            'responsable'=>$responsable,
            'id'=>$id,
        ]);
        header('location:../../ecole.php');  
    }
?>