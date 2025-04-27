<?php
$home_blocks = get_fields(); // get all fields in array
// banner information
$banner_title = $home_blocks['banner_title'];
$banner_description = $home_blocks['banner_description'];
// banner button
$banner_button = $home_blocks['banner_button'];
$banner_button_label = $banner_button['button_label'];
$banner_button_link = button_group($banner_button);
// banner video
$banner_video = $home_blocks['banner_video'];
$video_image = $banner_video['video_image'];
$default_image = get_field('select_image', 'options');
if (!empty($video_image)) {
    $video_image = $video_image['url'];
} else {
    $video_image = $default_image['url'];
}
$video_type = $banner_video['video_type'];
if ($video_type == "internal_link") {
    $video_url = $banner_video['internal_video']['url'];
} else {
    $video_url = $banner_video['external_video'];
}
$video_button_text = $home_blocks['video_button_text']; ?>
<!-- Banner Video Section Start -->
<section class="homepage-banner mb-80">
    <div class="homepage-banner-video">
        <div class="homepage-banner-video-overlay"></div>
        <?php if (!empty($video_url)): ?>
            <video width="100%" autoplay muted loop playsinline class="connect-bg" poster="<?php echo $video_image; ?>">
                <source src="<?php echo $video_url; ?>" type="video/mp4">
                <source src="<?php echo $video_url; ?>" type="video/ogg">
            </video>
        <?php endif; ?>
        <div class="homepage-banner-data">
            <div class="homepage-banner-data-p2">
                <?php if (!empty($banner_description)): ?>
                    <div class="banner-tagline"><div class="homepage-banner-data-p1">
                        <img class="home-zoom-shape" alt="home-zoom-shape" height="350" width="349"
                            src="<?php echo get_template_directory_uri(); ?>/assets/images/home-zoom-shape.svg" />
                    </div><?php echo $banner_description; ?></div>
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
    </div>
</section>
<!-- Banner Video Section End -->