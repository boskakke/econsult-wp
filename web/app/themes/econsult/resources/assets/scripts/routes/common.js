import '@fancyapps/fancybox/dist/jquery.fancybox.js'

export default {
  init() {



    // JavaScript to be fired on all pages
    $('.menu-toggle').click(function(e){
       e.preventDefault();
       $('body').toggleClass('show-menu');
    });

    $('.main-tabs__item').click(function(e){
      e.preventDefault();
      var tab_id = $(this).attr('data-tab');

      $('.main-tabs__item').removeClass('active');
      $('.tabs-menu').removeClass('active');

      $(this).addClass('active');
      $('#'+tab_id).addClass('active');
    });


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
