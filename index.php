<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="./CSS/principalPAge.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="./JS/dMIndex.js" defer></script>
</head>

<body class="allPage">
    <div class="darkMode">
        <span class="material-symbols-outlined">
            nightlight
        </span>
    </div>

    <section>
        <div class="container">
            <form action="./LOGIC/conectTable.php" method="POST">
                <div class="allFormulary">

                    <div class="logo">
                        <img src="./assets/devchallenges.svg" alt="logo" class="logoOriginal">
                        <img src="./assets/devchallenges-light.svg" alt="" class="logoWhite">
                    </div>

                    <div class="title">
                        <h3 class="titleH3">Join thousands of learners from around the world</h3>
                    </div>

                    <div class="masterWeb">
                        <p class="masterWebP">Master web development by marking real-life projects. There are multiple paths for you to choose</p>
                    </div>
                    <div class="inputEmail"><span class="material-symbols-outlined emailIcon">
                            mail
                        </span><input type="text" name="email" placeholder="Email" required></div>
                    <div class="inputPassword"><span class="material-symbols-outlined passwordlIcon">
                            lock
                        </span> <input type="password" placeholder="Password" name="password" required></div>
                    <div><button type="submit" class="btnStart">Start coding now</button></div>
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
                        <p>Adready a member? </p><a href="./login.php" class="loginLink">Login</a>
                    </div>
                </div>
            </form>
            <div class="linksFoot">
                <p>created by <a href="#" class="aLink">username</a></p>
                <p>devChallenges.io</p>
            </div>
        </div>
    </section>
</body>

</html>