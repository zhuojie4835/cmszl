$(function(){
	$('#tipback').css({"right":$(window).width()/2-568,"bottom":$(window).height()/2-200});
	$(window).resize(function() {
		$('#tipback').animate(
			{
				right: $(window).width()/2-570,
				bottom: $(window).height()/2-200},
				{duration: 600, queue: false } );
	});
	$(window).scroll(function(){var t = document.documentElement.scrollTop || document.body.scrollTop;if(t >= 145){$("#tipback" ).fadeIn();}else{$("#tipback" ).fadeOut();}});})

function gotop(){$('html, body').animate({scrollTop: 0}, 200);}//返回顶部