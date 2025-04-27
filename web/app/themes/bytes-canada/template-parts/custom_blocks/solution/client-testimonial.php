<?php
$testimonial_blocks = get_fields(); // get all fields in array
// left group
$testimonial_title = $testimonial_blocks['client_testimonial']['left_group']['client_testimonial_title'];
// right group
$default_image = get_field('select_image', 'options');
$testimonials = $testimonial_blocks['client_testimonial']['right_group']['choose_testimonial'];
if(!empty($testimonials)): ?>
<!-- testimonials Section Start -->
<section class="section-spacing testimonials-section">
<span class="test_vid_close" style="display:none;">
<svg style="display:none;" viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path fill="#ffffff" d="M195.2 195.2a64 64 0 0 1 90.496 0L512 421.504 738.304 195.2a64 64 0 0 1 90.496 90.496L602.496 512 828.8 738.304a64 64 0 0 1-90.496 90.496L512 602.496 285.696 828.8a64 64 0 0 1-90.496-90.496L421.504 512 195.2 285.696a64 64 0 0 1 0-90.496z"></path></g></svg>
</span>
    <div class="container">
        <div class="long-testimonials">
            <?php if(!empty($testimonial_title)): ?>
	            <div class="long-testimonials-title">
	                <h2 class="h3"><?php echo $testimonial_title; ?></h2>
	            </div>
        	<?php endif; ?>
            <div class="long-testimonials-slides">
                <div class="swiper client-long-testimonials">
                    <div class="swiper-wrapper">
                    	<?php
                        $i = 1;
                        foreach ($testimonials as $testimonial_post):
                            $testimonial_id = $testimonial_post->ID;
                            $title = $testimonial_post->post_title;
                            if(empty($title)){
                                $title = get_field('name', $testimonial_id);
                            }
                            $designation = get_field('designation', $testimonial_id);
                            $organization = get_field('organization', $testimonial_id);
                            $testimonials_text = get_field('testimonials_text', $testimonial_id); 
                            $select_video = get_field('select_video', $testimonial_id);
                            $client_image = get_field('image_jpeg_png', $testimonial_id);
                            if(!empty($client_image)){
                                $client_image_url = $client_image['url'];
                                $client_alt_txt = $client_image['alt'];
                            } 
                            else{
                                $client_image_url = $default_image['url'];
                                $client_alt_txt = $default_image['alt'];
                            }
                            $video_type = $select_video['video_type'];
                            if($video_type == "internal_link"){
                                $video_url = $select_video['internal_video']['url'];
                            }
                            else{
                                $video_url = $select_video['external_video'];
                            } ?>
                            <div class="swiper-slide">
                                <div class="client-long-testimonials-slide-box">
                                    <?php if(!empty($testimonials_text)): ?>
                                        <h3><?php echo $testimonials_text; ?></h3>
                                    <?php endif; ?>
                                    <div class="long-testimonials-video">
                                        <div class="long-testimonials-video-p1">
                                            <?php if(!empty($client_image_url)): ?>
                                            <div class="long-testimonials-video-p1-s1">
                                                <img src="<?php echo $client_image_url; ?>" alt="<?php echo $client_alt_txt; ?>" height="64" width="64" />
                                            </div>
                                            <?php endif; ?>
                                            <div class="long-testimonials-video-p1-s2">
                                                <?php if(!empty($title)): ?>
                                                    <h4><?php echo $title; ?></h4>
                                                <?php endif;
                                                if(!empty($designation)): ?>
                                                    <h5><?php echo $designation; ?></h5>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        
                                        <div class="long-testimonials-video-p2">
                                            <div class="long-testimonials-video-p2-s1">
                                            <?php if (!empty($video_url)): ?>
                                                <button class="iframe__play test_vid_play" data-id="test-vid-<?php echo $i; ?>" aria-label="Play" onclick="var el = document.getElementById('test-vid-<?php echo $i; ?>'); el.requestFullscreen();">
                                                    <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
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
                                                    <span>Play Video</span>
                                                </button>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (!empty($video_url)): ?>
                                    <div class="ios-video-play">
                                        <iframe src="" data-src="<?php echo $video_url; ?>?autoplay=1&rel=0" frameborder="0" allowfullscreen width="100%" playsinline title="Client-testimonials" class="connect-bg long-testimonials-fullvideo" id="test-vid-<?php echo $i; ?>"></iframe>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div><?php 
                            $i++;
                        endforeach; ?>
                    </div>
                    <div class="long-testimonials-arrows">
                        <div class="swiper-pagination"></div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonials Section End -->
<?php endif; ?>
