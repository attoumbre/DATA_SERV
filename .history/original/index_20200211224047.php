<!DOCTYPE html>
<html lang="en">

<?php



    if(isset($_GET['sabonneok'])){
        if( $_GET['sabonneok']==1 ){
            ?>
                <script>params_abonnee= 1;</script>
            <?php 
        }
        elseif ($_GET['sabonneok']==2) {
            ?>
                <script>params_abonnee= 2;</script>
            <?php 
        }
    } 
    else { 
        ?>
        <script>params_abonnee= 0;</script>
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

    <!-- police COMIC-SANS-MS -->
    <link href="http://fr.allfont.net/allfont.css?fonts=comic-sans-ms" rel="stylesheet" type="text/css" />

</head>

<body onload="">
    <!-- Preloader -->
    <div id="preloader">
        <div class="preload-content">
            <div id="original-load"></div>
        </div>
    </div>

    <!-- Trigger the modal with a button -->
    <button type="hidden" style="display:none;" data-toggle="modal" data-target="#myModal1"></button>

    <!-- Modal -->
    <div id="myModal1" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body" class="bg-success">
                    <p>Félicitation votre abonnement à été éffectuer!.</p>
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
                
    <div id="myModal2" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-body">
                    <p>Vous êtes déja inscrit!.</p>
                </div>

            </div>
        </div>
    </div>


    <!-- slogan 
    <div class="col-12 col-sm-8" style="top: 7em;text-align: center !important;padding-left: 35%;padding-right: 30%;">
        <div class="breaking-news-area">
            <div id="breakingNewsTicker" class="slogan-area" style="height: 48px;width : 500px !important;font-size: 1em !important;font-weight: bold;">
                <ul>
                    <li style="top: 0px; left: 0px; position: absolute; display: block; opacity: 1; z-index: 99;" class="tickerHook"><a href="#"><strong class="premier" style="font-size: 20px !important;">l'ingénierie plus proche de vous</strong> </a></li>
                    <li class="" style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;"><a href="#"><strong class="deuxieme" style="font-size: 20px !important;">l'ingénierie plus proche de vous</strong></a></li>
                    <li class="" style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;"><a href="#"><strong class="premier" style="font-size: 20px !important;">l'ingénierie plus proche de vous</strong></a></li>
                    <li style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;" class=""><a href="#"><strong class="deuxieme" style="font-size: 20px !important;">l'ingénierie plus proche de vous</strong></a></li>
                    <li style="top: -3em; left: 0px; position: absolute; display: block; opacity: 0; z-index: 98;" class=""><a href="#"><strong class="premier" style="font-size: 20px !important;">l'ingénierie plus proche de vous</strong></a></li>
                </ul>
            </div>
        </div>
    </div> -->

    <!-- Subscribe Modal -->
    <div class="subscribe-newsletter-area">
        <div class="modal fade" id="subsModal" tabindex="-1" role="dialog" aria-labelledby="subsModal" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <div class="modal-body">
                        <h5 class="title">Inscription à la newsletter</h5>
                        <form action="contact.php" class="newsletterForm" method="post">
                            <input type="email" name="email" id="subscribesForm2" placeholder="entrez votre e-mail">
                            <button type="submit" value="homeBouton" name="homeBouton" class="btn original-btn">S'abonner</button>
                            <input type="hidden" value="homeBouton" name="homeBouton" class="btn original-btn" hidden></input>
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
                <div class="row">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-sm-8">
                        <div class="breaking-news-area">
                            <div id="breakingNewsTicker" class="ticker">
                                <a href="index.php"><img src="img /Logo3.png" alt=""></a>
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
                                    <li><a href="index.php" style="color: #ff9100;">Accueil</a></li>
                                    <li><a href="genie-logiciel.html">génie logiciel</a></li>
                                    <li><a href="IA.html">intelligence artificielle</a> </li>
                                    <li><a href="data-science.html">data science</a></li>
                                    <li><a href="big-data.html">big data</a></li>
                                    <li><a href="secu-info">système et sécurité</a></li>
                                    <li><a href="contactpage.php">Contact</a></li>
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

    <!-- ##### Hero Area Start ##### -->
    <div class="hero-area ">
        <!-- Hero Slides Area -->
        <div class="hero-slides owl-carousel ">
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img " style="background-image: url(img/im3.jpg); ">
                <div class="container h-100 ">
                    <div class="row h-100 align-items-center ">
                        <div class="col-12 ">
                            <div class="slide-content text-center ">
                                <div class="post-tag ">
                                    <a href="# " data-animation="fadeInUp "><i>Digital Universe</i></a>
                                </div>
                                <h2 data-animation="fadeInUp " data-delay="250ms "><a href="index.php">L'ingénierie plus proche de vous!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img " style="background-image: url(img/im10.jpg); ">
                <div class="container h-100 ">
                    <div class="row h-100 align-items-center ">
                        <div class="col-12 ">
                            <div class="slide-content text-center ">
                                <div class="post-tag ">
                                    <a href="# " data-animation="fadeInUp "><i>Digital Universe</i></a>
                                </div>
                                <h2 data-animation="fadeInUp " data-delay="250ms "><a href="index.php">L'ingénierie plus proche de vous!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single Slide -->
            <div class="single-hero-slide bg-img " style="background-image: url(img/im12.jpg); ">
                <div class="container h-100 ">
                    <div class="row h-100 align-items-center ">
                        <div class="col-12 ">
                            <div class="slide-content text-center ">
                                <div class="post-tag ">
                                    <a href="# " data-animation="fadeInUp "><i>Digital Universe</i></a>
                                </div>
                                <h2 data-animation="fadeInUp " data-delay="250ms "><a href="index.php">L'ingénierie plus proche de vous!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="single-hero-slide bg-img " style="background-image: url(img/im7.jpg); ">
                <div class="container h-100 ">
                    <div class="row h-100 align-items-center ">
                        <div class="col-12 ">
                            <div class="slide-content text-center ">
                                <div class="post-tag ">
                                    <a href="# " data-animation="fadeInUp "><i>Digital Universe</i></a>
                                </div>
                                <h2 data-animation="fadeInUp " data-delay="250ms "><a href="index.php">L'ingénierie plus proche de vous!</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!-- ##### Hero Area End ##### -->

    <!-- ##### Blog Wrapper Start ##### -->
    <!-- section start -->
    <section>
        <aside class="partenaire ">
            <div class="col-12 col-md-6 ">
                <div class="single-blog-thumbnail ">
                    <h5>Partenaires</h5>
                    <div><img src="img/orange.png " alt=" "></div>

                    <div><img src="img/ufhb.png " alt=" "></div>
                    <div><img src="img/nsia.gif " alt=" "></div>
                    <div><img src="img/nphb.png " alt=" "></div>
                    <div><img src="img/esatic.jpg " alt=" "></div>
                    <div><img src="img/ensea.png " alt=" "></div>
                    <!-- <p>Ils nous font confiance</p> -->
                </div>
        </aside>
        <article>
            <!-- article start -->
            <div class="col-10 col-md-12 ">
                <!-- Blog Content -->
                <div class="single-blog-content ">
                    <!-- <div class="line "></div> -->
                    <!-- <a href="# " class="post-tag ">DIGITAL UNIVERSE</a> -->
                    <h5>DIGITAL UNIVERSE: Au coeur de l'innovation</h5>
                    <p>Relativement à l’optimisation de ses activités, X dispose de plusieurs technologies de développement de logiciel dont des AGL (Atelier de Génie Logiciel) qui permettent un gain de temps et donc de coût sensible pour nos client et aussi
                        d’éditer et de commercialiser plusieurs logiciels dans le domaine de la gestion d'entreprise, l'administration des ventes, la logistique, la comptabilité, le e-commerce, et d'une façon générale, tous les postes de gestion d'une
                        activité de production ou de négoce. De plus, elle propose aussi des solutions dans la sécurisation des systèmes informatique, dans l’étude préventive des données de production et bénéfice ainsi que dans l’implémentions des systèmes
                        embarqués, apportant ainsi un apport prestigieux aux entreprise désireuse d’atomiser plusieurs taches au sein de leurs unités de production.
                    </p>
                    <p>
                        A cet effet, grâce à plusieurs années d'expériences dans ces différents métiers, nos chargés de projets possèdent le recul et les méthodes de travail essentielles pour répondre aux attentes de votre organisation. X vous accompagne ainsi pas à pas dans
                        l’élaboration de vos besoins jusqu’à leurs réalisations. X c'est aussi un service support (hotline, assistance, maintenance) dédié à nos clients, disposant de 2 niveaux de traitements, et assurant une prise en charge rapide et
                        tracée grâce à une organisation interne spécifique et informatisée en conséquence.
                    </p>

                </div>
            </div>
        </article>
        <!-- artile end -->
        <!-- </div>
                                </div>
                            </div> -->
        <!-- ##### Sidebar Area ##### -->

        <aside class="experience ">

            <h5 class="title ">Expériences</h5>
            <a href="# "><img src="img/bg-img/add.gif " alt=" "></a>
            <!-- </div>
                                    </div>
                                </div> -->
        </aside>
        <!-- aside end -->
        <!-- ##### Blog Wrapper End ##### -->
    </section>
    <!-- section end -->

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
                        <a href="index.php"><img src="img/Logo3.png" alt=""></a>
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
            DigitalUniverse &copy;
            <script>
                document.write(new Date().getFullYear());
            </script>

        </div>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->

    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="js/jquery/jquery-2.2.4.min.js "></script>
    <!-- Popper js -->
    <script src="js/popper.min.js "></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js "></script>
    <!-- Plugins js -->
    <script src="js/plugins.js "></script>
    <!-- Active js -->
    <script src="js/active.js "></script> 
    
    <script src="js/index.js "></script>


</body>

</html>