import gsap from 'gsap'
import vhCheck from 'vh-check'

export default {
	init() {
		// JavaScript to be fired on the home page

      let vheight = vhCheck();
      const tl_headerElement = document.querySelectorAll(' .header__logo, .top-menu li')
      const tl_words = document.querySelectorAll(' .jumbotron__rotator span')
      const tl_title = document.querySelectorAll(' .jumbotron__title')

      document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');

        window.addEventListener('resize', () => {
        vheight = vhCheck()
        document.documentElement.style.setProperty('--vh-offset', vheight.vh + 'px');
      })

        const tl = gsap.timeline()
        tl.fromTo(tl_headerElement, {y: -20, opacity: 0}, {y: 0, opacity: 1, duration: .5, stagger: .1} )
        tl.fromTo(tl_title, {y: -100, opacity: 0}, {opacity: 1, y: 0, duration: .7,  ease: 'power2.out'})
        tl.fromTo(tl_words, {y: -100, opacity: 0}, {opacity: 1, y: 0, duration: .7, stagger: .2, ease: 'power2.out'}, '<')


	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
