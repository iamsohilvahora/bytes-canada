jQuery(function () {
    // Quick Links Script
    jQuery('.FAQ-Section-data-list').click(function () {
        jQuery(this).toggleClass('active').siblings().removeClass('active');
        jQuery(this).find('p').slideToggle();
        jQuery(this).siblings().find('p').slideUp();
    });
});