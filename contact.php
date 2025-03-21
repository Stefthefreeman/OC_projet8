<?php
$demande = $_GET['request'];

switch ($demande) {
    case '1':
        $msg = 'pour un site Web vitrine';
        break;

    case '2':
        $msg = 'pour un site Web PRO';
        break;
    case '3':
        $msg = 'pour un Site Web E-COMMERCE';
        break;
    case '4':
        $msg = 'pour un PORTAIL INTERNET';
        break;

    default:
        $msg = 'Juste comme ça!';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Kaleoweb | Formulaire de contact</title>
    <meta name="description" content="Kaleoweb | Formulaire de contact"/>
    <meta name="Author" content="Kaleoweb [www.kaleoweb.net]"/>
    <meta name="robots" content="index,follow"/>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
          rel="stylesheet" type="text/css"/>

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css"/>

    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="mini_logo_kaleoweb.png"/>

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-1.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/color_scheme/lightgrey.css" rel="stylesheet" type="text/css" id="color_scheme"/>
    <script src='//www.google.com/recaptcha/api.js'></script>
    <?php /*include_once 'matomo.html'*/ ?>

</head>

<body class="smoothscroll enable-animation">
<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v5.0"></script>


<!-- wrapper -->
<div id="wrapper">

    <?php include 'header.php' ?>

    <section class="parallax parallax-2 section-md"
             style="background-image: url('demo_files/images/monitor-1307227_1280.jpg');background-position: bottom;">
        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
        <div class="container">
            <div class="heading-dotted">
                <h3><i class="fa fa-envelope-o"></i> Une <span>demande</span> ? <span
                            class="fs-18 text-white"><?= $msg ?></span></h3>
            </div>

        </div>
    </section>


    <!-- -->
    <section class="bg-secondary">
        <div class="container">
            <div class="heading-title heading-line-double">
                <h4 class="bg-silver text-body p-6">Écrivez-nous ou dites simplement <span>bonjour!</span></h4>
            </div>
            <div class="row">

                <!-- FORM -->
                <div class="col-md-8">


                    <!-- Alert Success -->
                    <div id="alert_success" class="alert alert-success mb-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Merci!</strong> <em>Votre message a été envoyé avec succès!</em>
                    </div><!-- /Alert Success -->


                    <!-- Alert Failed -->
                    <div id="alert_failed" class="alert alert-danger mb-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>[SMTP] Erreur!</strong> Internal server error!
                    </div><!-- /Alert Failed -->


                    <!-- Alert Mandatory -->
                    <div id="alert_mandatory" class="alert alert-danger mb-30">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <strong>Désolé!</strong> vous devez remplir les champs marqués (*)!
                    </div><!-- /Alert Mandatory -->


                    <form action="php/contact.php" method="post" enctype="multipart/form-data">
                        <fieldset>
                            <input type="hidden" name="action" value="contact_send"/>

                            <div class="row">
                                <div class="col-md-4">
                                    <label for="contact:name" class="text-white">Nom complet *</label>
                                    <input required type="text" value="" class="form-control"
                                           name="contact[name][required]" id="contact:name">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact:email" class="text-white">E-mail *</label>
                                    <input required type="email" value="" class="form-control"
                                           name="contact[email][required]" id="contact:email">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact:phone" class="text-white">Téléphone *</label>
                                    <input type="text" value="" class="form-control" name="contact[phone]"
                                           id="contact:phone">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-8">
                                    <label for="contact:subject" class="text-white">Sujet *</label>
                                    <input required type="text" value="" class="form-control"
                                           name="contact[subject][required]" id="contact:subject">
                                </div>
                                <div class="col-md-4">
                                    <label for="contact_department" class="text-white">Service *</label>
                                    <select class="form-control pointer" name="contact[department]">
                                        <option value="">--- Selectionnez ---</option>
                                        <option value="Marketing">Marketing</option>
                                        <option value="Webdesign">Webdesign</option>
                                        <option value="dev">Développement</option>
                                        <option value="app">Application smartphone</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <label for="contact:message" class="text-white">Message *</label>
                                    <textarea required="required" maxlength="10000" rows="8" class="form-control"
                                              name="contact[message]" id="contact:message"></textarea>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="g-recaptcha" data-sitekey="6Ldl86IUAAAAAAoju-EcJrbLFwBNw2fgznRwh2mJ"></div>
                            </div>
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-check"></i> ENVOYER LE
                                    MESSAGE
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /FORM -->
                <div class="col-md-4 text-center">
                    <img class="footer-logo" src="logo_inveserd-small-bg-transparent.png" width="200" alt=""/>
                    <!-- Short Description -->
                    <p class="font-italic font-open-sans"><small class="text-white">Société par actions simplifiée<br/>
                            au capital de 500€<br/>
                            R.C.S Avignon 907 700 504
                        </small>
                    </p>
                    <hr/>
                    <!-- Contact Address -->
                    <address>
                        <ul class="list-unstyled">
                            <li class="footer-sprite address text-white">
                                81 chemin du grand logis<br>
                                84120 MIRABEAU<br>
                                <i class="fa fa-bars text-yellow"> </i> France &nbsp; <i
                                        class="fa fa-bars text-yellow"> </i>

                            </li>
                            <li class="footer-sprite phone">
                                <i class="fa fa-phone-square text-white"></i><a class="text-silver"
                                                                                href="tel:0486782914">+33 486 782
                                    914</a>
                            </li>
                            <li class="footer-sprite email">
                                <a class="text-silver" href="mailto:fanny@kaleoweb.net">contact@kaleoweb.net</a>
                            </li>
                        </ul>
                    </address>


                </div>

            </div>

        </div>
    </section>
    <!-- / -->


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


<!-- PAGELEVEL SCRIPTS -->
<script src="assets/js/contact.js"></script>

<!--
    GMAP.JS
    http://hpneo.github.io/gmaps/
-->

</body>
</html>