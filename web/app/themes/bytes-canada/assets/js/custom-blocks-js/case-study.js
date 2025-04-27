jQuery(document).ready(function(){
    var page = 1;
    // Load case-study post on click of load more button
    jQuery('.load-more-btn').on('click' , function(){
               postListFilter(this);
    });
    var pageNumber = 1;
    function postListFilter(obj){
        let loadMoreButton = jQuery('.pagination');
        let loadMoreText = jQuery(obj).text();
        let post_per_page = jQuery(obj).attr('data-ppp-post');
        let offset = jQuery(obj).attr('data-offset-post');
        let post_admin_URL = ajaxurl;
        if(loadMoreText != ''){
            pageNumber++;
        }
        else{
            pageNumber = 1;
        }
        jQuery('.load-more-btn').text('Loading'); // add loading text
        jQuery.ajax({
            url: post_admin_URL,
            type: "POST",
            data: { 
                action : 'get_more_posts', 
                post_per_page : post_per_page,
                pageNumber : pageNumber,
                offset : offset,
                load_more_post : "load_more_post",
            },
            dataType: "json",
            success: function(data){
                jQuery('.load-more-btn').text('Load More'); // add load more text
                if(loadMoreText != ''){
                    jQuery(".main").append(data.content);
                    if(data.page >= data.max_pages){
                        loadMoreButton.hide(); // if last page, HIDE the button
                    } 
                }
                else{
                    jQuery(".main").append(data.content);
                    if(data.page >= data.max_pages){
                        loadMoreButton.hide(); // if last page, HIDE the button
                    } 
                    else{
                        loadMoreButton.show();
                    } 
                }
            },
            error: function(errorThrown){
                console.log(errorThrown);
            }
        });
        return false;　
    }
});