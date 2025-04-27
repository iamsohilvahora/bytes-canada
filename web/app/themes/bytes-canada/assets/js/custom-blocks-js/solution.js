// video load after fullpage load JS
jQuery(function () {
    jQuery("video.connect-bg source").each(function () {
        var sourceFile = jQuery(this).attr("data-src");
        jQuery(this).attr("src", sourceFile);
        var video = this.parentElement;
        video.load();
    });
});