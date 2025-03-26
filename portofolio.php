<?php
require 'class/Autoloader.php';
Autoloader::register();
$db = new Database('kaleoweb');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>KaleoWeb | Mes réalisations</title>
    <meta name="description" content="Nos réalisations, nos clients"/>
    <meta name="Author" content="KALEOWEB [www.kaleoweb.net]"/>
    <meta name="robots" content="index,follow"/>
    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0"/>
    <!--[if IE]>
    <meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta property="og:url" content="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>"/>
    <meta property="og:type" content="article"/>
    <meta property="og:title" content="KaleoWeb, nos clients"/>
    <meta property="og:description"
          content="Confiez nous la conception ou la maintenance de votre site web ou application mobile et libérez du temps pour vos clients!"/>
    <meta property="og:image" content="https://www.kaleoweb.net/400dpiLogo.png"/>
    <!-- WEB FONTS : use %7C instead of | (pipe) -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700"
          rel="stylesheet" type="text/css"/>

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link rel="canonical" href="https://<?= $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'] ?>"/>
    <!-- FAVICON -->
    <link rel="icon" type="image/png" href="mini_logo_kaleoweb.png"/>

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css"/>
    <!--<link href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />-->

    <!-- PAGE LEVEL SCRIPTS -->
    <link href="assets/css/header-2.css" rel="stylesheet" type="text/css"/>
    <link href="assets/css/color_scheme/darkblue.css" rel="stylesheet" type="text/css" id="color_scheme"/>
    <?php include_once 'matomo.html' ?>
</head>
<body class="smoothscroll enable-animation">
<!-- wrapper -->
<div id="wrapper">
    <?php include 'header.php' ?>

    <section class="parallax parallax-2 section-xlg"
             style="background-image: url('demo_files/images/monitor-1307227_1280.jpg');background-position: bottom;">
        <div class="overlay dark-4"><!-- dark overlay [1 to 9 opacity] --></div>
        <div class="container">
            <div class="heading-dotted">
                <h3><i class="fa fa-code text-info"></i> Mes <span>réalisations</span></h3>
            </div>
        </div>
    </section>
    <section class="bg-silver">
        <div class="container">
            <!-- page tabs -->
            <ul class="page-header-tabs list-inline mix-filter">
                <li data-filter="all" class="filter active btn btn-3d btn-bitbucket"><a href="#" class="text-white uppercase font-weight-bold"><i class="fa fa-info-circle"></i> Tous les sites</a></li>
                <li data-filter="development" class="filter btn btn-3d btn-info"><a href="#" class="text-white uppercase font-weight-bold"><i class="fa fa-code"></i> Développement</a></li>
                <li data-filter="wordpress" class="filter btn btn-3d btn-success"><a href="#" class="text-white uppercase font-weight-bold"><i class="fa fa-wordpress"></i> WordPress</a></li>
                <li data-filter="oc" class="filter btn btn-3d btn-dirtygreen"><a href="#" class="text-white uppercase font-weight-bold"><i class="fa fa-code"></i> OpenClassRoom</a></li>
            </ul><!-- /page tabs -->
            <!-- Portfolio Items -->
            <div id="portfolio" class="portfolio">
                <div class="row mix-grid">
                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://bierelaromaine.com">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/bierelaromaine.png" style="width:600px; max-height:400px" alt="Micro brasserie située à Riez dans las Alpes de Haute Provence ">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Bières artisanales La Romaine</h3>
                                <span class="fs-10 text-info">Micro brasserie située à Riez dans las Alpes de Haute Provence</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://tousenselle.net">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/tousenselle.png" style="width:600px; max-height:400px" alt="Centre équestre à rians dans le Var">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Centre équestre tous En Selle</h3>
                                <span class="fs-10 text-info">Centre équestre à rians dans le Var</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://www.mirabeau-moto.com/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/mirabeau-moto.png" style="width:600px; max-height:400px" alt="Site e-commerce de vente de pièces détachées et d'accessoires moto">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Mirabeau Moto</h3>
                                <span class="fs-10 text-info">Site e-commerce de vente de pièces détachées et d'accessoires moto</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix development"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="//www.provencanes83.com" target="_blank">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/provencanes2.png" style="width:600px; max-height:400px" alt="Provenc'anes Balades avec des ânes dans le Var"></figure>
                            <div class="item-box-desc">
                                <h3>Provenc'anes</h3>
                                <span class="fs-10 text-info">La Provence au pas de l'âne</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-code"></i><a href="#">Développement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->

                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://www.rians-en-provence-tourisme.fr/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>

                                <img class="img-fluid" src="assets/images/customers/rians3.png" style="width:600px; max-height:400px"
                                     alt="Rians En Provence TourismeSite dédié au tourisme réceptif dans le Var">
                            </figure>

                            <div class="item-box-desc">
                                <h3>Rians En Provence Tourisme</h3>
                                <span class="fs-10 text-info">Site dédié au tourisme réceptif dans le Var</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix development"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded"
                                               href="https://www.au-cinema-pour-les-droits-humains.fr/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid"
                                     src="assets/images/customers/au-cinema-pour-les-droits-humains.png"  style="width:600px; max-height:400px" alt="Festival Amnesty International Au Cinéma pour Les Droits Humains">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Festival de Cinéma</h3>
                                <span class="fs-10 text-info">Amnesty International</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-code"></i> <a href="#">Développement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix oc"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded"
                                               href="https://stefthefreeman.github.io/OC_projet5/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid"
                                     src="assets/images/KASA.png"  style="width:600px; max-height:400px" alt="projet OpenClassRoom React">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Projet OpenClassRoom Kasa (React)</h3>
                                <span class="fs-10 text-info">OpenClassRoom</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-code"></i> <a href="#">Développement</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix oc"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded"
                                               href="https://github.com/Stefthefreeman/OC_projet6/tree/main/backend">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid"
                                     src="assets/images/mon_vieux_grimoire.png"  style="width:600px; max-height:400px" alt="projet OpenClassRoom Backend">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Projet OpenClassRoom Mon vieux grimoire (React / nodejs / ExpressJs)</h3>
                                <span class="fs-10 text-info">OpenClassRoom</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-code"></i> <a href="#">OpenClassRoom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://www.jacqueline-dumoulin.fr/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/transat-asso.png" style="width:600px; max-height:400px" alt="Association Transat Marseille Site d'entraide pour personnes Transgenres">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Association Transat Marseille</h3>
                                <span class="fs-10 text-info">Site d'entraide pour personnes Transgenres</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix wordpress"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded" href="https://www.jacqueline-dumoulin.fr/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid" src="assets/images/customers/jadu.png" style="width:600px; max-height:400px" alt="Site Jacqueline Dumoulin">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Jacqueline Dumoulin</h3>
                                <span class="fs-10 text-info">Docteur d'Etat en droit - Licenciée ès-lettres</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-wordpress"></i><a href="#">Wordpress</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                    <div class="col-md-4 col-sm-4 mix oc"><!-- item -->
                        <div class="item-box">
                            <figure>
									<span class="item-hover">
										<span class="overlay dark-5"></span>
										<span class="inner">
											<!-- details -->
											<a class="ico-rounded"
                                               href="https://stefthefreeman.github.io/OC_projet4/">
												<span class="glyphicon glyphicon-option-horizontal fs-20"></span>
											</a>
										</span>
									</span>
                                <img class="img-fluid"
                                     src="assets/images/Nina%20Carducci.png"  style="width:600px;" alt="projet OpenClassRoom SEO">
                            </figure>
                            <div class="item-box-desc">
                                <h3>Projet OpenClassRoom Nina Carducci (Optimisation SEO)</h3>
                                <span class="fs-10 text-info">OpenClassRoom</span>
                                <ul class="list-inline categories m-0">
                                    <li><i class="fa fa-code"></i> <a href="#">OpenClassRoom</a></li>
                                </ul>
                            </div>
                        </div>
                    </div><!-- /item -->
                </div>
            </div>
            <!-- /Portfolio Items -->
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
</body>
</html>