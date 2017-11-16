<?php

session_start ();

$page = "contact";

require ('./includes/global.php');

?>

<!DOCTYPE html>
<head>

	<?php require('tagmanager-head.php'); ?>

	<title>Chambres d'hôtes La Croisée</title>
	<meta charset="utf-8">
	<meta name="description" content="Chambres d'hôtes La Croisée">
	<meta http-equiv="Content-Language" content="fr">
	<meta name="viewport" content="width=device-width" />
	
	<style type="text/css"><?php require('css/css.css'); ?></style>
	
	
</head>

<body>

	<?php require('tagmanager-head.php'); ?>
	
	<!-- menu -->
	
	<?php require('menu.php'); ?>
	
	<div class="wrapper" style="min-height:70px;">
	</div>
	
	<br>
	<div class="wrapper-100 top-image">
		<img src="images/nature/cascade.jpg">
	</div>
	
	<br>
	<br>
	<div class="wrapper-100 center"> 
		<h1 class="title">
			<?php echo L_TEXT("contact-details", TEXT_UCFIRST); ?>
		</h1>
		<?php echo L_TEXT("text 1", TEXT_UCFIRST); ?>
		
		<div  style="min-height:50px;"></div>
		
		<div class="wrapper three-columns contact-informations"  w_resize="650">
	
			<div class="center wrapper-33">
				<div class="contact-icon">
				<img src="images/interface/icon-phone.png">
				</div>
				<?php echo G_TEXT("phone", TEXT_UCFIRST); ?>
				<br>
				<?php echo G_TEXT("home phone", TEXT_UCFIRST); ?> : <a href=<?php echo "+".$home_phone?>><?php echo "+".chunk_split($home_phone, 2, ' '); ?></a>
				<br>
				 <?php echo G_TEXT("mobile", TEXT_UCFIRST); ?> : <a href=<?php echo "+".$mobile_phone?>><?php echo "+".chunk_split($mobile_phone, 2, ' '); ?></a>
			</div>
			<div class="center wrapper-33">
				<div class="contact-icon">
				<img src="images/interface/icon-email.png">
				</div>
				<?php echo G_TEXT("email", TEXT_UCFIRST); ?>
				<br>
				<span class="contact-details">
				<a href="mailto:<?php echo $email; ?>?subject=Contact chambres - La Croisée"><?php echo $email; ?></a>
				</span>
			</div>
			<div class="center wrapper-33">
				<div class="contact-icon">
				<img src="images/interface/icon-marker.png">
				</div>
				<?php echo G_TEXT("address", TEXT_UCFIRST); ?>
				<br>
				<span class="contact-details">
				Danièle VIENNOT<br>
				4, place de l'école<br>
				LUZENAC<br>
				09200 MOULIS<br>
				</span>
			</div>	
		</div>
	</div>
		
	<div class="wrapper" style="min-height:30px;"></div>

	<div class="wrapper-100 brun visible">
		<img id="contact-flowers" class="contact-flowers" src="images/nature/plante-1.png">
		<br>
		<div class="wrapper center">
			<span class="title"><?php echo L_TEXT("prenez-contact", TEXT_UCFIRST); ?></span>
		</div>
		
		<div id="contact-fields" class="wrapper" w_resize="750">
				<input id="your-name" type="text" name="name" value="" width="100%" class="" placeholder="<?php echo L_TEXT("your name", TEXT_UCFIRST); ?>...">
				<input id="your-email" type="text" name="email" value="" width="100%" class="" placeholder="<?php echo L_TEXT("your email", TEXT_UCFIRST); ?>...">
				<input id="your-subject" type="text" name="subject" value="" width="100%" class="" placeholder="<?php echo L_TEXT("subject", TEXT_UCFIRST); ?>">
		</div>
		
		<div class="wrapper">
			<textarea id="message" style="resize:none"  width="100%" class="" placeholder="<?php echo L_TEXT("message", TEXT_UCFIRST); ?>"></textarea>
			
			<div class="wrapper-100 center">
			<a id="send_mail" href="#"><?php echo L_TEXT("send message", TEXT_UCFIRST); ?></a>
			<img id="ajax-loader" src="images/interface/ajax-loader.gif">
			</div>
			<span id="warning"></span>
		</div>

	</div>

	<?php require('footer.php'); ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="js/jquery.cookie-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/general.js" type="text/javascript"></script>

</body>