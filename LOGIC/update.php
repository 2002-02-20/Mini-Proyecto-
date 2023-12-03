<?php

#PARA AGREGAR DATOS DESDE LA TABLA 

require_once './conn.php';
session_start(); 
$user_id= $_SESSION['datosUsuario']['id'];

if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['foto'])){
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $name= $_POST['name'];
    $bio= $_POST['bio'];
    $phone= $_POST['phone'];
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $base_url = '../FOTOS/';
    $tmp = $_FILES['foto']['tmp_name'];
    $imgName = $_FILES['foto']['name'];
    $ext = pathinfo($imgName, PATHINFO_EXTENSION);
    $url = $base_url . "profile_$user_id." . $ext;
    move_uploaded_file($tmp, $url);
   

$query = 'UPDATE usuarios SET `email` = ?,  `contrasena` = ?, `foto`= ?, `name`= ?, `bio`= ?, `phone` = ? WHERE id = ?';


try{

    $stm = $pdo->prepare($query);
    $rs = $stm->execute([
        $email,
        $hash,
        #$password,
        #$foto,
        $url, 
        $name,
        $bio,
        $phone,
        $user_id ,
    ]);

    $sql = "SELECT * FROM usuarios WHERE `id`= ?";
    $stm1 = $pdo->prepare($sql);
    $stm1->execute(
        [$user_id]
    );

    $rs = $stm1->fetch(PDO::FETCH_ASSOC);

    session_start(); 
    $_SESSION['datosUsuario'] = $rs;
    $datosUsuario = $_SESSION['datosUsuario'];

   header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
} 

}

