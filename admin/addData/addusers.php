<?php
    include '../../config/database.php';

    if(isset($_POST['noms']) &&  isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){
      
        $noms=$_POST['noms'];  
        $email=$_POST['email'];  
        $password=$_POST['password'];  
        $role=$_POST['role'];  

        $req=$db->prepare('INSERT INTO users(noms,email,password,role) VALUES (:noms,:email,:password,:role)');
        $req->execute([
            'noms'=>$noms,
            'email'=>$email,           
            'password'=>$password,
            'role'=>$role,
        ]);
        header('location:../../users.php');  
    }
?>