	
	<?php $dest_lang = ($language=="fr")?"en":"fr"; ?>
	<div class="wrapper-menu" id="wrapper-menu">
		<!--div id="menu-top"></div-->
		<div id="real-wrapper-menu">
		<!--img class="logo" src="images/logo.gif"-->
		<!--img class="logo" src="images/logo-flowers.png"-->
		<img class="logo" src="images/logo.png">
		<a class="language" href="<?php echo page_url($page, $dest_lang); ?>">
		<img class="language" src="images/interface/<?php echo $dest_lang; ?>.jpg">
		</a>
		<a id="icon-menu" href="#">
		<img src="images/interface/menu.png">
		</a>
		<div id="menu" class="" w_resize="800">	
			<ul>
				<li><a href="<?php echo page_url("home", $language); ?>"><span><?php echo G_TEXT("menu home"); ?></span></a></li>
				<li><a href="<?php echo page_url("rooms", $language); ?>"><span><?php echo G_TEXT("menu rooms"); ?></span></a></li>
				<li class="sub"><span>Saint-Girons</span>
					<img src="images/interface/right.png">
					<ul class="submenu">
						<li><a href="#">Saint-Lizier</a></li>
						<li><a href="#">Montjoie-en-Couserans</a></li>
						<li><a href="#">Tourtouse</a></li>
						<li><a href="#">Cazères</a></li>
					</ul>
				</li>
				<li><a href="<?php echo page_url("contact", $language); ?>"><span><?php echo G_TEXT("menu contact"); ?></span></a></li>
			</ul>
		</div>
		</div>
		<div id="menu-bottom"></div>
	</div>