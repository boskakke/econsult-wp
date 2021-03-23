
import gsap from 'gsap'
// import { ScrollTrigger } from 'gsap/ScrollTrigger';

export default {
	init() {

		// gsap.registerPlugin(ScrollTrigger);

		const scrollObserver = document.querySelector('.scrollObserver')
		const body = document.querySelector('body')
		let observer = new IntersectionObserver(observerCallback, options);

		const options = {
			threshold: 1,
		};

		function observerCallback(entries) {
			entries.forEach((entry) => {
				if (entry.isIntersecting) {
					body.classList.add('dark')
				} else {
					body.classList.remove('dark')
				}
			});
		}

		observer.observe(scrollObserver);
		



		const header = document.querySelector('.header');
		const logo = header.querySelector('.header__col--logo')
		const headerItems = header.querySelectorAll('.top-menu > .menu-item')
		const pageTitle = document.querySelectorAll('.hero__title')
		const images = document.querySelectorAll('.hero-fp__illu .grid__item')

		const headerTL = gsap.timeline()
		headerTL
			.addLabel('start')
			.fromTo(logo, {opacity: 0, y: -20}, {opacity: 1, y: 0})
			.fromTo(headerItems, {opacity: 0, y: -20}, {opacity: 1, y: 0, stagger: .1}, 'start+=.1')
			.fromTo(pageTitle, {opacity: 0, y: 40}, {opacity: 1, y: 0, duration: 2, ease: 'expo.out'}, '<.2')
			.fromTo(images, {opacity: 0, y: 40}, {opacity: 1, y: 0, duration: 1.5, ease: 'expo.out', stagger: .1}, '<.2')

		

		



	const menuToggle = gsap.timeline({paused:true, reversed:true});
	const hamburger = document.querySelector('.hamburger')

	menuToggle
	.to(' .top', .2, {y:'-9px', transformOrigin: '50% 50%'}, 'burg')
	.to(' .bot', .2, {y:'9px', transformOrigin: '50% 50%'}, 'burg')
	.add('rotate')
	.to(' .top', .2, {y:'5'}, 'rotate')
	.to(' .bot', .2, {y:'-5'}, 'rotate')
	.to(' .top', .2, {rotationZ:45, transformOrigin: '50% 50%'}, 'rotate')
	.to(' .bot', .2, {rotationZ:-45, transformOrigin: '50% 50%'}, 'rotate')

	function openNav(e) {
		e.preventDefault();
		let aria = this.getAttribute('aria-expanded')
		
		menuToggle.reversed() ? menuToggle.restart() : menuToggle.reverse();
		if(aria === 'false') {
			this.setAttribute('aria-expanded', 'true')
			body.classList.add('show-menu')
		} else {
			this.setAttribute('aria-expanded', 'false')
			body.classList.remove('show-menu')
		}
	}

	
	if(hamburger !== null) {
		hamburger.addEventListener('click', openNav)
	}

	// hamburger
	
	

	


$('.top-link').click(function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop : 0},800);
});

		// submenu

		$('.menu-item-has-children > a').on('click', function(e){
			e.preventDefault();
			$(this).parent('li').toggleClass('open');
		});

		$('.preloader').delay(200).addClass('hide');

	},
	finalize() {
		// JavaScript to be fired on all pages, after page specific JS is fired
	},
};



const options = {
	root: null, // Page as root
	rootMargin: '0% 0% 15% 0%', // set threshold for when image should start being fetched.
	threshold: 0.5,
};

const handleIntersection = (entries) => {
	entries.forEach(entry => {
		if(entry.intersectionRatio > 0) {
			entry.target.classList.add('show');
		}
	})
}

const observer = new IntersectionObserver(handleIntersection, options);
const elements = document.querySelectorAll('.fadeUp');

elements.forEach(elm => {
	observer.observe(elm);
})
