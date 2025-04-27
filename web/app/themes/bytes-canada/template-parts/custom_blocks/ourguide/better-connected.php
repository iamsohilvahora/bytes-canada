<?php
$better_connected_blocks = get_fields(); // get all fields in array
// left group
$better_connected_title = $better_connected_blocks['better_connected']['left_group']['better_connected_title'];
// right group
$newsletter_title = $better_connected_blocks['better_connected']['right_group']['newsletter_title'];
$newsletter_shortcode = $better_connected_blocks['better_connected']['right_group']['newsletter_shortcode'];
if(!empty($newsletter_shortcode)): ?>
<!-- Our Guide Newsletter Section Start -->
<section class="section-spacing-bg our-guide-newsletter-outbox">
    <div class="container">
        <div class="our-guide-newsletter">
            <?php if(!empty($better_connected_title)): ?>
	            <div class="our-guide-newsletter-left">
	                <h2 class="h3"><?php echo $better_connected_title; ?></h2>
	            </div>
        	<?php endif; ?> 
            <div class="our-guide-newsletter-right">
                <div class="our-guide-newsletter-right-s1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/guide-newsletter.svg" alt="guide-newsletter" height="121" width="126" />
                </div>
                <div class="our-guide-newsletter-right-s2">
            		<?php if(!empty($newsletter_title)): ?>
	                    <div class="our-guide-newsletter-right-s2-p1">
	                        <h3><?php echo $newsletter_title; ?></h3>
	                    </div>
        			<?php endif; ?>
                    <div class="our-guide-newsletter-right-s2-p2">
                        <?php echo do_shortcode($newsletter_shortcode); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Our Guide Newsletter Section End -->
<?php endif; ?>
