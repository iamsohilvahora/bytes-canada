jQuery(document).ready(function(){
    jQuery('.our-guide-content-blocks-right-contents a[href^="#"]').on('click',function (e) {
        var target = this.hash,
            $target = jQuery(target);
      
        jQuery('html, body').stop().animate({
          'scrollTop': $target.offset().top-90
        }, 900, 'swing', function () {
          window.location.hash = target;
        });
      });
});

