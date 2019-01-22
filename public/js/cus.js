$(document).ready(function(){
	$('.filter_list_product').on('change', function(){		
		$('#filter_products').submit();
	});

	$('.slider-for').slick({
	  	slidesToShow: 1,
	  	slidesToScroll: 1,
	  	arrows: false,
	  	fade: true,
	  	asNavFor: '.slider-nav'
	});
	$('.slider-nav').slick({
	  	slidesToShow: 3,
	  	slidesToScroll: 1,
	  	asNavFor: '.slider-for',
	  	dots: true,
	  	centerMode: true,
	  	focusOnSelect: true
	});
});