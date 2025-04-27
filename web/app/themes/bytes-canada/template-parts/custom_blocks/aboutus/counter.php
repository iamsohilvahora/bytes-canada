<?php
$counter_blocks = get_fields(); // get all fields in array
// left group
$main_title = $counter_blocks['counter_section']['left_group']['main_title'];
// right group
$counter_details = $counter_blocks['counter_section']['right_group']['counter_details']; ?>
<!-- About Company Counter Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="about-company-counter">
            <?php if(!empty($main_title)): ?>
            <div class="about-company-counter-left">
                <h2 class="h3"><?php echo $main_title; ?></h2>
            </div>
            <?php endif;
            if(!empty($counter_details)): ?>
            <div class="about-company-counter-right">
                <div class="about-company-counter-boxes">
                    <?php 
                    foreach($counter_details as $counter): 
                    	$main_text = $counter['main_text'];
						$sub_text = $counter['sub_text'];
						if(!empty($main_text) && !empty($sub_text)): ?>
	                    <div class="about-company-counter-box">
	                        <h2 class="counting" data-count="<?php echo $main_text; ?>"><?php echo $main_text; ?><span>+</span></h2>
	                        <h3><?php echo $sub_text; ?></h3>
	                    </div>
                	<?php
                		endif;
                	endforeach; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- About Company Counter Section End -->
