import gsap from 'gsap'
import vhCheck from 'vh-check'

export default {
	init() {
		// JavaScript to be fired on the home page

		let vheight = vhCheck();
		const tl_headerElements = document.querySelectorAll(' .header__logo, .top-menu > li')
		const tl_title = document.querySelectorAll(' .hero-fp__trumpet')
		const words = document.querySelectorAll(' .hero-fp__words span')


		document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');

		window.addEventListener('resize', () => {
			vheight = vhCheck()
			document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');
		})
		const tl = gsap.timeline()
		tl.fromTo('.hero-fp__curtain', {scaleY: 1.2}, {scaleY: 1, duration: 2, ease: 'expo.out'} )
		tl.fromTo(tl_headerElements, {y: -20, opacity: 0}, {y: 0, opacity: 1, duration: .5, stagger: .05}, '<.6' )
		tl.fromTo(tl_title, {y: 50, opacity: 0}, {opacity: 1, y: 0, duration: 1,  ease: 'power4.out'}, '<.2')
		tl.fromTo(words, { opacity: 0, scaleY: 0 }, {opacity: 1, scaleY: 1, duration: .7, stagger: .1, ease: 'power4.out'}, '<.2')
		tl.fromTo('.hero-fp__figure', {y: -50, opacity: 0}, {y: 0, opacity: 1, duration: 2, ease: 'expo.out'}, '<.2' )
		tl.fromTo('.hero-fp__logo', {y: -50, opacity: 0}, {y: 0, opacity: 1, duration: 2, ease: 'expo.out'}, '<.5' )


	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
