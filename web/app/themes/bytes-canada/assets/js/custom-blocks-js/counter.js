jQuery(document).on('ready', function(){
	// number count for stats, using jQuery animate
    jQuery('.counting').each(function () {
        var jQuerythis = jQuery(this),
            countTo = jQuerythis.attr('data-count');

        jQuery({ countNum: jQuerythis.text() }).animate({
            countNum: countTo
        },
        {
            duration: 3000,
            easing: 'linear',
            step: function () {
                jQuerythis.text(Math.floor(this.countNum));
            },
            complete: function () {
                jQuerythis.text(this.countNum);
            }
        });
    });
});