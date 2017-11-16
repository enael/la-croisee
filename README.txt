templates:

<div class="wrapper-100 padding30">
	template
</div>

------------------------------------------------------------------
image float:left
w_resize : taille en dessous de laquelle le texte passe en dessous
de l'image.

<div class="wrapper resize-fleft" w_resize="700">
	<div>
		<img class="imgborder fleft s1" src="./images/exterieure.jpg">
	</div>
	<p>
	</p>
	...
</div>

---------------------------------------------------------------------
des images 
maxImagesPerLine : nombre maximum d'images sur une ligne
minWidth : taille minimum des images

<div class="wrapper-100 pictures" maxImagesPerLine=4 minWidth="200">
		<img src="images/Arrien-2.jpg">
		<img src="images/254.jpg">
		<img src="images/le-Salat-de-St-Girons-85.jpg">
		<img src="images/lac-de-Bethmale-et-route-39.jpg">
		<img src="images/moutons-1.jpg">
		
		// a inserer quand on cree la page.
		<div class="bottom-echancre"></div>
</div>


----------------------------------------------------------------------------
slideshow
class : gallery
gallery : nom de la galerie
w, h : taille de l'image dans le slideshow

<img class="slideshow" src="" gallery="nom de la gallery" w="..." h="..." alt="Chambres d'hôtes La Croisée - Saint-Girons">