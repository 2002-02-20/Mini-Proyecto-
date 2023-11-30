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
        $hash,
    ]);

    header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
}


/* PARA AGREGAR DATOS DESDE LA TABLA 

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $foto= $_POST['foto'];
    $name= $_POST['name'];
    $bio= $_POST['bio'];
    $phone= $_POST['phone'];

    $hash = password_hash($password, PASSWORD_DEFAULT);
 
}

$query = "INSERT INTO usuarios(`email`, `contrasena`, `foto`, `name`, `bio`, `phone`) VALUE (?,?,?,?,?,?)";

try{

    $stm = $pdo->prepare($query);
    $stm->execute([
        $email,
        $hash,
        $foto,
        $name,
        $bio,
        $phone
    ]);

    header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
} 


*/