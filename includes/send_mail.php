<?php

require("./configuration.php");
require("./functions.php");

$language = get_language();
$messages = [
		"EMPTY FIELD" => [
			"fr" => "Certains champs sont vides. Veuillez verifier vos informations.",
			"en" => "One or more fields have an error. Please check and try again."
		],
		"SUCCES" => [
			"fr" => "Je repondrais rapidement a votre message.",
			"en" => "I will reply your message as soon as possible."
		],
		"SEND ERROR" => [
			"fr" => "L'envoie de votre message a échoué.",
			"en" => "An error occurred while sending your message."
		]
];

$referrer = $_SERVER['HTTP_REFERER'];
$host = parse_url($referrer, PHP_URL_HOST);

$_name = isset($_POST['name'])?$_POST['name']:null;
$_subject = isset($_POST['subject'])?$_POST['subject']:null;
$_email = isset($_POST['email'])?$_POST['email']:null;
$_message = isset($_POST['message'])?$_POST['message']:null;


if (!$_name || !$_email || !$_message)
	$return = [
		"status"	=> "failed",
		"message"	=> $messages["EMPTY FIELD"][$language]
	];
else {
	$status = send_mail($_name, $_email, $_subject, $_message);
	
	if ($status)
		$return = [
			"status"	=> "success",
			"message"	=> $messages["SUCCES"][$language]
		];
	else
		$return = [
			"status"	=> "failed",
			"message"	=> $messages["SEND ERROR"][$language]
		];
}

echo json_encode($return);

?>