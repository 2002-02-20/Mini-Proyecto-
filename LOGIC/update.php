<?php

#PARA AGREGAR DATOS DESDE LA TABLA 
#NO FUNCIONA

require_once './conn.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password']; 
    $foto= $_POST['foto'];
    $name= $_POST['name'];
    $bio= $_POST['bio'];
    $phone= $_POST['phone'];

    #$hash = password_hash($password, PASSWORD_DEFAULT);
}

$query = 'UPDATE usuarios SET `email`, `contrasena`, `foto`, `name`, `bio`, `phone` = ?,?,?,?,?,? WHERE id = ?';

try{

    $stm = $pdo->prepare($query);
    $rs = $stm->execute([
        $email,
        #$hash,
        $password,
        $foto,
        $name,
        $bio,
        $phone
    ]);

    $sql = "SELECT * FROM usuarios WHERE `id`= ?";
    $stm1 = $pdo->prepare($sql);
    $stm1->execute(
        [$email]
    );
    $rs = $stm1->fetch(PDO::FETCH_ASSOC);

    $_SESSION['datoUsuario'] = $rs;

    header('location: ../yourInfo.php');
} catch (PDOException $e){
    echo $e->getMessage(); 
} 


