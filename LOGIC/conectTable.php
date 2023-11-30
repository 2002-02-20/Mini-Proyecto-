<?php

require_once './conn.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password']; 

    $hash = password_hash($password, PASSWORD_DEFAULT);
 
}

$query = "INSERT INTO usuarios(`email`, `contrasena`) VALUE (?,?)";

try{

    $stm = $pdo->prepare($query);
    $stm->execute([
        $email,
        $hash
    ]);

    header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
}