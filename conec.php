<?php

    $link = 'mysql:host=localhost; dbname=cursito';
    $user = 'root';
    $password = '';
    // echo "conectado";
    try{
        $conec = new PDO($link, $user, $password);
    } catch(PDOException $e){
        print "error". $e->getMessage() ."<br>";
        die();
    }

?>