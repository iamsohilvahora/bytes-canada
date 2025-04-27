jQuery(document).ready(function(){
	var swiper = new Swiper('.swiper--top', {
        spaceBetween: 0,
        centeredSlides: true,
        speed: 50000,
        autoplay: {
            delay: 1,
        },
        loop: true,
        slidesPerView: 'auto',
        allowTouchMove: false,
    });
});