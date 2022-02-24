import vhCheck from 'vh-check'
import gsap from 'gsap'
// import 'swiper/swiper-bundle.css'


export default {
	init() {


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
			.fromTo(images, {opacity: 0, y: 40}, {opacity: 1, y: 0, duration: 2, ease: 'expo.out', stagger: .2}, '<.2')

		

		
		




	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
