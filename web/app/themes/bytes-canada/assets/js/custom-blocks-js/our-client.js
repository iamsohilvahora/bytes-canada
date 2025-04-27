jQuery(document).ready(function(){
	var clientlogoSwiper = new Swiper(".clientlogo-Swiper", {
		speed: 1000,
		simulateTouch: true,
	    loop: false,
	    slidesPerView: 2,
		autoplay: {
	        delay: 3000,
			disableOnInteraction: false,
	    },
	    grid: {
	        rows: 4,
	    },
	    breakpoints: {
	        768: {
	            slidesPerView: 4,
				simulateTouch: true,
	    		loop: false,
	        }
	    },
	});
});	