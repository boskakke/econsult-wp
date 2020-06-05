import gsap from 'gsap'
import vhCheck from 'vh-check'

export default {
	init() {
		// JavaScript to be fired on the home page
		let vheight = vhCheck();
		document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');

		window.addEventListener('resize', () => {
			vheight = vhCheck()
			document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');
		})



		const tl_headerElements = document.querySelectorAll(' .header__logo, .top-menu')
		const tl_title = document.querySelectorAll(' .hero-fp__trumpet')
		const words = document.querySelectorAll(' .hero-fp__words span')

		// const wordsTl = gsap.timeline({repeat: 0})
		const tl = gsap.timeline()


		// for (let i = 0; i < words.length; i++) {
		// 	wordsTl.fromTo(words[i],
		// 		{x: -100, opacity:0},
		// 		{duration: .5, autoAlpha:1, x:0, stagger: .2, ease:'elastic.out(1.75, 0.5)'})
		// }


		tl
		.fromTo(tl_headerElements, {y: -20, opacity: 0}, {y: 0, opacity: 1, duration: .5, stagger: .02})
		.fromTo('.hero-fp__figure', {scale: 0, opacity: 0}, {scale: 1, opacity: 1, duration: 1, ease: 'elastic.out(1, 0.75)'} , '<.2')
		.fromTo('.hero-fp__logo', {scale: 0}, {scale: 1, duration: 1, ease: 'elastic.out(1, 0.75)'}, '<.2' )
		.fromTo(tl_title, {y: -30, opacity: 0}, {opacity: 1, y: 0, duration: 1,  ease: 'power4.out'}, '<.2')
		.fromTo(words, { opacity: 0, y: -30 }, {opacity: 1, y: 0, duration: 1, stagger: .2, ease: 'elastic.out(1.75, 0.5)'}, '<.2')
		.fromTo('.hero-fp__curtain', {scaleY: 1.1}, {scaleY: 1, duration: 2, ease: 'power4.out'},'<-1' )


	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
