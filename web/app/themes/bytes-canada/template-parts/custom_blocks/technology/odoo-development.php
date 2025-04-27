<?php
$odoo_development_blocks = get_fields(); // get all fields in array
// left group
$odoo_development_title = $odoo_development_blocks['odoo_development_agency']['left_group']['odoo_development_title'];
// right group
$oddo_development_content = $odoo_development_blocks['odoo_development_agency']['right_group']['oddo_development_content'];
$odoo_development_pages = $odoo_development_blocks['odoo_development_agency']['right_group']['odoo_development_pages']; ?>
<!-- Odoo Development Section Start -->
<section class="section-spacing odoo-development-box">
    <div class="container">
        <div class="odoo-development">
            <?php if(!empty($odoo_development_title)): ?>
	            <div class="odoo-development-left">
	                <h2 class="h3 odoo-development-title"><?php echo $odoo_development_title; ?></h2>
	            </div>
            <?php endif; ?>

            <div class="odoo-development-right">
                <?php if(!empty($oddo_development_content)): ?>
                	<p class="odoo-development-data"><?php echo $oddo_development_content; ?></p>
                <?php endif;
                if(!empty($odoo_development_pages)): ?>
                <div class="odoo-development-lists">
                   	<?php 
                    foreach($odoo_development_pages as $odoo_pages):
                        $title = $odoo_pages['odoo_pages']['title'] ? $odoo_pages['odoo_pages']['title'] : "";
                        $url = $odoo_pages['odoo_pages']['url'] ? $odoo_pages['odoo_pages']['url'] : "";
                        $target = $odoo_pages['odoo_pages']['target'] ? $odoo_pages['odoo_pages']['target'] : "";
                        if(!empty($title) && !empty($url)): ?>
                    	   <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="odoo-development-links"><?php echo $title; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- Odoo Development Section End -->
