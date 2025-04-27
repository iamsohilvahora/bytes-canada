jQuery(function () {
    // Footer Address Slider Script
    var simplifiedsteps = new Swiper(".simplified-steps", {
        slidesPerView: 1,
        spaceBetween: 0,
        loop: true,
        speed: 4000,
        simulateTouch: true,
        autoplay:
        {
            delay: 500,
            disableOnInteraction: false,
        },
        breakpoints: {
            768: {
                slidesPerView: 4,
            },
        },
    });
});