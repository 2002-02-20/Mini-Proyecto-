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

    #CARGAR LA DATA NUEVA E INGRESAR A LA CUENTA DESDE LA NUEVA CUENTA LOGEADA; 
    $query = 'SELECT * FROM usuarios WHERE email = ?';

    $stm = $pdo->prepare($query);
    $stm->execute([$email]);

    $result = $stm->fetch(PDO::FETCH_ASSOC);
   
        session_start();
        $_SESSION['datosUsuario'] = $result;
        header('location: ../yourInfo.php'); 

    #SE AGREGO 
    header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
}

