<?php
$why_choose_us_blocks = get_fields(); // get all fields in array
// Why choose us information
$title = $why_choose_us_blocks['why_choose_us_title'];
$image = $why_choose_us_blocks['Why_choose_us_image'];
$steps = $why_choose_us_blocks['add_steps'];
if(!empty($steps)): ?>
<!-- makeusbest Section Start -->
<section class="section-spacing makeusbest-out">
    <div class="container">
    	<?php if(!empty($title)): ?>
        	<h2 class="h3"><?php echo $title; ?></h2>
    	<?php endif; ?>
        <div class="makeusbest">
    		<?php if(!empty($image)): ?>
	            <div class="makeusbest-left">
	                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" height="412" width="184">
	            </div>
    		<?php endif; ?>
            <div class="makeusbest-right">
                <div class="makeusbest-boxes">
                    <?php 
                    	foreach ($steps as $step):
                    		$step_title = $step['step_title'];
							$step_desc = $step['step_description'];
							if(!empty($step_title) && !empty($step_desc)): ?>
		                    <div class="makeusbest-box">
		                        <span></span>
		                        <h3 class="h5"><?php echo $step_title; ?></h3>
		                        <p><?php echo $step_desc; ?></p>
		                    </div>
                    <?php 
                    		endif;
                		endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- makeusbest Section End -->
<?php endif; ?>
