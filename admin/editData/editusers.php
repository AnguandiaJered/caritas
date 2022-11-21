<?php
    include '../../config/database.php';

    if(isset($_POST['id']) && isset($_POST['noms']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['role'])){
      
        $id=$_POST['id'];  
        $noms=$_POST['noms'];  
        $email=$_POST['email'];  
        $password=$_POST['password'];  
        $role=$_POST['role'];  

        $req=$db->prepare('UPDATE `users` SET noms=:noms,email=:email,password=:password,role=:role WHERE id=:id');
        $req->execute([
            'noms'=>$noms,
            'email'=>$email,
            'password'=>$password,
            'role'=>$role,
            'id'=>$id,
        ]);
        header('location:../../users.php');  
    }
?>