<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./CSS/FourtData.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

</head>

<body>

    <section>
        <div class="container">

            <form action="./LOGIC/bringInfo.php" method="POST">
                <div class="allFormulary">

                    <div class="logo"><img src="./assets/devchallenges.svg" alt="logo"></div>

                    <div class="title">
                        <h3 class="titleH3">Login</h3>
                    </div>

                    <div class="inputEmail"><span class="material-symbols-outlined emailIcon">
                            mail
                        </span><input type="text" name="email" placeholder="Email" required></div>
                    <div class="inputPassword">
                        <span class="material-symbols-outlined passwordlIcon">
                            lock
                        </span>
                        <input type="password" placeholder="Password" name="password"  required>
                    </div>
                    <div><button type="submit" class="btnStart">Login</button></div>

                    <div class="containerTextAndItems">
                        <div class="textUnderBtn">
                            <p>or continue with these social profile</p>
                        </div>
                        <div class="containerItems">
                            <div>
                                <img src="./assets/Google.svg" alt="google item" class="imgGoogle">
                            </div>
                            <div>
                                <img src="./assets/Facebook.svg" alt="facebook item" class="imgFacebook">
                            </div>
                            <div>
                                <img src="./assets/Twitter.svg" alt="Twitter item" class="imgTwitter">
                            </div>
                            <div>
                                <img src="./assets/Gihub.svg" alt="Github item" class="imgGitHub">
                            </div>
                        </div>
                        <div class="lastText">
                            <p>Don’t have an account yet?</p><a href="#" class="loginLink">Register</a>
                        </div>
                    </div>
                </div>
            </form>

        </div>
        <div class="linksFoot">
            <p>created by <a href="#" class="aLink">username</a></p>
            <p>devChallenges.io</p>
        </div>

    </section>


</body>

</html>