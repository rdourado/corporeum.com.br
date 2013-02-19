$(document).ready(function(){
	var $banners = $('#banners>img');
		total = $banners.length,
		current = 0;
	$banners.each(function(i){
		$(this).css({
			'top': 0,
			'left': 0,
			'position': 'absolute',
			'z-index': total - i
		});
	}).fadeOut(0).first().fadeIn(0);
	setInterval(function(){
		$banners.eq(current).fadeOut('slow');
		current = current < total - 1 ? current + 1 : 0;
		$banners.eq(current).fadeIn('slow');
	}, 5000);
});