<?php
global $movies, $nb;
//require 'functions.php';
include 'class/Movies.php';
$movies = new Movies();
//var_dump($movies->wpproducts());
$services = $movies->services();
//$nb = count($price);
//$total = count($services);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Tarifs <?= date('Y') ?> | SAS KaleoWeb</title>
    <meta name="description" content="Tarifs des prestations <?= date('Y') ?> KaleoWeb"/>
    <meta name="Author" content="KaleoWeb [www.kaleoweb.net]"/>
    <meta name="robots" content="index,follow"/>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="KaleoWeb, nos tarifs <?= date('Y') ?>"/>
    <meta property="og:description"
          content="Confiez nous la conception ou la maintenance de votre site web ou application mobile et libérez du temps pour vos clients!"/>
    <meta property="og:image" content="https://www.kaleoweb.net/400dpiLogo.png"/>
    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
          rel="stylesheet" type="text/css"/>
    <link rel="canonical" href="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>"/>
    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css"/>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="mini_logo_kaleoweb.png"/>


    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/color_scheme/yellow.css" rel="stylesheet" type="text/css" id="color_scheme"/>

</head>


<body class="smoothscroll enable-animation grain-grey">
<!--
    MODAL ON LOAD

    data-autoload="true" 			- load modal on page load
    data-autoload-delay="2000"		- load after 2000 ms (1000ms = 1s)

    Please note, an unique ID is required.
    localstorage use the ID to hide the modal, if used checked "Don't show this popup again"
-->
<div id="REQUIRED-ID" class="modal fade" data-autoload="true" data-autoload-delay="2000">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">


            <!-- body modal -->
            <div class="modal-body bg-dark clearfix">
                <p class="text-center">
                    <img src="assets/images/d11208.png" alt="Promotion"/>

                </p>
                <p class="text-white text-center fs-30 bg-danger">
                    -15% SUR TOUS NOS PRODUITS JUSQU'A CE SOIR 18h!
                </p>


            </div>

        </div>
    </div>
</div>
<!-- /ODAL ON LOAD -->
<!-- wrapper -->
<div id="wrapper">


    <?php include 'header.php' ?>


    <section class="parallax parallax-2 section-md"
             style="background-image: url('demo_files/images/thematics/hosting/slider_1-min.jpg');">
        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
        <div class="container">
            <div class="heading-dotted">
                <h3><i class="fa fa-euro text-gray"></i> Tarifs <span><?= date('Y') ?></span></h3>
            </div>

        </div>
    </section>
    <!-- /PAGE HEADER -->


    <!-- -->
    <section class="wow fadeInUpBig alternate" style="display:flex;flex-direction: row;justify-content: center">
        <div class="container">
            <div class="heading-title heading-dotted">
                <h3><i class="fa fa-code"></i> DÉVELOPPEMENT <span>WEB</span></h3>
            </div>

            <div class="row mega-price-table mb-50">
                <div class="col-md-3 col-sm-6 block">
                    <div class="pricing">

                        <div class="pricing-head bg-dark">
                            <h3>Site vitrine</h3>
                            <small>à partir de</small>
                        </div>

                        <h4><!-- price -->
                            650<sup>€ <small>HT</small></sup>
                        </h4><!-- /price -->

                        <!-- option list -->
                        <ul class="pricing-table list-unstyled text-left">
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Charte graphique </span>
                            </li>
                            <li class="alternate">
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Création 5 pages</span>
                            </li>

                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nom de domaine</span>
                            </li>

                        </ul>
                        <!-- /option list -->

                        <!-- button -->
                        <a href="demande-informations-1.html" class="btn btn-info fullwidth">NOUS CONTACTER</a>

                    </div>
                </div>

                <div class="col-md-3 col-sm-6 block">
                    <div class="pricing">

                        <div class="pricing-head bg-dark">
                            <h3>Site PRO</h3>
                            <small>à partir de</small>
                        </div>

                        <h4><!-- price -->
                            1 500<sup>€ <small>HT</small></sup>
                        </h4><!-- /price -->

                        <!-- option list -->
                        <ul class="pricing-table list-unstyled text-left">
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Charte graphique </span>
                            </li>
                            <li class="alternate">
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nombre pages illimité</span>
                            </li>

                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nom de domaine</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                10 <span class="hidden-md hidden-lg">Comptes mails</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Hébergement</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Réferencement naturel</span>
                            </li>
                        </ul>
                        <!-- /option list -->

                        <!-- button -->
                        <a href="demande-informations-2.html" class="btn btn-info fullwidth">NOUS CONTACTER</a>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block">
                    <div class="pricing">

                        <div class="pricing-head bg-dark">
                            <h3>Site E-COMMERCE</h3>
                            <small>à partir de</small>
                        </div>

                        <h4><!-- price -->
                            2350<sup>€ <small>HT</small></sup>
                        </h4><!-- /price -->

                        <!-- option list -->
                        <ul class="pricing-table list-unstyled">
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Charte graphique </span>
                            </li>
                            <li class="alternate">
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nombre pages illimité</span>
                            </li>

                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nom de domaine</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Comptes mails illimités</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Hébergement</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Réferencement naturel</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Solutions paiements (Paypal,CB,...)</span>
                            </li>
                        </ul>
                        <!-- /option list -->

                        <!-- button -->
                        <a href="demande-informations-3.html" class="btn btn-info fullwidth">NOUS CONTACTER</a>

                    </div>
                </div>
                <div class="col-md-3 col-sm-6 block">
                    <div class="pricing">

                        <div class="pricing-head bg-dark">
                            <h3>PORTAIL INTERNET</h3>

                        </div>

                        <h4><!-- price -->
                            Sur devis
                        </h4><!-- /price -->

                        <!-- option list -->
                        <ul class="pricing-table list-unstyled">
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Charte graphique </span>
                            </li>
                            <li class="alternate">
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nombre pages illimité</span>
                            </li>

                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Nom de domaine</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Comptes mails illimités</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Hébergement</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Réferencement naturel</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Espace clients / abonnés</span>
                            </li>
                            <li>
                                <i class="fa fa-check text-success "></i>
                                <span class="hidden-md hidden-lg">Forum</span>
                            </li>
                        </ul>
                        <!-- /option list -->

                        <!-- button -->
                        <a href="demande-informations-4.html" class="btn btn-info fullwidth">NOUS CONTACTER</a>

                    </div>
                </div>


            </div>
    </section>
    <section class="alternate dark"  style="display:none">
        <div class="container">
            <div class="heading-title heading-dotted text-right">
                <h3><img class="img-fluid pb-5" src="demo_files/images/wordpress.png" width="30"/>
                    WORD<span>PRESS</span></h3>
            </div>


            <div class="row">

                <?php
                for ($i = 0; $i < $nb; $i++):;
                    ?>
                    <div class="col-md-4 col-sm-4">
                        <div class="price-clean price-clean-popular mb-50"
                             style="border:1px solid #DEDEDE;border-radius:10px">
                            <?= $price[$i]['ribbon'] ?>
                            <h5 class="text-teal fw-800 mb-30"> <?= $price[$i]['nom'] ?> </h5>
                            <h4 class="bg-black p-10">
                                <?= $price[$i]['price'] ?> <sup>€ <small
                                            class="text-silver fs-10"><?= $price[$i]['tva'] ?></small></sup>
                                <em><?= $price[$i]['duree'] ?>   </em>
                            </h4>
                            <hr/>
                            <p class="text-yellow font-raleway fs-12"><em><?= $price[$i]['desc'] ?></em></p>
                            <hr/>
                            <a href="contact.html" class="btn btn-lg btn-default btn-bordered btn-shadow-1">En savoir
                                +</a>
                        </div>

                    </div>

                <?php
                endfor;
                ?>


            </div>
        </div>
    </section>
    <section class="alternate" style="display:none">
        <div class="container">
            <div class="heading-title heading-dotted">
                <h3><i class="fa fa-server"></i> SERV<span>ICES</span></h3>
            </div>
            <div class="row mega-price-table">
                <?php
                for ($j = 0; $j < $total; $j++):; ?>

                    <div class="col-md-4 col-sm-6 block mb-30 shadow">
                        <div class="pricing rounded">

                            <div class="pricing-head bg-dark">
                                <h3 class="fs-20 font-lato"><?= $services[$j]['nom'] ?></h3>

                            </div>
                            <p class="text-dark font-italic fs-12 p-10 text-center font-raleway pt-20"><?= $services[$j]['desc'] ?></p>

                            <h4><!-- price -->
                                <?= $services[$j]['price'] ?><small>€ <?= $services[$j]['periodicite'] ?></small>
                            </h4><!-- /price -->

                            <!-- button -->
                            <a href="contact.html" class="btn btn-primary fullwidth">En savoir +</a>

                        </div>
                    </div>
                <?php endfor; ?>
            </div>

        </div>
    </section>
    <!-- FOOTER -->
    <?php include 'footer.php' ?>
    <!-- /FOOTER -->

</div>
<!-- /wrapper -->


<!-- SCROLL TO TOP -->
<a href="#" id="toTop"></a>


<!-- PRELOADER -->
<div id="preloader">
    <div class="inner">
        <span class="loader"></span>
    </div>
</div><!-- /PRELOADER -->


<!-- JAVASCRIPT FILES -->
<script>var plugin_path = 'assets/plugins/';</script>
<script src="assets/plugins/jquery/jquery-3.3.1.min.js"></script>

<script src="assets/js/scripts.js"></script>


</body>
</html>