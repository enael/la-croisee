<?php

require ("configuration.php");
require ("functions.php");

$host = $_SERVER['SERVER_ADDR'];

if ($_SERVER['SERVER_ADDR'] == "127.0.0.1") {
	$host = "http://127.0.0.1";
	$site_path = "/lacroisee/";
}
else {
	$host = "https://la-croisee-chambres-dhotes.fr";
	$site_path = "/";
}

$language = null;
if (isset($_GET['lang'])) {
	$language = $_GET['lang'];

	if ($language == 'fr' || $language == 'en')
		set_language($language);
	else
		$language = null;
}
else if ($_SERVER['REQUEST_URI'] == $site_path) {
	
	// la page d'acceuil en francais.
	set_language("fr");
	$language = "fr";
}

if ($language == null)
	$language = get_language();

require("languages/general.php");
require("languages/".$page.".php");

/* identifiants de la base de données */
/*
if ($_SERVER['REMOTE_ADDR'] == "127.0.0.1") {
	$DB_HOSTNAME = "localhost";
	$DB_NAME = "lacrois1";
	$DB_LOGIN = "root";
	$DB_PASSWORD = "";
}
else {
	$DB_HOSTNAME = "db";
	$DB_NAME = "lacrois1";
	$DB_LOGIN = "lacrois1";
	$DB_PASSWORD = "M0dqQ40em2";
}

$db = new PDO('mysql:host='.$DB_HOSTNAME.';dbname='.$DB_NAME, $DB_LOGIN, $DB_PASSWORD);
*/



?>