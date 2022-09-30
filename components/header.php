<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../style/style.css" />
    <script defer src="../js/script.js"></script>
    <title>BOXING RING GARDÉEN</title>

</head>

<body>
    <header>
        <nav>
            <h1 class="logo animate__animated animate__flipInY"> <a href="index.html"> <img src="../media/logo/logoclassic.svg" alt="logo BRG"></a></h1>
            <img class=" logoimgmediaq animate__animated animate__pulse" src="../media/logo/logoclassicmediaq.svg" alt="logo BRG">
            <h1 class="logomediaq">BOXING RING GARDÉEN</h1>
            <div class="nav-links animate__animated animate__backInDown">
                <a class="active links " href="index.html">Accueil</a>
                <a class="links" href="le-club.html">Le club</a>
                <a class="links" href="le-vestiare.html">Le vestiaire</a>
                <a class="links" href="adhesion-et-tarifs.html">Adhésion & tarifs</a>
                <a class="links" href="contact.html">Contact</a>
            </div>
            <a class="links" href="./"><img class="icon_move" onmouseover="mouseOver()" onmouseout="mouseOut()" width="40px" src="../media/icons/user_space.svg" alt="Espace membre"></a>
            <a class="links" href="./"><img class="icon_move_right" onmouseover="mouseOverB()" onmouseout="mouseOutB()" width="30px" src="../media/icons/log-out.svg" alt="déconnection"></a> 
            <a class="links" href="./"><img class="icon_move_left" onmouseover="mouseOverA()" onmouseout="mouseOutA()" width="30px" src="../media/icons/log-in.svg" alt="connection"></a>

            <nav2 class="navbar fixed-top burger-menu">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasNavbarLabel">BOXING RING GARDÉEN</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="#">Accueil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Le club</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Le vestiaire</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Adhésion & tarifs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Contact</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#"><img onmouseover="bigImg(this)" onmouseout="normalImg(this)" width="40px" src="../media/icons/user_space.svg" alt="Espace membre">
                                        <img width="30px" src="../media/icons/log-in.svg" alt="connection">
                                        <img width="30px" src="../media/icons/log-out.svg" alt="déconnection">
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Réseaux sociaux
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li class="title-rs">Suivez nos réseaux sociaux, pour ne manquer aucune news de la team BRG</li>

                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <div class="col social">
                                            <div class="reseaux">

                                                <a href="https://www.facebook.com/samy.namouchi" target="_blank"><img class="social-icon" src="../media/icons/facebook.svg" alt=""></i></a>
                                                <a href="https://instagram.com/boxing_ring_gardeen?igshid=YmMyMTA2M2Y=" target="_blank"><img class="social-icon" src="../media/icons/insta.svg" alt=""></i></a>
                                                <a href="https://wa.me/33627040945" target="_blank"><img class="social-icon" src="../media/icons/wapp.svg" alt=""></i></a>
                                                <a href="https://youtube.com" target="_blank"><img class="social-icon" src="../media/icons/ytb.svg" alt=""></i></a>

                                            </div>
                                        </div>
                                    </ul>
                                    <img id="img-burger" src="../media/images/bande-poings-brg2.png" alt="poings et bande de boxe">
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav2>
        </nav>

        <video id="background-video" autoplay loop muted>
            <source src="../media/movie/background/background.mp4" type="video/mp4" />
        </video>
    </header>