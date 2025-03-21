<?php
require 'class/Autoloader.php';
Autoloader::register();
$base = new Base();
$db =new Database('dolibarr');
$seo = new Seourl();
$encoding = new Providers();
$datetexte = new Datetexte();
$keepratio = new Keepratio();
$orderprog = new OrderProg();
$search = new Search();
$movies = new Movies();
$datamovies = new Datamovies;
error_reporting(E_ALL);
ini_set("display_errors",0);
//error_reporting(0);