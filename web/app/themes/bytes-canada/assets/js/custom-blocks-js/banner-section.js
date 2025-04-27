// video load after fullpage load JS
jQuery(function () {
    jQuery("video.connect-bg source").each(function () {
        var sourceFile = jQuery(this).attr("data-src");
        jQuery(this).attr("src", sourceFile);
        var video = this.parentElement;
        video.load();
    });
});
// Banner Word animation JS
var counter = 0;
setInterval(function () {
    var c = counter % jQuery('.homepage-banner-data-p2 h1 span').length;
    jQuery('.homepage-banner-data-p2 h1 span').removeClass('active');
    jQuery('.homepage-banner-data-p2 h1 span').eq(c).addClass('active');
    ++counter
}, 3000);