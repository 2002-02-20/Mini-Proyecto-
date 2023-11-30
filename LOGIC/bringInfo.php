<?php
#TRAER DATOS DE LA TABLA
require_once './conn.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
  
}

$query = 'SELECT * FROM usuarios WHERE email = ?';

 

try {
    $stm = $pdo->prepare($query);
    $stm->execute([$email]);

    $result = $stm->fetch(PDO::FETCH_ASSOC);

    print_r($result);
    
    #VERIFICAR CONTRASEÑA
    if(password_verify($password, $result['contrasena'])){

        session_start();

        $_SESSION['datosUsuario'] = $result;

        header('location: ../yourInfo.php');
         
    } else {
        echo "La contraseña es incorrecta"; 
    
    }

} catch (PDOException $e) {
    echo $e->getMessage(); 
}