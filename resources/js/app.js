$('.multiple-items').slick({
	infinite: true,
	slidesToShow: 3,
	slidesToScroll: 3
});

$('.carousel').slick({
	infinite: true,
	dots: true,
	slidesToShow: 1,
	slidesToScroll: 1,
	arrows: false
});

$('.products-container').slick({
	dots: false,
	infinite: true,
	speed: 300,
	slidesToShow: 4,
	slidesToScroll: 4,
	prevArrow: '<button type="button" class="slick-prev"></button>',
	nextArrow: '<button type="button" class="slick-next"></button>',
	responsive: [
		{
		breakpoint: 992,
		settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			}
		},
		{
		breakpoint: 768,
		settings: {
			infinite: true,
			slidesToShow: 2,
			slidesToScroll: 2
			}
		},
		{
		breakpoint: 480,
		settings: {
			infinite: true,
			slidesToShow: 1,
			slidesToScroll: 1
			}
		}
		// You can unslick at a given breakpoint now by adding:
		// settings: "unslick"
		// instead of a settings object
	]
});

console.log('ok');


