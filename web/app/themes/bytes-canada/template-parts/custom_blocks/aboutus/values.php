<?php
$values_blocks = get_fields(); // get all fields in array
$main_title = $values_blocks['main_title'];
$values = $values_blocks['add_values'];
if(!empty($values)): ?>
<!-- About Company Value Section Start -->
<section class="section-spacing-bg web3-services">
    <div class="container">
       	<?php if(!empty($main_title)): ?>
        <div class="web3-services-top">
            <div class="web3-services-top-left">
                <h2 class="h4 web3-services-top-title"><?php echo $main_title; ?></h2>
            </div>
        </div>
       	<?php endif; ?>
        <div class="web3-services-bottom">
            <div class="web3-services-bottom-boxes">
                <?php
                foreach($values as $value):
                	$value_title = $value['value_title'];
					$value_content = $value['value_content'];
					if(!empty($value_title) && !empty($value_content)): ?>
	                <div class="web3-services-bottom-box">
	                    <h3 class="web3-services-bottom-box-title"><?php echo $value_title; ?></h3>
	                    <p class="web3-services-bottom-box-data"><?php echo $value_content; ?></p>
	                </div>
                <?php
                	endif;
            	endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- About Company Value Section End -->
<?php endif; ?>
