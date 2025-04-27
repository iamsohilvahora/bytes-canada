jQuery(document).on("ready", function () {
  var swiper = new Swiper(".client-long-testimonials", {
    pagination: {
      el: ".swiper-pagination",
      type: "custom",
      renderCustom: function (swiper, current, total) {
        return current + " of " + (total - 0);
      },
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
      loop: true,
	    effect: 'fade',
	    speed: 2000,
	    autoplay: {
	        delay: 8000,
	        disableOnInteraction: false,
	    },
  });
});

jQuery(document).bind(
  "webkitfullscreenchange mozfullscreenchange fullscreenchange",
  function (e) {
    var state =
      document.fullScreen ||
      document.mozFullScreen ||
      document.webkitIsFullScreen;
    var event = state ? "FullscreenOn" : "FullscreenOff";
    if (event === "FullscreenOff") {
      jQuery(".long-testimonials-fullvideo").attr("src", "");
    }
  }
);
jQuery(".test_vid_play").click(function () {
  var btnDataId = jQuery(this).attr("data-id");
  var iframeDataSrc = jQuery("#" + btnDataId).attr("data-src");
  jQuery("#" + btnDataId).attr("src", iframeDataSrc);
});

userAgent = window.navigator.userAgent;
if (/iP(hone|od|ad)/.test(userAgent)) {
  jQuery(".test_vid_play").click(function () {
    jQuery("html").addClass("overflowhide");
    jQuery("body").addClass("overflowhide");
    jQuery(".testimonials-section").addClass("iosiframe");
  });
  jQuery(".test_vid_close").click(function () {
    jQuery("html").removeClass("overflowhide");
    jQuery("body").removeClass("overflowhide");
    jQuery(".testimonials-section").removeClass("iosiframe");
    jQuery(".long-testimonials-fullvideo").attr("src", "");
  });
  jQuery(".about-company-video .vid__play").click(function () {
    jQuery(this).addClass("playremove");
  });
}
