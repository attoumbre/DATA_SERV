<!DOCTYPE html>
<html lang="en">

<?php

    if(isset($_GET['formctact'])){
        if( $_GET['formctact']==10 ){
            ?>
                <script>params_abonnee= 10;</script>
            <?php 
        }
        elseif ($_GET['formctact']==20) {
            ?>
                <script>params_abonnee= 20;</script>
            <?php 
        }
    } 
    else { 
        ?>
        <script>params_abonnee= 30;</script>
        <?php     
    }

?>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Original - Lifestyle Blog Template</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Trigger the modal with a button -->
    <button type="hidden" style="display:none;" data-toggle="modal" data-target="#myModal1"></button>

    <!-- Modal -->
    <div id="myModal10" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" class="bg-success">
                    <p>Message envoyé avec succès !</p>
                </div>
                <!-- div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </ div -->
            </div>
        </div>
    </div>

    <!-- Trigger the modal with a button -->
    <button type="hidden"  style="display:none;"  data-toggle="modal" data-target="#myModal2"></button>

    <!-- Modal -->
                
    <div id="myModal20" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Erreur dans l'envoie du message ! veuillez recommencer!</p>
                </div>

            </div>
        </div>
    </div>



    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Inscription à la newsletter</h5>
                        <form action="#" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="entrez votre e-mail">
                            <button type="submit" class="btn original-btn">S'abonner</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- ##### Header Area Start ##### -->
    <header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <a href="index.php"><img src="img/Logo2.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- Top Social Area -->
                    <div class="col-9 col-sm-4">
                        <div class="top-social-area">
                            <div class="language_flag"><img src="img/flag_2.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                            <div class="dropdown_text">français</div>
                            <div class="dropdown_arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></div>

                            <!-- Language Dropdown Menu -->
                            <ul>
                                <li>
                                    <a href="#">
                                        <div class="language_flag"><img src="img/flag_1.svg" alt="https://www.flaticon.com/authors/freepik"></div>
                                        <div class="dropdown_text">anglais</div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Nav Area -->
        <div class="original-nav-area" id="stickyNav">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Classy Menu -->
                    <nav class="classy-navbar justify-content-between">

                        <!-- Subscribe btn -->
                        <div class="subscribe-btn">
                            <a href="#" class="btn subscribe-btn" data-toggle="modal" data-target="#subsModal">S'abonner</a>
                        </div>

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu" id="originalNav">
                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.html">Accueil</a></li>
                                    <li><a href="genie-logiciel.html">génie logiciel</a></li>
                                    <li><a href="IA.html">intelligence artificielle</a> </li>
                                    <li><a href="data-science.html">data science</a></li>
                                    <li><a href="big-data.html">big data</a></li>
                                    <li><a href="secu-info.html">système et sécurité</a></li>
                                    <li><a href="contact.html" style="color: #ff9100;">Contact</a></li>
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Google Map ##### -->

    <!-- ##### Contact Area Start ##### -->
    <section class="">
        <div class="container-contact-area">
            <div class="row justify-content-center">
                <!-- Contact Form Area -->
                <div class="col-12 col-md-10 col-lg-9">
                    <div class="contact-form">
                        <h4 style="color: #fa1c2e;">Espace client</h4>
                        <!-- Contact Form -->
                        <form action="contact.php" method="post">
                            <div class="row" style="margin-bottom: 20px;">
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="text" name="nom" id="name" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Nom & Prénom(s)</label>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="group">
                                        <input type="email" name="mail" id="email" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <input type="text" name="entreprise" id="subject" required>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Entreprise</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="group">
                                        <textarea name="message" id="message" required></textarea>
                                        <span class="highlight"></span>
                                        <span class="bar"></span>
                                        <label>Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                     <button type="submit" value="envoyer" name="envoyer" class="btn original-btn">Envoyer</button>
                                    <input type="hidden" value="envoyer" name="envoyer" class="btn original-btn" hidden></input>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ##### Contact Area End ##### -->

    <!-- ##### Instagram Feed Area Start ##### -->
    <div class="instagram-feed-area ">
        <div class="container ">
            <div class="row ">
                <div class="col-12 ">
                    <div class="insta-title ">
                        <h5>Suivez-nous @ Facebook</h5>
                    </div>
                </div>
            </div>
        </div>
        <!-- Instagram Slides -->
        <div class="instagram-slides owl-carousel ">
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/1.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/2.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/3.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/4.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/5.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/6.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
            <!-- Single Insta Feed -->
            <div class="single-insta-feed ">
                <img src="img/instagram-img/7.png " alt=" ">
                <!-- Hover Effects -->
                <div class="hover-effects ">
                    <a href="# " class="d-flex align-items-center justify-content-center "><i class="fa fa-facebook "></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Instagram Feed Area End ##### -->

    <!-- ##### Footer Area Start ##### -->
    <footer class="footer-area  text-center">
        <div class="container ">
            <div class="row ">
                <div class="col-12 ">
                    <!-- Footer Social Area -->
                    <div class="footer-entreprise mt-30 ">
                        <a href="index.php"><img src="img/logo2.jpg" alt=""></a>
                        <i>Digital Universe, grande entreprise de digitalisation en Côte d'Ivoire</i>
                    </div>
                    <div class="footer-mention">
                        <a href="# ">Mentions légales</a>
                    </div>
                    <div class="footer-social-area mt-30 ">
                        <a href="# " data-toggle="tooltip " data-placement="top " title="Facebook "><i class="fa fa-facebook " aria-hidden="true "></i></a>
                        <a href="# " data-toggle="tooltip " data-placement="top " title="Linkedin "><i class="fa fa-linkedin " aria-hidden="true "></i></a>
                    </div>
                </div>
            </div>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>

        </div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>


    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="js/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
    <!-- Google Map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwuyLRa1uKNtbgx6xAJVmWy-zADgegA2s"></script>
    <script src="js/map-active.js"></script>

    <script src="js/index.js "></script>

</body>

</html>