
$(document).ready(function(){
	
	// le menu
	
	$("#menu > ul > li.sub").hover(
		function(){
			var ul = $(this).find("ul");
			// on ne devrait faire ca qu'une fois.
			if (menu.hasClass('menu-vertical')) {
				var w = $(this).width();
				var p = $(this).position();	
				ul.css({left: p.left+w, top:0});
			}
			else {
				ul.css({left:0, top:47});
			}
			ul.show();
		} ,
		function(){ $(this).find("ul").hide(); }
	);
	
	function resize_menu(w) {
		var w_resize = parseInt(menu.attr("w_resize"));
		
		if (w > w_resize) {
			if (!menu.hasClass('menu-horizontal')) {
				icon_menu.hide();
				menu.show();
				menu.removeClass("menu-vertical").addClass('menu-horizontal');
			}
		}
		else {
			if (!menu.hasClass('menu-vertical')) {
				icon_menu.show();
				menu.hide();
				menu.removeClass("menu-horizontal").addClass('menu-vertical');
			}
		}
	}
	
	function resize_fleft(w) {
		rf.each(function() {
			var img,  isBreaking;;
			var w_resize = parseInt($(this).attr("w_resize"));
			
			if ($(this).attr("isBreaking"))
				isBreaking = $(this).attr("isBreaking");
			else {
				img =  $(this).find("div > img");
				$(this).attr("img-width", img.css("max-width"));
				$(this).attr("isBreaking", "0");
				isBreaking = "0";
			}	
			
			if (isBreaking=="1" && w > w_resize) {
				if (!img) img =  $(this).find("div > img");
				img.addClass("fleft");
				img.css("max-width", $(this).attr("img-width"));
				$(this).attr("isBreaking", "0");
			}
			else if (isBreaking=="0" && w < w_resize) {
				if (!img) img =  $(this).find("div > img");
				img.removeClass("fleft");
				img.css("max-width", w_resize+"px");
				$(this).attr("isBreaking", "1");
			}
			
		});
	}
	
	function resize_pictures(w) {
		pictures.each(function(){
			var imagesPerLine;
			var maxImagesPerLine = parseInt($(this).attr("maxImagesPerLine"));
			var minWidth = parseInt($(this).attr("minWidth"));
			
			if ($(this).attr("imagesPerLine"))
				imagesPerLine = $(this).attr("imagesPerLine");
			else {
				// le width des images est 25% dans le css
				$(this).attr("imagesPerLine", "4");
				imagesPerLine = "4";
			}
			
			var n = Math.min(Math.max(Math.floor(w/minWidth), 1), maxImagesPerLine);
			
			if (n != imagesPerLine) {
				var imgw = 100/n;
				$(this).find('IMG').css("width", imgw+"%");
				$(this).attr("imagesPerLine", n);
			}
		})
	};
	
	function resize_two_columns(w) {
		two_columns.each(function(){
			var w_resize = parseInt($(this).attr("w_resize"));
			var divs = $(this).children('div');
			
			if ($(this).attr("isBreaking"))
				isBreaking = $(this).attr("isBreaking");
			else {
				isBreaking = 0;
			}	
			
			if (isBreaking=="1" && w > w_resize) {
				divs.removeClass('wrapper-100').addClass('wrapper-50');
				$(this).attr("isBreaking", "0");
				isBreaking = 0;
			}
			else if (isBreaking=="0" && w < w_resize) {
				divs.removeClass('wrapper-50').addClass('wrapper-100');
				$(this).attr("isBreaking", "1");
				isBreaking = 1;
			}
			
			if (map) {
				if (isBreaking=="0")
					map.css('width', "60%");
				else
					map.css('width', "100%");
			}
			
			if (rooms_flowers) {
				
				var divW = $(this).width();
				var flowersW = rooms_flowers.width();
				var right;
				
				if (isBreaking=="0")
					right = divW/2 - flowersW/2 +15;
				else
					right = 0;
				rooms_flowers.css({"right":right});
			}
			
			/*if (prix_crabere) {
				if (isBreaking=="0")
					prix_crabere.css("margin-top", 54);
				else
					prix_crabere.css("margin-top", 20);
			}*/
		});
	}
	
	function resize_three_columns(w) {
		three_columns.each(function(){
			var w_resize = parseInt($(this).attr("w_resize"));
			var divs = $(this).children('div');
			
			if ($(this).attr("isBreaking"))
				isBreaking = $(this).attr("isBreaking");
			else {
				isBreaking = 0;
			}	
			
			if (isBreaking=="1" && w > w_resize) {
				divs.removeClass('wrapper-100').addClass('wrapper-33');
				$(this).attr("isBreaking", "0");
				isBreaking = 0;
			}
			else if (isBreaking=="0" && w < w_resize) {
				divs.removeClass('wrapper-33').addClass('wrapper-100');
				$(this).attr("isBreaking", "1");
				isBreaking = 1;
			}
		});
	}
	
	// resize du formulaire pour envoyer un mail
	function resize_contact_fields(w) {
		contact_fields.each(function() {
			var w_resize = parseInt($(this).attr("w_resize"));
			// padding textarea 5px et padding du wrappre 20px
			var innerW = $(this).innerWidth()-50;
			var textarea = $('textarea');
			
			textarea.css({width:innerW, left:25});
			//textarea.width(innerW);
			
			$('#warning').css({width:innerW, left:25});
			
			if (w > w_resize) {
				var fw = innerW * 0.25;
				var ow = innerW - fw;
				$('#your-name').css({"display":"inline-block", "left":25, "width":fw});
				fw = innerW * 0.35;	
				ow = ow - 10 - fw;
				$('#your-email').css({"display":"inline-block", "left":35, "width":fw});
				fw = innerW * 0.3;		
				// -30 : ce sont les padding des 3 elements
				$('#your-subject').css({"display":"inline-block", "left":ow - fw - 5, "width":fw});
			}
			else {
				$('#your-name').css({"display":"block", "left":25, "width":innerW-5});
				$('#your-email').css({"display":"block", "left":25, "width":innerW-5});
				$('#your-subject').css({"display":"block", "left":25, "width":innerW-5});
			}
		});
	}

	var w = $(window).width();
	
	var menu = $('#menu');
	var icon_menu = $('#icon-menu');
	
	var rf = $('.resize-fleft');
	var pictures = $('.pictures');
	var two_columns = $('.two-columns');
	var three_columns = $('.three-columns');
	var contact_fields = $('#contact-fields');
	var prix_crabere = $("#prix-crabere");
	
	var rooms_flowers = $('IMG#rooms-flowers');
	var map = $('#map');
	
	/* initialisation - les resize */
	resize_menu(w);
	resize_fleft(w);
	resize_pictures(w);
	resize_two_columns(w);
	resize_three_columns(w);
	resize_contact_fields(w);
	
	$(window).resize(function() {
		var w = $(this).width();
		
		resize_menu(w);
		resize_fleft(w);
		resize_pictures(w);
		resize_two_columns(w);
		resize_three_columns(w);
		resize_contact_fields(w);		
	});
	
	icon_menu.click(function() {
		if (menu.is(":visible"))
			menu.hide();
		else
			menu.show();
		
		return false;
	});
	
	/* envoie de mail */
	
	$('#send_mail').click(function() {
		
		var warning = $('#warning');
		var error = null;
		
		var name = $('#your-name').val();
		var email = $('#your-email').val();
		var subject = $('#your-subject').val();
		var message = $('#message').val();
		
		if (name.length == 0 || email.length == 0 || message.length == 0) {
			warning.css("display", "block").removeClass('warning-success').addClass('warning-error').text("Certains champs sont vides. Veuillez verifier vos informations.");
		}
		else {
			
			$('IMG#ajax-loader').show();
			warning.css("display", "none");
			
			$.ajax({
				type: 'POST',
				contentType: "application/x-www-form-urlencoded;charset=utf-8",
				url: 'includes/send_mail.php', 
				data: {"name":name,"email":email,"subject":subject,"message":message},
				timeout: 3000,
				success: function(response){
					$('IMG#ajax-loader').hide();
					var data = jQuery.parseJSON(response);
					
					if (data.status == "success") {
						warning.removeClass('warning-error').addClass('warning-success').css("display", "block").html(data.message);
					}
					else {
						warning.css("display", "block").removeClass('warning-success').addClass('warning-error').text(data.message);
					}
				},
				error: function(){
					$('IMG#ajax-loader').hide();
					warning.removeClass('warning-success').addClass('warning-error').css("display", "block").text('Cette requête AJAX n\'a pas abouti');
				}
			});
		}
		
		return false;
	});
	
	/* video */ 
	
	var video = document.getElementById("video");
	if (video) {
		var video_autoplay = $.cookie("video_autoplay", Number);
		var video_volume = $.cookie("video_volume", Number);
		
		if (video_volume != undefined) {
			video.volume = video_volume;
		}
		
		video.addEventListener("volumechange", function() {
			if (video.muted)
				$.cookie("video_volume", 0);
			else
				$.cookie("video_volume", video.volume);
		});
		
		if (video_autoplay == undefined) {
			video_autoplay = parseInt($(video).attr("default-autoplay"));
		}
		
		if (video_autoplay == 1)
			$('#video')[0].play();
		else
			$('a#video-autoplay').text('autoplay: off');
		
		$('a#video-autoplay').click(function() {
			
			if (video_autoplay == 1) {
				video_autoplay = 0;
				$.cookie("video_autoplay", 0);
				$('a#video-autoplay').text('autoplay: off');
			}
			else {
				video_autoplay = 1;
				$.cookie("video_autoplay", 1);
				$('a#video-autoplay').text('autoplay: on');
			}
			
			return false;
		});
		
		$('#video').mouseout(function() {	
			$('#video').removeAttr('controls');
			video.controls = false;
		});
		
		$('#video').mouseover(function() {
			video.controls = true;
		});
	}
	
	/* les slideshows */
	var galleries = new Array();
	
	$('img.slideshow').each(function() {
		var gallery = $(this).attr("gallery");
		var src;
		
		if (!galleries[gallery]) {
			galleries[gallery] = new Array();
		}
		
		src = $(this).attr('src');
		if (src.endsWith("-small.jpg")) {
			src = src.replace("-small", "");
		}
		
		$(this).attr("gallery-index", galleries[gallery].length);
		
		galleries[gallery].push({
			"src"	: src,
			"title"	: $(this).attr('alt'),
			"w"		: $(this).attr('w'),
			"h" 	: $(this).attr('h')
		});
		
		$(this).click(function() {
			
			var gallery = $(this).attr("gallery");
			var index = parseInt($(this).attr("gallery-index"));
			
			openPhotoSwipe(galleries[gallery], index);
			
			return false;
		});
	});
	
	var openPhotoSwipe = function(gallery, index) {
		var pswpElement = document.querySelectorAll('.pswp')[0];

		
		// define options (if needed)
		var options = {
			index : index,
				 // history & focus options are disabled on CodePen        
			history: false,
			focus: false,

			showAnimationDuration: 0,
			hideAnimationDuration: 0
			
		};
		
		var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, gallery, options);
		gallery.init();
	};

	
});

/* google map */

function initMap() {
	var uluru = {lat: 42.953621, lng: 1.0798999999999523};
	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 12,
		center: uluru
		});
		var marker = new google.maps.Marker({
			position: uluru,
			map: map
		});
}

