<?php
$service_blocks = get_fields(); // get all fields in array
// banner information
$child_page_id = get_the_ID(); // Get the current child page ID
$parent_page_id = wp_get_post_parent_id($child_page_id); // Get the parent page ID
$page_links = "";

// Service page breadcrumb
$main_service_page = get_field('select_service_page', $child_page_id);
$child_service_page = get_field('select_child_service_page', $child_page_id);

if ($parent_page_id) {
    $parent_page_url = get_permalink($parent_page_id); // Get the URL of the parent page
    $parent_page_title = get_the_title($parent_page_id);
    $page_links .= '<a href="'.$parent_page_url.'">'.$parent_page_title. ' / ' . '</a>';
}
if ($child_page_id) {
    $post_type_name = "";
    $child_page_url = get_permalink($child_page_id); // Get the URL of the child page
    $child_page_title = get_the_title($child_page_id);
    if(!empty($main_service_page) && !empty($child_service_page)){
        $page_links .= '<a href="'.get_the_permalink($main_service_page->ID).'">'. $main_service_page->post_title. ' / ' . '</a><a href="'.get_the_permalink($child_service_page->ID).'">'. $child_service_page->post_title .' / ' . '</a> ' . $child_page_title;
    }
    else{
        if(!(get_post_type() == "page" || get_post_type() == "post" || get_post_type() == "attachments")){
            $post_type_name = get_post_type();
            $page_links .= '<a href="'.home_url($post_type_name).'">'.$post_type_name."<i>/</i> ".'</a> ' . $child_page_title;
        }
        else{
            $page_links .= $child_page_title;
        }
    }
}
$page_title = $service_blocks['page_title'];
if (empty($page_title)) {
    $page_title = get_the_title(get_the_id());
}
$banner_title = $service_blocks['banner_title'];
$banner_button = $service_blocks['banner_button'];
$banner_button_label = $banner_button['button_label'];
$banner_button_link = button_group($banner_button); ?>
<!-- innerpage-title Section Start -->
<section class="innerpage-title">
    <div class="innerpage-title-bg">
        <span class="shade1"></span>
        <span class="shade2"></span>
        <span class="shade3"></span>
    </div>
    <div class="service-banner-data">
        <div class="service-banner-data-p2">
            <?php if (!empty($page_links)): ?>
                <div class="bredcrum">
                    <div class="service-banner-data-p1">
                        <img class="service-zoom-shape" alt="service-zoom-shape" height="350" width="349"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/home-zoom-shape.svg">
                    </div>
                    <p>
                        <?php echo $page_links; ?>
                    </p>
                </div>
            <?php endif;
            if (!empty($banner_title)): ?>
                <h1 class="h1">
                    <?php echo $banner_title; ?>
                </h1>
            <?php endif;
            if (!empty($banner_button_label) && !empty($banner_button_link)): ?>
                <a <?php echo $banner_button_link; ?> class="btn"><?php echo $banner_button_label; ?></a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- innerpage-title Section End -->