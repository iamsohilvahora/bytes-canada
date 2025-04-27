<?php
$video_blocks = get_fields(); // get all fields in array
$banner_video = $video_blocks['select_video'];
$video_image = $banner_video['video_image'];
if (!empty($video_image)) {
    $video_image = $video_image['url'];
} else {
    $default_image = get_field('select_image', 'options'); // get default image
    $video_image = $default_image['url'];
}
$video_type = $banner_video['video_type'];
if ($video_type == "internal_link") {
    $video_url = $banner_video['internal_video']['url'];
} else {
    $video_url = $banner_video['external_video'];
}
if (!empty($video_url)): ?>
    <!-- About Company video Section Start -->
    <section class="section-spacing">
        <div class="about-company-video">
        <?php if ($video_type == "internal_link") { ?>
            <video width="100%" muted loop class="connect-bg" poster="<?php echo $video_image; ?>">
                <source src="<?php echo $video_url; ?>" type="video/mp4">
                <source src="<?php echo $video_url; ?>" type="video/ogg">
            </video>
            <button class="vid__play" aria-label="Play">
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_266_184)" id="vid_h_play">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M16 30.4C23.9529 30.4 30.4 23.9531 30.4 16C30.4 8.04711 23.9531 1.59997 16 1.59997C8.04711 1.59997 1.59997 8.04711 1.59997 16C1.59997 23.9529 8.04711 30.4 16 30.4ZM16 32C24.8365 32 32 24.8365 32 16C32 7.16338 24.8365 0 16 0C7.16338 0 0 7.16338 0 16C0 24.8365 7.16338 32 16 32Z"
                            fill="#F3F3F3" />
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M20.1576 16L12.7998 11.0949V20.9052L20.1576 16ZM21.6441 15.0681C22.3091 15.5115 22.3091 16.4886 21.6441 16.932L12.941 22.7342C12.1967 23.2304 11.1997 22.6967 11.1997 21.8021V10.198C11.1997 9.30346 12.1967 8.76992 12.941 9.26615L21.6441 15.0681Z"
                            fill="#F3F3F3" />
                    </g>
                    <defs>
                        <clipPath id="clip0_266_184">
                            <rect width="32" height="32" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        <?php }else{ ?>
            <iframe width="1630" class="connect-bg case-videos-box-video" height="917" src="<?php echo $video_url; ?>?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; autostop; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <?php } ?> 
            </div>
    </section>
    <!-- About Company video Section End -->
<?php endif; ?>