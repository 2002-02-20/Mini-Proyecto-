<?php
session_start();

if (isset($_SESSION['datosUsuario'])) {
    $usuario = $_SESSION['datosUsuario'];
} else {
    header('location: ./login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Info</title>
    <link rel="stylesheet" href="./CSS/ThirData.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="./JS/app.js" defer></script>
    <script src="./JS/dMChangeInfo.js" defer></script>

</head>

<body class="allPage">
    <nav class="menu">
    <img src="./assets/devchallenges.svg" alt="logo" class="logoOriginal">
     <img src="./assets/devchallenges-light.svg" alt="" class="logoWhite">
        <ul id="menuList">
            <div class="clickAndActive">
                <li>
                    <div class="divImgName">
                        <?php if ($usuario['foto'] != '') : ?>
                                    <img src="<?= $usuario['foto'] ?>" 
                                    alt="foto Perfil" class="cuadradoNav">
                                    <?php endif; ?>
                        <?php echo $usuario['name'] ?>
                        <span class="material-symbols-outlined">
                            arrow_drop_down
                        </span>
                    </div>
            </div>

            <div class="containerNavInteractive">
                <ul class="menu__nesting">
                    <div class="myProfilePosition">
                        <li class="liInteractive"><span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <a href="./yourInfo.php" class="aTextInteractive">My Profile</a>
                        </li>
                    </div>
                    <div class="myProfilePosition">
                        <li class="liInteractive2">
                            <span class="material-symbols-outlined groupChat ">
                                group
                            </span>
                            <a href="" class="aTextInteractive">Group Chat</a>
                        </li>
                    </div>

                    <div class="myProfilePositionLast">
                        <li class="liInteractive3"><span class="material-symbols-outlined logOutText">
                                logout
                            </span>
                            <a href="./LOGIC/destroy.php" class="logOutText aTextInteractive">Logout</a>
                        </li>
                    </div>
                </ul>
            </div>

            </li>
        </ul>

    </nav>



    <div class="bigContainerAll">
        <section>
            <a href="./yourInfo.php" class="linkBack">
                < Back</a>
            <section class="container">
             
                        <h2 class="changeInfo">Change Info</h2>
                        <p class="changesWill">Changes will be reflected to every services</p>
                    <form action="./LOGIC/update.php" method="POST" enctype="multipart/form-data">
                        <div class="fotoAndChangeFoto">
                            <label for="foto">
                                <div class="containImgAndIcon">
                                    <?php if ($usuario['foto'] != '') : ?>
                                    <img src="<?= $usuario['foto'] ?>" 
                                    alt="foto Perfil" class="cuadrado">
                                    <?php endif; ?>
                                    <span class="material-symbols-outlined iconCamara">
                                        photo_camera
                                    </span>
                                </div>
                            </label>
                            <div class="changePhoto">
                                <label class="changeTittle">
                                    <span class="textFoto">CHANGE FOTO</span>
                                    <input type="file" name="foto" id="foto" class="subirFoto">
                                </label>
                            </div>
                        </div>
                        <label for="name" class="labelName">Name</label><br>
                        <input type="text" id="name" name="name" placeholder="Enter your name.." class="inputEditInfo" autocomplete="off"><br>
                        <label for="bio">Bio</label><br>
                        <input type="text" id="bio" name="bio" placeholder="Enter your bio.." class="inputBio" autocomplete="off" ><br>

                        <label for="phone">Phone</label><br>
                        <input type="text" id="phone" name="phone" placeholder="Enter your phone.." class="inputEditInfo" autocomplete="off" ><br>

                        <label for="email">Email</label><br>
                        <input type="text" id="email" name="email" placeholder="Enter your email.." class="inputEditInfo"  autocomplete="off" required><br>

                        <label for="password">Password</label><br>
                        <input type="text" id="password" name="password" placeholder="Enter your password.." class="inputEditInfo"  autocomplete="off" required><br>
                        <button type="submit" class="btnSave">Save</button>
                    </form>

            </section>
            <div class="linksFoot">
                <p>created by <a href="#" class="aLink">DerekMoscui</a></p>
                <p>devChallenges.io</p>
            </div>
        </section>
        <div class="darkMode">
        <span class="material-symbols-outlined moon">
            nightlight
        </span>
    </div>
    </div>
    
</body>

</html>