<?php
// banner section
$banner_title = get_sub_field('banner_title'); // get banner title
// banner button
$banner_button = get_sub_field('banner_button');
$banner_button_label = $banner_button['button_label'];
$banner_button_link = button_group($banner_button); 
$casestudy_page_title = get_field('casestudy_page_title', 'options'); // casestudy page title
$casestudy_page_link = get_field('casestudy_page_link', 'options'); // casestudy page link ?> 
<!-- Banner Section Start -->
<section class="innerpage-title">
    <div class="innerpage-title-bg">
        <span class="shade1"></span>
        <span class="shade2"></span>
        <span class="shade3"></span>
    </div>
    <div class="service-banner-data">
        <div class="service-banner-data-p2">
            <?php if (!empty($casestudy_page_title) && !empty($casestudy_page_link)): ?>
                <div class="bredcrum">
                    <div class="service-banner-data-p1">
                        <img class="service-zoom-shape" alt="service-zoom-shape" height="350" width="349"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/home-zoom-shape.svg">
                    </div>
                    <p>
                        <a href="<?php echo $casestudy_page_link; ?>" aria-label="<?php echo $casestudy_page_title; ?>"><?php echo $casestudy_page_title; ?></a>
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
<!-- Banner Section End -->
