$(document).ready(function(){

	$('.one-time').slick({
	  dots: true,
	  infinite: true,
	  speed: 300,
	  slidesToShow: 3,
	  centerMode: true
	});

	$('.statistics-carousel').slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1
	});

	$('.sponsor-carousel').slick({
		infinite: true,
		slidesToShow: 3,
		slidesToScroll: 1
	});
});



