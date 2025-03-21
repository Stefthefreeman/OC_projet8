<?php

// USE SMTP OR mail()
// SMTP is recommended, mail() is disabled on most shared hosting servers.
// IF false : SMTP host/port/user/pass/ssl not used, leave empty or as it is!
$config['use_smtp'] = false;                        // true|false


/**
 * SMTP Server Settings
 *
 * PLEASE NOTE
 * External SMTP (like gmail) is disabled/firewalled by most hosting providers.
 * Please, create an intenal email addres like: noreply@yourdomain.com
 * You can find SMTP settings in your cPanel (host/port)
 **/
$config['smtp_host'] = 'smtp.hostinger.com';                    // eg.: smtp.gmail.com
$config['smtp_port'] = 465;                        // eg.: 587
$config['smtp_user'] = 'fanny@kaleoweb.net';                        // you@gmail.com
$config['smtp_pass'] = 'ThePrettyFanny*';                        // password
$config['smtp_ssl'] = true;

// Who receive all emails?
$config['send_to'] = 'stephane.chotard@kaleoweb.net';    // destination of all emails sent throught contact form


// Email Subject
$config['subject'] = '[KALEOWEB] DEMANDE DE CONTACT';    // subject of emails you receive

$config['smtp_tls'] = true;


/** ******************************************************* MISC ******************************************************* **/
const UPLOAD_FOLDER = '_upload/';                                        // upload folder path - slash at the end!
const UPLOAD_FOLDER_URL = 'http://localhost/PRJ/Smarty/HTML/php/_upload/';    // Full url path to upload folder (used for contact files) - slash at the end!
const UPLOAD_MAX_SIZE = 10000000;                                            // 1000000 = 10Mb


/** ****************************************************** CACHE ******************************************************* **/
const CACHE_ENABLED = true;            // cache (example usage: twitter widget)
const CACHE_LIFETIME = 3600;            // in seconds


/** ************************************************** TWITTER WIDGET ************************************************** **/
/**
 * First, you need a consumer key and secret keys.
 * Get one from dev.twitter.com/apps
 *
 * Please note, the keys already used here - are for demo purpose only!
 * Please use your own twitter keys!
 **/


// Consumer Key
const CONSUMER_KEY = '4OEtaqfomSIhGxzsdOIO7Z5sH';
const CONSUMER_SECRET = 'avL0m45pva3U5zGD5hJwaiBSFRBkqGRjT2PiXX3yRfJwDtZB3Y';

// User Access Token
const ACCESS_TOKEN = '477243933-21loPkRFjsUU49shFEFQKD0KTIqfCKk1L4gOh1rP';
const ACCESS_SECRET = 'Wl7WIK4MuAkuzLiI5hmBTKqVGPQIAnHy7BUhrVU6sh6rf';
/** ******************************************************************************************************************** **/
?>