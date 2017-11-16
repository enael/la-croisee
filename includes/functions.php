<?php

DEFINE ("TEXT_UPPERCASE", 1);
DEFINE ("TEXT_UCFIRST", 2);

function set_language($lng) {
	setcookie("language", $lng);
}

function get_language() {
	if (isset($_COOKIE["language"]))
		return $_COOKIE["language"];
	else {
		$lng = get_browser_language();
		set_language($lng);
		return $lng;
	}
}

function get_browser_language() {
	$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	switch ($lang){
		case "fr":
			return "fr";
			break;   
		default:
			return "en";
			break;
	}
}

function page_url($page, $language) {
	global $_PAGES, $host, $site_path;
	
	return $host.$site_path . $_PAGES[$page][$language];
}

// $case : premiere lettre en majuscule
function G_TEXT($label, $mode=0) {
	global $_TEXT, $language;
	
	$text = $_TEXT[$label][$language];
	
	if ($mode & TEXT_UPPERCASE)
		$text = strtoupper($text);
	else if ($mode & TEXT_UCFIRST)
		$text = ucfirst($text);
	
	return $text;
}

function L_TEXT($label, $mode=0) {
	global $L_TEXT, $language;
	
	$text = $L_TEXT[$label][$language];
	
	if ($mode & TEXT_UPPERCASE)
		$text = strtoupper($text);
	else if ($mode & TEXT_UCFIRST)
		$text = ucfirst($text);
	
	return $text;
}

// philippe mettre le nom du site
function send_mail($name, $from_email, $subject, $message) {
	global $email;
	
	$body = "Nom : ". $name . "\nEmail : " . $from_email .  "\nSujet : " . $subject . "\n\n" . $message;
	
	return mail ($email, "Message du site La Croisée", $body);
}

/* les slideshows */

function slideshow($file) {
	require($file);
	
	$gallery = $slideshow["name"];
	$dir = $slideshow["retpertoire"];
	$images = $slideshow["images"];
	
	$content = "";
	///$content = "hello philippe ".($slideshow["retpertoire"]);
	
	foreach ($images as $img){
		$small = null;
		$n =  $dir . '/' . $img[0] .'.jpg';
		$s = $dir . '/' . $img[0] .'-small.jpg';
		
		if (file_exists ($s))
			$small = $s;
		else 
			$small = $n;
		
		list($width, $height, $type, $attr) = getimagesize($n);
			
		$content .= '<img src="'.$small .'" class="slideshow" alt="'.$img[1].'" gallery="'.$gallery.'" w="'.$width.'" h="'.$height.'">'."\n";
		//$content .= '<img src="'.$n.'">';
	}
	
	return $content;
}

?>
