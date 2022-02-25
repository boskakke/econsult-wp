// HOME


import vhCheck from 'vh-check'
import gsap from 'gsap'
import { ScrollTrigger } from 'gsap/ScrollTrigger';
// import 'swiper/swiper-bundle.css'
gsap.registerPlugin(ScrollTrigger);

export default {
	init() {

		const heroTL = gsap.timeline()
		
		heroTL.fromTo('.grid--hero-images', {
			
			'--img2': 200 + 'px', 
		}, {
			
			'--img2': -150 + 'px', 
		scrollTrigger: {
			trigger: '.grid--hero-images',
			scrub: 1,
			markers: true,
			start: 'top bottom',
			end: 'bottom center',
		}})

		// JavaScript to be fired on the home page
		let vheight = vhCheck();
		document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');

		window.addEventListener('resize', () => {
			vheight = vhCheck()
			document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');
		})

		const header = document.querySelector('.header');
		const logo = header.querySelector('.header__col--logo')
		const headerItems = header.querySelectorAll('.top-menu > .menu-item')
		const pageTitle = document.querySelectorAll('.hero__title')
		const images = document.querySelectorAll('.hero-fp__figure')

		const headerTL = gsap.timeline()
		headerTL
			.addLabel('start')
			.fromTo(logo, {opacity: 0, y: -20}, {opacity: 1, y: 0})
			.fromTo(headerItems, {opacity: 0, y: -20}, {opacity: 1, y: 0, stagger: .1}, 'start+=.1')
			.fromTo(pageTitle, {opacity: 0, y: 40}, {opacity: 1, y: 0, duration: 2, ease: 'expo.out'}, '<.2')
			.fromTo(images, { opacity: 0, y: 40 }, { opacity: 1, y: 0, duration: 2, ease: 'expo.out', stagger: .2 }, '<.2')
		
		
		
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

	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
