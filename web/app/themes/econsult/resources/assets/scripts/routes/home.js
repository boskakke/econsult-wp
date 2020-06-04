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

		tl.fromTo(tl_headerElements, {y: -20, opacity: 0}, {y: 0, opacity: 1, duration: .5, stagger: .05} )
		tl.fromTo(tl_title, {y: 50, opacity: 0}, {opacity: 1, y: 0, duration: 1,  ease: 'power4.out'}, '<.2')
		tl.fromTo(words, { opacity: 0, scaleY: 0 }, {opacity: 1, scaleY: 1, duration: .7, stagger: .1, ease: 'power4.out'}, '<-=1')
		tl.fromTo('.hero-fp__figure', {scale: 0, opacity: 0}, {scale: 1, opacity: 1, duration: 1, ease: 'elastic.out(1, 0.75)'}, '<.2' )
		tl.fromTo('.hero-fp__logo', {scale: 0}, {scale: 1, duration: 1, ease: 'elastic.out(1, 0.75)'}, '<.2' )
		tl.fromTo('.hero-fp__curtain', {scaleY: 1.1}, {scaleY: 1, duration: 2, ease: 'power4.out'},'<' )


	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
