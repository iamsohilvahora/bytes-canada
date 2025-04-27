setTimeout(()=> {
jQuery(document).ready(function(){
    function arrow() {
        var totalWidth = 0;
        jQuery('.cata-sub-nav ul li').each(function () {
            totalWidth += jQuery(this).outerWidth(true);
        });
        var contentWidth = 0;
        jQuery('.cata-sub-nav').each(function () {
            contentWidth += jQuery(this).outerWidth(true);
        });
        if (totalWidth < contentWidth) {
            jQuery(".nav-next").hide();
        } else {
            jQuery(".nav-next").show();
        }
    }
    arrow();
    jQuery(window).resize(function () {
        arrow();
    });
    jQuery(".cata-sub-nav").on('scroll', function () {
        $val = jQuery(this).scrollLeft();
        if (jQuery(this).scrollLeft() + jQuery(this).innerWidth() >= jQuery(this)[0].scrollWidth) {
            jQuery(".nav-next").hide();
        } else {
            jQuery(".nav-next").show();
        }
        if ($val == 0) {
            jQuery(".nav-prev").hide();
        } else {
            jQuery(".nav-prev").show();
        }
    });
    jQuery(".nav-next").on("click", function () {
        jQuery(".cata-sub-nav").animate({
            scrollLeft: '+=150'
        }, 200);

    });
    jQuery(".nav-prev").on("click", function () {
        jQuery(".cata-sub-nav").animate({
            scrollLeft: '-=150'
        }, 200);
    });

    // Load resources post from AJAX
    let post_admin_URL = ajaxurl;
    function resources_load_all_posts(page, cat){
        let per_page = jQuery('div.resources_universal_container').attr('data-per_page');
        if(cat !== ""){
            var data = {
                page: page,
                action: "resources-pagination-load-posts",
                size: cat,
                category_post : 'category_post',
                per_page : per_page,
            };
        }else{
            var data = {
                page: page,
                action: "resources-pagination-load-posts",
                per_page : per_page,
            };
        }
        jQuery.post(post_admin_URL, data, function(response){
            jQuery(".resources_universal_container").html('').append(response);
        });
    }

    // Load Resources on click of page number button
    jQuery(document).on('click', '.resources_universal_container .resources-universal-pagination li.active', function(){
        var page = jQuery(this).attr('p');
        let arr_size = [];
        let guide_id = jQuery('li.active .filter-size').attr('data-id');
        arr_size.push(guide_id);
        let size = arr_size.join(",");
        if(size != ""){
            resources_load_all_posts(page, size);
        }
        else{
            resources_load_all_posts(page, '');
        }
    });

    // Load Resources on click of category
    jQuery(document).on('click','.filter-size',function(e){
        e.preventDefault();
        page = 1;
        let arr_size = [];
        let guide_id = jQuery(this).attr('data-id');
        arr_size.push(guide_id);
        let size = arr_size.join(",");
        resources_load_all_posts(page, size);
    });

    // Reset category and load Resouces post on click of All button
    jQuery("#resetCat").on('click', function(){
        let arr_size = [];
        let guide_id = jQuery(this).attr('data-id');
        arr_size.push(guide_id);
        let size = arr_size.join(",");
        resources_load_all_posts(1, size);
    });

    // add active class onclick of li tag
    jQuery(".cata-sub-nav li").on('click', function(){
        jQuery(".cata-sub-nav li").removeClass('active');
        jQuery(this).addClass('active');
    });
});
}
,200);
