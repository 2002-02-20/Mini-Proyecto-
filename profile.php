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
                <li>Xanthe Neal
                    <span class="material-symbols-outlined arrowIcon">
                        arrow_drop_up
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
                            <a href="" class="logOutText aTextInteractiveLog">Logout</a>
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
                        <button class="thBtnEdit">Edit</button>
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
                        <p>Xanthe Neal</p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>BIO</h3>
                    </div>
                    <div>
                        <p>I am a software developer and a big fan of devchallenges...</p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>PHONE</h3>
                    </div>
                    <div>
                        <p>908249274292</p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>EMAIL</h3>
                    </div>
                    <div>
                        <p>xanthe.neal@gmail.com</p>
                    </div>
                </td>
            </tbody>
            <tbody>
                <td>
                    <div>
                        <h3>PASSWORD</h3>
                    </div>
                    <div>
                        <p>************</p>
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