function initMap(){var i={lat:42.953621,lng:1.0798999999999523},t=new google.maps.Map(document.getElementById("map"),{zoom:12,center:i});new google.maps.Marker({position:i,map:t})}$(document).ready(function(){function i(i){o.each(function(){var t,e,a=parseInt($(this).attr("w_resize"));$(this).attr("isBreaking")?e=$(this).attr("isBreaking"):(t=$(this).find("div > img"),$(this).attr("img-width",t.css("max-width")),$(this).attr("isBreaking","0"),e="0"),"1"==e&&i>a?(t||(t=$(this).find("div > img")),t.addClass("fleft"),t.css("max-width",$(this).attr("img-width")),$(this).attr("isBreaking","0")):"0"==e&&i<a&&(t||(t=$(this).find("div > img")),t.removeClass("fleft"),t.css("max-width",a+"px"),$(this).attr("isBreaking","1"))})}function t(i){s.each(function(){var t,e=parseInt($(this).attr("maxImagesPerLine")),a=parseInt($(this).attr("minWidth"));$(this).attr("imagesPerLine")?t=$(this).attr("imagesPerLine"):($(this).attr("imagesPerLine","4"),t="4");var o=Math.min(Math.max(Math.floor(i/a),1),e);if(o!=t){var s=100/o;$(this).find("IMG").css("width",s+"%"),$(this).attr("imagesPerLine",o)}})}function e(i){r.each(function(){var t=parseInt($(this).attr("w_resize")),e=$(this).children("div");$(this).attr("isBreaking")?isBreaking=$(this).attr("isBreaking"):(isBreaking=i>t?"0":"1",isBreaking="0"),"1"==isBreaking&&i>t?(e.removeClass("wrapper-100").addClass("wrapper-50"),$(this).attr("isBreaking","0")):"0"==isBreaking&&i<t&&(e.removeClass("wrapper-50").addClass("wrapper-100"),$(this).attr("isBreaking","1"))})}$("#menu > ul > li").hover(function(){$(this).find("ul").show()},function(){$(this).find("ul").hide()});var a=$(this).width(),o=$(".resize-fleft"),s=$(".pictures"),r=$(".resize-50");i(a),t(a),e(a),$(window).resize(function(){var a=$(this).width();i(a),t(a),e(a),$(this).width()>800?$("#map").css("width","60%"):$("#map").css("width","100%")});var n=document.getElementById("video");if(n){var d=$.cookie("video_autoplay",Number),h=$.cookie("video_volume",Number);void 0!=h&&(n.volume=h),n.addEventListener("volumechange",function(){n.muted?$.cookie("video_volume",0):$.cookie("video_volume",n.volume)}),void 0==d&&(d=1),1==d?$("#video")[0].play():$("a#video-autoplay").text("autoplay: off"),$("a#video-autoplay").click(function(){return 1==d?(d=0,$.cookie("video_autoplay",0),$("a#video-autoplay").text("autoplay: off")):(d=1,$.cookie("video_autoplay",1),$("a#video-autoplay").text("autoplay: on")),!1}),$("#video").mouseout(function(){$("#video").removeAttr("controls"),n.controls=!1}),$("#video").mouseover(function(){n.controls=!0})}});