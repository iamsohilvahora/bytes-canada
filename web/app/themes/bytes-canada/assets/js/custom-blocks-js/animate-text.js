jQuery(document).ready(function(){
	let SwiperBottom = new Swiper('.swiper--bottom', {
	    spaceBetween: 0,
	    centeredSlides: true,
	    speed: 20000,
	    autoplay: {
	        delay: 1,
	    },
	    loop: true,
	    slidesPerView: 'auto',
	    allowTouchMove: false,
	    disableOnInteraction: true
	});
});	