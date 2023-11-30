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
</head>

<body>
    <nav class="menu">
            <img src="./assets/devchallenges.svg" alt="logo de Página">
            <ul id="menuList">
                <div class="clickAndActive">
                <li>
                    Xanthe Neal
                    <span class="material-symbols-outlined arrowIcon">
                        arrow_drop_up
                    </span>
                </div>
                
                    <div class="containerNavInteractive">
                        <ul class="menu__nesting">
                            <div class="myProfilePosition">     
                            <li class="liInteractive"><span class="material-symbols-outlined">
                                    account_circle
                                </span>
                                <a href="" class="aTextInteractive">My Profile</a>
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
                                <a href="" class="logOutText aTextInteractive">Logout</a>
                            </li>
                            </div>
                        </ul>
                    </div>

                </li>
            </ul>

    </nav>



    <div class="bigContainerAll">
        <section>
            <a href="#" class="linkBack">
                < Back</a>
                    <section class="container">
                        <div class="subContainerForm">
                            <div class="changeInfoAndText">
                                <h2 class="changeInfo">Change Info</h2>
                                <p class="changesWill">Changes will be reflected to every services</p>
                            </div>
                            <div class="changePhoto">
                                <img src="./assets/Facebook.svg" alt="">
                                <h4>CHANGE PHOTO</h4>
                            </div>
                            <br>
                            <form action="" method="POST">
                                <label for="name">Name</label><br>
                                <input type="text" id="name" name="name" placeholder="Enter your name.."><br>
                                <label for="bio">Bio</label><br>
                                <input type="text" id="bio" name="bio" placeholder="Enter your bio.." class="inputBio"><br>

                                <label for="phone">Phone</label><br>
                                <input type="text" id="phone" name="phone" placeholder="Enter your phone.."><br>

                                <label for="email">Email</label><br>
                                <input type="text" id="email" name="email" placeholder="Enter your email.."><br>

                                <label for="password">Password</label><br>
                                <input type="text" id="password" name="password" placeholder="Enter your password.."><br>
                                <button type="submit" class="btnSave">Save</button>
                            </form>
                        </div>
                    </section>
                    <div class="linksFoot">
                        <p>created by <a href="#" class="aLink">username</a></p>
                        <p>devChallenges.io</p>
                    </div>
        </section>
    </div>
</body>

</html>