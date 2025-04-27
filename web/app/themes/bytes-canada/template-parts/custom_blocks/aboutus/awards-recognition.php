<?php
$award_blocks = get_fields(); // get all fields in array
$main_title = $award_blocks['award_recognition_main_title'];
$award_images = $award_blocks['add_award_images'];
$left_images = $award_images['left_group']['select_left_images'];
$right_images = $award_images['right_group']['select_right_images'];
$default_image = get_field('select_image', 'options'); ?>
<!-- About Company Award Section Start -->
<section class="section-spacing-bg about-company-award-bg">
    <div class="container">
        <div class="about-company-award">
			<?php if(!empty($main_title)): ?>
            <div class="about-company-award-top">
                <h2 class="h4"><?php echo $main_title; ?></h2>
            </div>
			<?php endif; ?>
            <div class="about-company-award-bottom">
				<?php if(!empty($left_images)): ?>
                <div class="about-company-award-bottom-left">
                    <?php
                    foreach($left_images as $image):
                        $award_id = $image->ID;
                        if(has_post_thumbnail($award_id)):
                            $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($award_id), 'full');
                            $image_url = $image_data[0];
                        else:
                            $image_url = $default_image['url'];
                        endif;
                    	if(!empty($image_url)): ?>
                    		<img src="<?php echo $image_url; ?>" alt="<?php echo $image->post_title; ?>" height="215" width="198" />
                    <?php
                    	endif;
                	endforeach; ?>
                </div>
				<?php endif;
				if(!empty($right_images)): ?>
                <div class="about-company-award-bottom-right">
                    <?php
                    foreach($right_images as $image):
                        $award_id = $image->ID;
                        if(has_post_thumbnail($award_id)):
                            $image_data = wp_get_attachment_image_src(get_post_thumbnail_id($award_id), 'full');
                            $image_url = $image_data[0];
                        else:
                            $image_url = $default_image['url'];
                        endif;
                    	if(!empty($image_url)): ?>
                    		<img src="<?php echo $image_url; ?>" alt="<?php echo $image->post_title; ?>" height="145" width="392" />
                   	 <?php
                    	endif;
                	endforeach; ?>
                </div>
				<?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- About Company Award Section End -->
