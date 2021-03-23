import vhCheck from 'vh-check'

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




		




	},
	finalize() {
		// JavaScript to be fired on the home page, after the init JS
	},
};
