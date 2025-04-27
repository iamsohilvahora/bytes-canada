<?php
$development_blocks = get_fields(); // get all fields in array
$development_title = $development_blocks['development_title'];
$development_content = $development_blocks['development_content'];
$development_image = $development_blocks['development_image'];
$development_button = $development_blocks['select_development_page'];
$development_button_label = $development_button['button_label'];
$development_button_link = button_group($development_button);
$development_services = $development_blocks['development_services']; ?>
<!-- web3 services Section Start -->
<section class="section-spacing-bg web3-services">
    <div class="container">
        <div class="web3-services-top">
            <div class="web3-services-top-left">
                <?php if(!empty($development_title)): ?>
                	<h2 class="h3 web3-services-top-title"><?php echo $development_title; ?></h2>
               	<?php endif;
               	if(!empty($development_content)): ?>
                	<p class="p web3-services-top-data"><?php echo $development_content; ?></p>
               	<?php endif;
               	if(!empty($development_button_label) && !empty($development_button_link)): ?>
                	<a <?php echo $development_button_link; ?> class="btn dark transparent x-small"><?php echo $development_button_label; ?></a>
               	<?php endif; ?>
            </div>
            <?php if(!empty($development_image)): ?>
            <div class="web3-services-top-right">
                <img src="<?php echo $development_image['url']; ?>" alt="<?php echo $development_image['alt']; ?>" height="265" width="265" />
            </div>
            <?php endif; ?>
        </div>
        <?php if(!empty($development_services)): ?>
        <div class="web3-services-bottom">
            <div class="web3-services-bottom-boxes">
                <?php
                foreach($development_services as $service):
                	$service_title = $service['development_service_title'];
					$service_content = $service['development_service_content'];
                	if(!empty($service_title) && !empty($service_content)): ?>
                    	<div class="web3-services-bottom-box">
                        	<h3 class="web3-services-bottom-box-title"><?php echo $service_title; ?></h3>
                        	<p class="web3-services-bottom-box-data"><?php echo $service_content; ?></p>
                    	</div>
                <?php
                	endif; 
            	endforeach; ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>
<!-- web3 services Section End -->