
import gsap from 'gsap'

export default {
	init() {

		const tl_nav = gsap.timeline({paused: true, ease: 'power4.out'})
		const mobileNav =  document.querySelector('.mobile-nav')
		const mobileNavCurtain =  document.querySelector('.mobile-nav__curtain')
		const mobileNavLogo =  document.querySelector('.mobile-nav__logo')
		const mobileNavLi = document.querySelectorAll('.mobile-nav li')

		tl_nav
		.set(mobileNav, {opacity: 1, pointerEvents: 'auto'})
		.fromTo(mobileNavCurtain, {x: '100%'}, {x: 0})
		.fromTo(mobileNav, {x: '100%'}, {x: 0}, '<.2')
		.fromTo(mobileNavLogo, {opacity: 0}, {opacity: 1}, '<.2')
		.fromTo(mobileNavLi, {opacity: 0,  x: 20}, {opacity: 1, stagger: .05, x: 0}, '<.2')


		const body = document.querySelector('body')


		const hamburger = document.querySelector('.hamburger')
		if(hamburger) {
			hamburger.addEventListener('click', function(e) {
				e.preventDefault();
				let aria = this.getAttribute('aria-expanded')
				this.classList.toggle('is-active');
				if(aria === 'false') {
					this.setAttribute('aria-expanded', 'true')
				tl_nav.timeScale(1)
				tl_nav.play(0)
			body.classList.add('show-menu')
		} else {
			this.setAttribute('aria-expanded', 'false')
				tl_nav.timeScale(2)
				tl_nav.reverse()
			body.classList.remove('show-menu')
		}
	});

	// hamburger
	const controlit = document.querySelector('.hamburgersvg');
	const menuToggle = gsap.timeline({paused:true, reversed:true});

	menuToggle
	.to(' .top', .2, {y:'-9px', transformOrigin: '50% 50%'}, 'burg')
	.to(' .bot', .2, {y:'9px', transformOrigin: '50% 50%'}, 'burg')
	.add('rotate')
	.to(' .top', .2, {y:'5'}, 'rotate')
	.to(' .bot', .2, {y:'-5'}, 'rotate')
	.to(' .top', .2, {rotationZ:45, transformOrigin: '50% 50%'}, 'rotate')
	.to(' .bot', .2, {rotationZ:-45, transformOrigin: '50% 50%'}, 'rotate')

	controlit.addEventListener('click', (e) => {
		e.preventDefault()
		menuToggle.reversed() ? menuToggle.restart() : menuToggle.reverse();
	});
}


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
