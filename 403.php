<?php

session_start ();

$page = "404";

require ('./includes/global.php');

?>

<!DOCTYPE html>
<head>
	
	<title>Chambres d'hôtes La Croisée</title>
	
	<meta charset="utf-8">
	<meta name="description" content="Chambres d'hôtes La Croisée">
	<meta http-equiv="Content-Language" content="fr">
	<meta name="viewport" content="width=device-width" />
	
	<link rel="icon" type="image/png" href="images/favicon.png" />
	
	<style type="text/css">
		.dummy }
		}
		
		@font-face {
			font-family: 'bodonistd';
			font-style: normal;
			font-weight: 400;
			src: local('bodonistd'),
				url('./fonts/BodoniStd.eot') format('eot'),
				url('./fonts/BodoniStd.eot') format('embedded-opentype'), 
				url('./fonts/BodoniStd.woff') format('woff');
		}
			
		@font-face {
			font-family: 'futuramed';
			font-style: normal;
			font-weight: 400;
			src: local('FuturaMed'),
				url('./fonts/FuturaMed.eot') format('eot'),
				url('./fonts/FuturaMed.eot') format('embedded-opentype'), 
				url('./fonts/FuturaMed.woff') format('woff');
		}

		body {
			min-height: 100%;
			font-family: 'futuramed';
			font-weight: normal;
			line-height: 28px;
			background: white;
			color: black;
			padding:0;
			margin:0;
			text-align: justify;
		}
		
		h1 {
			width: 100%;
			display: block;
			text-align: center;
			margin: 0px 0 40px 0;
		}
		
		DIV.wrapper-100 {
			margin: auto;
			width: 100%;
			position: relative;
			overflow: hidden;
		}
			
			DIV.wrapper {
			margin: auto;
			max-width: 1050px;
			position: relative;
			overflow: hidden;
			padding: 0 0px;
		}
		
		.center {
			text-align: center;
		}
		
		SPAN.title {
			margin: 0 auto 30px auto;
			display: block;
		}

		.title {
			font-family: 'bodonistd';
			font-size: 50px;
			font-weight: normal;
			line-height: 55px;
		}
		
		a {
			color: black;
			text-decoration: none;
		}
		
		
		DIV.menu a {
			padding: 5px 15px;
			display:inline-block;
		}
		
		IMG {
			width:100%;
		}
		
	</style>	
	
</head>

<body class="404error">
	
	<div class="wrapper-100">
		<div class="wrapper center">
			<a href="<?php echo page_url("home", $language); ?>">
			<span class="title"><?php echo G_TEXT("bed and breakfast", TEXT_UCFIRST); ?> La Croisée</span>
			</a>
		</div>
	</div>
	
	<div class="menu">
		<a href="<?php echo page_url("home", $language); ?>"><span><?php echo G_TEXT("menu home"); ?></span></a>
		<a href="<?php echo page_url("rooms", $language); ?>"><span><?php echo G_TEXT("menu rooms"); ?></span></a>
		<a href="<?php echo page_url("contact", $language); ?>"><span><?php echo G_TEXT("menu contact"); ?></span></a>
	</div>
	
	<img src="images/interface/error-403.png">
	
</body>