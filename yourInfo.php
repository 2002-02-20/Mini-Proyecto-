<?php
session_start();
if (isset($_SESSION['datosUsuario'])) {

    $datosUsuario = $_SESSION['datosUsuario'];
} else {
    // si no existe ninguna session redireccionar a:
    #header('location: ./getInto.php'); 
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="./CSS/SecondData.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <script src="./JS/selectec.js" defer></script>

</head>

<body>
    <nav>
        <img src="./assets/devchallenges.svg" alt="logo de Página">

        <ul>
            <div class="interactiveName">
                <li><?php $datosUsuario['name'] ?>
                    <span class="material-symbols-outlined">
                        arrow_drop_down
                    </span>
                </li>
            </div>

            <div class="interactiveMenu">
                <ul>
                    <div class="myProfileInteractive">
                        <li class="liInteractive">
                            <span class="material-symbols-outlined">
                                account_circle
                            </span>
                            <a href="" class="aTextInteractive">My Profile</a>
                        </li>
                    </div>
                    <div class="groupChatInteractive">
                        <li class="liInteractive2">
                            <span class="material-symbols-outlined groupChat ">
                                group
                            </span>
                            <a href="" class="aTextInteractive">Group Chat</a>
                        </li>
                    </div>
                    <div class="logOutInteractive">
                        <li class="liInteractive3"><span class="material-symbols-outlined logOutText">
                                logout
                            </span>
                            <a href="./login.php" class="logOutText aTextInteractiveLog">Logout</a>
                        </li>
                    </div>
                </ul>
            </div>

        </ul>

    </nav>

    <section>
        <h2 class="personalInfo">Personal info</h2>
        <p class="basicInfo">Basic info, like your name and photo</p>
    </section>

    <section>

        <table>
            <thead>
                <th>
                    <div>
                        <h3 class="thProfile">Profile</h3>
                        <p class="thSomeInfo">Some info may be visible to other people</p>
                    </div>

                    <div>
                        <a href="./changeInfo.php"><button class="thBtnEdit">Edit</button></a>
                    </div>
                </th>
            </thead>
            <tbody>
                <td>
                    <div class="nameTd">
                        <h3>PHOTO</h3>
                    </div>
                    <div>
                        <img src="./assets/Google.svg" alt="">
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>NAME</h3>
                    </div>
                    <div>
                        <p><?php echo $datosUsuario['name'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>BIO</h3>
                    </div>
                    <div>
                        <p><?php echo $datosUsuario['bio'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>PHONE</h3>
                    </div>
                    <div>
                        <p><?php echo $datosUsuario['phone'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>EMAIL</h3>
                    </div>
                    <div>
                        <p><?php echo $datosUsuario['email'] ?></p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>PASSWORD</h3>
                    </div>
                    <div>
                        <p><?php echo $datosUsuario['contrasena'] ?></p>
                    </div>
                </td>
            </tbody>
        </table>
        <div class="linksFoot">
            <p>created by <a href="#" class="aLink">username</a></p>
            <p>devChallenges.io</p>
        </div>
    </section>

</body>

</html>