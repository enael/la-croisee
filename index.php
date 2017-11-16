<?php

session_start ();

$page = "home";

require ('./includes/global.php');

require_once './includes/mobile-detect.php';
$detect = new Mobile_Detect;
$deviceType = ($detect->isMobile() ? ($detect->isTablet() ? 'tablet' : 'phone') : 'computer');

?>

<!DOCTYPE html>
<head>

	<?php require('tagmanager-head.php'); ?>
		
	<meta charset="utf-8">
	
	<title>Chambres d'hôtes La Croisée à Saint-Girons dans l'Ariège</title>
	<meta name="description" content="Deux Chambres d'hôtes dans une maison de style castillonaise a proximité de Saint-Girons au coeur du parc naturel régional des Pyrénées.">
	<meta http-equiv="Content-Language" content="fr">
	<meta name="viewport" content="width=device-width" />
	
	<link rel="icon" type="image/png" href="images/favicon.png" />

	<link rel="stylesheet" href="photoswipe/photoswipe.css"> 
	<link rel="stylesheet" href="photoswipe/default-skin/default-skin.css"> 
	
	<style type="text/css"><?php require('css/css-min.css'); ?></style>	
	
</head>

<body>

	<?php require('tagmanager-head.php'); ?>

	<?php require('menu.php'); ?>
	
	<div class="wrapper" style="min-height:70px;">
	</div>
	
	<div class="wrapper-100">
		<div class="top-echancre"></div>
			<video id="video" width="100%" default-autoplay=<?php if ($deviceType == "phone") echo "0"; else echo "1"; ?> controls>
				<source src="videos/amsterdam-in-4k-netherlands.webm" type="video/webm" />
				<source src="videos/ariege-bel-ariege-david-corry.mp4" type="video/mp4" />
			</video>
		</div>
	</div>
	<div id="video-control">
		<a class="control" id="video-autoplay" href="#">autoplay : on</a>	 
	</div>
	
	<br>
	<br>

	<div class="wrapper-100">
		<h1 class="title">
				<span class="style1">
					Saint-Girons - Ariège
				</span>
				<?php echo G_TEXT("bed and breakfast", TEXT_UCFIRST); ?> La Croisée
			</h1>
	</div>
	
	<div class="wrapper-100 padding30">
		<div class="wrapper resize-fleft" w_resize="700">
			<div>
				<img class="imgborder fleft s1 slideshow" src="./images/chambres-d-hôtes-la-croisée.jpg" gallery="lacroisee" w="800" h="600" alt="Chambres d'hôtes La Croisée - Saint-Girons">
			</div>
			<?php echo L_TEXT("text1", TEXT_UCFIRST); ?>
		</div>
		<div class="wrapper" style="min-height:20px;"></div>
		<div class="wrapper" >
			<?php echo L_TEXT("text2", TEXT_UCFIRST); ?>
		</div>
	</div>
	
	<div class="wrapper" style="min-height:50px;"></div>
	
	<div class="wrapper-100 pictures" maxImagesPerLine="4" minWidth="300">
		<div class="top-echancre"></div>
		<?php echo slideshow("images/slideshow-test.php"); ?>
		<div class="bottom-echancre"></div>
	</div>
	<span class="enlarge-pictues"><?php echo G_TEXT("enlarge pictures", TEXT_UCFIRST); ?></span>
	
	<div class="wrapper" style="min-height:50px;">
	</div>
	
	<div class="wrapper-100 brun center">
		
		<div class="wrapper two-columns visible" w_resize="800">
			<div id="map"></div>
			<div id="contact-informations">
				<span class="title"><?php echo L_TEXT("contact-details", TEXT_UCFIRST); ?></span>
				<span class="subtitle">Saint-Girons, Moulis</span>
				<p class="light-grey">
					Danièle VIENNOT
					<br>4, place de l'école
					<br>LUZENAC
					<br>09200 MOULIS
					
				<br><br>

				<?php echo G_TEXT("home phone", TEXT_UCFIRST); ?> : <a href=<?php echo "+".$home_phone?>><?php echo "+".chunk_split($home_phone, 2, ' '); ?></a>
				<br>
				 <?php echo G_TEXT("mobile", TEXT_UCFIRST); ?> : <a href=<?php echo "+".$mobile_phone?>><?php echo "+".chunk_split($mobile_phone, 2, ' '); ?></a>
				 
				 <br><br>
				 <?php echo G_TEXT("email", TEXT_UCFIRST); ?> : <a href="mailto:<?php echo $email; ?>?subject=Contact chambres - La Croisée"><?php echo $email; ?></a>
				</p>
			</div>
		</div>
	</div>
	
	<?php require('footer.php'); ?>
	<?php require('photoswipe.php'); ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="js/jquery.cookie-1.4.1.min.js" type="text/javascript"></script>
	
	<script src="photoswipe/photoswipe.min.js"></script> 
	<script src="photoswipe/photoswipe-ui-default.min.js"></script> 
	
	<script src="js/general.js" type="text/javascript"></script>
	
	<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC-SgaE3XRgRrqAetJdT-3JdMeJxutX80c&callback=initMap">
    </script>

</body>