jQuery(document).ready(function($){

	function sliderResize(){
		var windowHeight = $(window).height();
		var sliderHeight = windowHeight - 175;
		console.log('window: ' + windowHeight + ' slider: ' + sliderHeight);
		$('.cycle-slideshow').css('max-height', sliderHeight);
	}

	sliderResize();

	var initial_image = $('.carousel-slide').children('img').attr('src');

	$('.current-image').children('img').attr('src', initial_image);

	$('.carousel-slide').on('click touch', function(){
		var new_image = $(this).children('img').attr('src');
		$('.current-image').children('img').attr('src', new_image);
	});

	$('.menu-button').on('click touch', function(){
		$('.menu').fadeToggle();
	});

});