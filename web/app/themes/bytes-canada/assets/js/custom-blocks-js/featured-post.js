jQuery(document).ready(function(){
	var casestudySwiper = new Swiper(".case-studySwiper", {
	    spaceBetween: 30,
	    centeredSlides: true,
	    effect: 'fade',
	    speed: 2000,
	    autoplay: {
	        delay: 3000,
	        disableOnInteraction: false,
	    },
	    pagination: {
	        el: ".swiper-pagination",
	        clickable: true,
	    },
	    navigation: {
	        nextEl: ".swiper-button-next",
	        prevEl: ".swiper-button-prev",
	    },
	});
});