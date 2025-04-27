<?php
$magento_development_blocks = get_fields(); // get all fields in array
// left group
$magento_development_image = $magento_development_blocks['magento_development_service']['left_group']['magento_development_image'];
// right group
$magento_development_title = $magento_development_blocks['magento_development_service']['right_group']['magento_development_title'];
$magento_development_content = $magento_development_blocks['magento_development_service']['right_group']['magento_development_content'];
$magento_development_pages = $magento_development_blocks['magento_development_service']['right_group']['magento_development_pages']; ?>
<!-- Magento Development Services Section Start -->
<section class="section-spacing-bg magento-services">
    <div class="container">
        <?php if(!empty($magento_development_image)): ?>
	        <div class="magento-services-left">
	            <img src="<?php echo $magento_development_image['url']; ?>" alt="<?php echo $magento_development_image['alt']; ?>" height="598" width="689" />
	        </div>
    	<?php endif; ?>
        <div class="magento-services-right">
          	<?php if(!empty($magento_development_title)): ?>
            	<h2 class="h3 magento-services-title"><?php echo $magento_development_title; ?></h2>
          	<?php endif;
          	if(!empty($magento_development_content)): ?>
            <p class="magento-services-data"><?php echo $magento_development_content; ?></p>
          	<?php endif;
          	if(!empty($magento_development_pages)): ?>
	            <ul class="magento-services-right-ul">
	          		<?php 
	          		foreach($magento_development_pages as $magento_pages): 
	          			$title = $magento_pages['magento_page']['title'] ? $magento_pages['magento_page']['title'] : "";
                        $url = $magento_pages['magento_page']['url'] ? $magento_pages['magento_page']['url'] : "";
                        $target = $magento_pages['magento_page']['target'] ? $magento_pages['magento_page']['target'] : "";
	          			if(!empty($title) && !empty($url)): ?>
		                	<li class="magento-services-list">
		                    	<a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="magento-services-list-link"><?php echo $title; ?></a>
		                	</li>
		            	<?php endif; ?>
	          		<?php endforeach; ?>
	            </ul>
          	<?php endif; ?>
        </div>
    </div>
</section>
<!-- Magento Development Services Section End -->
