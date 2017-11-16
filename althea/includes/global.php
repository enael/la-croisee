<?php

//require ("functons.php");

/* identifiants de la base de données */

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

?>