import vhCheck from 'vh-check'
import 'slick-carousel/slick/slick.min.js'
// import 'swiper/swiper-bundle.css'


export default {
	init() {

		const $cases = $('.deck-cases__slider')
		var currentSlide;
		var slidesCount;
		var sliderCounter = $('.slide-counter');


		var updateSliderCounter = function(slick) {
			currentSlide = slick.slickCurrentSlide() + 1;
			slidesCount = slick.slideCount;
			$(sliderCounter).html('0' + currentSlide + '/0' + slidesCount)
		};

		$cases.on('init', function(event, slick) {
			updateSliderCounter(slick);
		});

		$cases.on('afterChange', function(event, slick, currentSlide) {
			updateSliderCounter(slick, currentSlide);
		});

		// $cases.on('afterChange', function(event, slick, currentSlide){
		// 	// var caption = $('.slick-current .slide--caption').html();
		// 	// $('#gallery-caption').html(caption);
		// 	const myContent = slick
		// 	console.log(slick)
		// 	console.log(myContent.$slides[currentSlide])
		// });


		$cases.slick({
			draggable:false,
			infinite: true,
			speed: 300,
			slidesToShow: 1,
			fade: true,
			nextArrow: '.cases-nav--right',
			prevArrow: '.cases-nav--left',
		});




		// JavaScript to be fired on the home page
		let vheight = vhCheck();
		document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');

		window.addEventListener('resize', () => {
			vheight = vhCheck()
			document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');
		})




		




	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
