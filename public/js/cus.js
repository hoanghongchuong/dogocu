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

	$('.owl-carousel').owlCarousel({
	    loop:true,
	    margin:10,
	    nav:true,
	    responsive:{
	        0:{
	            items:1
	        },
	        600:{
	            items:1
	        },
	        1000:{
	            items:1
	        }
	    }
	})

});