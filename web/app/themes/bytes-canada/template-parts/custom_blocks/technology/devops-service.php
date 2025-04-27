<?php
$devops_blocks = get_fields(); // get all fields in array
// left group
$devops_service_title = $devops_blocks['devops_service_and_solution']['left_group']['devops_service_title'];
$devops_service_content = $devops_blocks['devops_service_and_solution']['left_group']['devops_service_content'];
$devops_service_button = $devops_blocks['devops_service_and_solution']['left_group']['devops_service_button'];
$devops_service_button_label = $devops_service_button['button_label'];
$devops_service_button_link = button_group($devops_service_button);
// right group
$devops_page_title = $devops_blocks['devops_service_and_solution']['right_group']['devops_page_title'];
$devops_pages = $devops_blocks['devops_service_and_solution']['right_group']['select_devops_pages']; ?>
<!-- Devops Services Section End -->
<section class="section-spacing">
    <div class="container">
        <div class="devops-services">
            <div class="devops-services-left">
                <?php if(!empty($devops_service_title)): ?>
                	<h2 class="devops-services-left-title h3"><?php echo $devops_service_title; ?></h2>
                <?php endif;
                if(!empty($devops_service_content)): ?>
                	<p class="devops-services-left-data"><?php echo $devops_service_content; ?></p>
                <?php endif;
                if(!empty($devops_service_button_label) && !empty($devops_service_button_link)): ?>
                	<a <?php echo $devops_service_button_link; ?>class="devops-services-left-data-link btn dark transparent x-small"><?php echo $devops_service_button_label; ?></a>
                <?php endif; ?>
            </div>
            <?php if(!empty($devops_pages)): ?>
            <div class="devops-services-right">  
            	<?php if(!empty($devops_page_title)): ?>
                	<h3 class="devops-services-right-title"><?php echo $devops_page_title; ?></h3>
                <?php endif; ?>
                <ul>
                	<?php
                	$i = 1;
                	foreach($devops_pages as $devops_page): 
                        $title = $devops_page['devops_page']['title'] ? $devops_page['devops_page']['title'] : "";
                        $url = $devops_page['devops_page']['url'] ? $devops_page['devops_page']['url'] : "";
                        $target = $devops_page['devops_page']['target'] ? $devops_page['devops_page']['target'] : "";
                        if(!empty($title) && !empty($url)): ?>
                            <li class="devops-services-list">
                                <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="devops-services-list-link h6">
                                    <span class="devops-services-list-link-number"><?php echo sprintf('%02d', $i++); ?></span><?php echo $title; ?>
                                </a>
                            </li>
                        <?php endif; ?>
                	<?php endforeach; ?>
                </ul>
            </div>
        	<?php endif; ?>
        </div>
    </div>
</section>
<!-- Devops Services Section End -->
