<?php
    include_once('conec.php');
    if($_POST){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $id = $_POST['id'];
        
        $query = 'UPDATE users SET email=?, password=? WHERE id=?';
        $update = $conec->prepare($query);
        $update->execute(array($email, $password, $id));
        header('Location: indexUsuarios.php');

        
    }

?>