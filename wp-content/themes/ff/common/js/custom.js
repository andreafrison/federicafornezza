/**
 * JS Framework - 5.3.3
 * 
 * Newwave srl
 * https://www.newwwave-media.it/
 */

//*************************
// LOADING
//*************************
function loading() {
    jQuery('#loader').addClass('nascosto');
}


//*************************
// START
//*************************
function start() {
    loading();
    lazyload();
    wow();
    fancyPop();
    menu();
}


//***********************
// LAZYLOAD
//*************************
function lazyload() {
	jQuery('.lazy').Lazy({
		scrollDirection: 'vertical',
	    effect: 'fadeIn',
	    effectTime: 750,
	    visibleOnly: true
	    //delay: 3000
	    //removeAttribute: false
    })
}


//***********************
// WOW
//*************************
function wow() {
    wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 50, // default
        mobile: true, // default
        live: true // default
    })
    wow.init();
}


//*************************
// MENU
//*************************
function menu() {
    jQuery('.hamburger, #drawer_bg').click(function () {
        jQuery('body').toggleClass('drawer-in');
        return false;
    });
    
    var header = document.querySelector("#header");
    var headroom  = new Headroom(header);
    headroom.init();
}

//*************************
// SMOOTH SCROLL
//*************************
function smooth_scroll() {
    jQuery('.scroll').click(function () {
        jQuery('html, body').animate({
            scrollTop: jQuery(jQuery.attr(this, 'href')).offset().top
        }, 600);
        return false;
    });
}


//*************************
// FANCYBOX
//*************************
function fancyPop() {

	jQuery(".gallery-link").fancybox({
        baseClass: 'fancybox-nw',
        hash: false,
        loop: true,
        gutter: 50,
        buttons: [
            //"zoom",
            //"share",
            //"slideShow",
            //"fullScreen",
            //"download",
            //"thumbs",
            "close"
        ],
        backFocus: false,
        protect: true,
    });

//    jQuery("[data-fancybox]").fancybox({
//        // Options will go here
//    });

}


//*************************
// SWIPER
//*************************
function mySwiper() {
    var mySwiper = new Swiper('.swiper', {
        loop: true,
        speed: 1000,
        spaceBetween: 0,
        slidesPerView: 1,
        grabCursor: true,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        autoplay: {
             delay: 5000,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    });
}


//*************************
// GSAP
//*************************
gsap.registerPlugin(ScrollTrigger);

window.addEventListener('load', function(){
    init();
});


function init() {
    //PARALLAX BG
    gsap.utils.toArray(".figure-bg .img-cover").forEach((el, i) => {
        gsap.set(el, {
            scale: 1.20,
            yPercent: -20,
        });

        gsap.to(el, {
            yPercent: 20,
            ease: "none",
            scrollTrigger: {
                trigger: el,
                start: "top bottom",
                end: "bottom top",
                scrub: true
            }
        });
    });    
}