<?php

session_start ();

$page = "rooms";

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
	
	<link rel="icon" type="image/png" href="images/favicon.png" />
	<!--link rel="stylesheet" type="text/css" href="css/css.css"-->
	
	
</head>

<body>

	<?php require('tagmanager-head.php'); ?>

	<?php require('menu.php'); ?>
	
	<div class="wrapper" style="min-height:70px;">
	</div>
	
	<br>
	<div class="wrapper-100 top-image">
		<img src="images/nature/Saint-Lizier.jpg">
	</div>
	
	
	
	<br>
	<br>
	<div class="wrapper-100">
		<h1 class="title">
			Les chambres
		</h1>
	</div>
	
	<div class="wrapper-100">
		<div class="wrapper center">
			<p>La Croisée possède 2 chambres pour vous accueillir. Le salon est à votre disposition pour vous détendre ou lire, et la salle à manger ou la terrasse pour prendre les repas que vous pourriez rapporter. Dans le jardin plusieurs coins repos vous attendent, ainsi qu'un coin repas aménagé avec un micro-ondes.
			</p>
			<!--span class="special"><?php echo L_TEXT("text 1", TEXT_UCFIRST); ?></span-->
			<ul>
				<li><?php echo L_TEXT("text 2", TEXT_UCFIRST); ?></li>
				<li><?php echo L_TEXT("text 3", TEXT_UCFIRST); ?></li>
				<li><?php echo L_TEXT("text 4", TEXT_UCFIRST); ?></li>
				<li><?php echo L_TEXT("text 5", TEXT_UCFIRST); ?></li>
			</ul>
			<p><?php echo L_TEXT("text 6", TEXT_UCFIRST); ?></p>
		</div>
	</div>
	
	<div class="wrapper" style="min-height:50px;">
	</div>
	
	<div class="wrapper-100 brun visible">
		<div class="wrapper two-columns visible div-rooms" w_resize="800">
			<img id="rooms-flowers" src="images/nature/fleurs-rose-rouge.png">
			<div class="wrapper-50 center">
			<div>
				<span class="title"><?php echo L_TEXT("Valier Room", TEXT_UCFIRST); ?></span>
				<img src="images/lacroisee/chambre-valier.jpg" alt="La chambre Valier">
				<ul>
					 <li><?php echo L_TEXT("valier 1", TEXT_UCFIRST); ?></li>
					 <li><?php echo L_TEXT("valier 2", TEXT_UCFIRST); ?></li>
					 <li><?php echo L_TEXT("valier 3", TEXT_UCFIRST); ?></li>
				</ul>
				<table>
					<tr>
						<td>1 <?php echo G_TEXT("personn"); ?></td>
						<td>2 <?php echo G_TEXT("personns"); ?></td>
						<td>3 <?php echo G_TEXT("personns"); ?></td>
					</tr>
					<tr>
						<td>50 €</td>
						<td>55 €</td>
						<td>65 €</td>
					</tr>
				</table>
				<p><?php echo L_TEXT("text 10", TEXT_UCFIRST); ?></p>
			</div>
			</div>
			<div class="wrapper-50 center">
			<div>
				<span class="title"><?php echo L_TEXT("Crabère Room", TEXT_UCFIRST); ?></span>
				<img src="images/lacroisee/chambre-crabere.jpg" alt="La chambre Crabère">
				<ul>
					 <li><?php echo L_TEXT("crabere 1", TEXT_UCFIRST); ?></li>
					 <li><?php echo L_TEXT("crabere 2", TEXT_UCFIRST); ?></li>
				</ul>
				<table id="prix-crabere">
					<tr>
						<td>1 <?php echo G_TEXT("personn"); ?></td>
						<td>2 <?php echo G_TEXT("personns"); ?></td>
					</tr>
					<tr>
						<td>40 €</td>
						<td>45 €</td>
					</tr>
				</table>
				<p><?php echo L_TEXT("text 10", TEXT_UCFIRST); ?></p>
			</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper" style="min-height:50px;">
	</div>
	
	<div class="wrapper-100 pictures" maxImagesPerLine="4" minWidth="300" >
		<div class="top-echancre"></div>
		<img src="images/test/16-01-2010-les-Goutets-28.jpg">
		<img src="images/test/254.jpg">
		<img src="images/test/Col-Agnes-Nov-2014-49.jpg">
		<img src="images/test/le-Salat-de-St-Girons-85.jpg">
		<img src="images/test/16-01-2010-les-Goutets-28.jpg">
		<img src="images/test/254.jpg">
		<img src="images/test/Col-Agnes-Nov-2014-49.jpg">
		<img src="images/test/le-Salat-de-St-Girons-85.jpg">
		<div class="bottom-echancre"></div>
	</div>
	<span class="enlarge-pictues"><?php echo G_TEXT("enlarge pictures", TEXT_UCFIRST); ?></span>
	
	<?php require('footer.php'); ?>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="js/jquery.cookie-1.4.1.min.js" type="text/javascript"></script>
	<script src="js/general.js" type="text/javascript"></script>

</body>