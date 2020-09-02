import gsap from 'gsap'
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




		const tl_title = document.querySelectorAll('.article__title')


		// const wordsTl = gsap.timeline({repeat: 0})
		const tl = gsap.timeline()


		// for (let i = 0; i < words.length; i++) {
		// 	wordsTl.fromTo(words[i],
		// 		{x: -100, opacity:0},
		// 		{duration: .5, autoAlpha:1, x:0, stagger: .2, ease:'elastic.out(1.75, 0.5)'})
		// }


		tl


		.fromTo(tl_title, {y: -30, opacity: 0}, {opacity: 1, y: 0, duration: 1,  ease: 'power4.out'}, '<.2')
		.fromTo('.hero-fp__figure', {y: -20, opacity: 0}, {y: 0, opacity: 1, duration: 1, ease: 'power4.out'} , '<.2')
		.fromTo('.hero-fp__figure--2', {y:-20, opacity: 0}, {y: 0, opacity: 1, duration: 1, ease: 'elastic.out(1, 0.75)'} , '<.2')





	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
