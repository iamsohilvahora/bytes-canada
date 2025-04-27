<?php
$development_blocks = get_fields(); // get all fields in array
$development_page_details = $development_blocks['development_page_details'];
if(!empty($development_page_details)): ?>
<!-- App Development Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="core-engineering">
        	<?php
        	foreach($development_page_details as $development):
        		$development_title = $development['development_title'];
				$development_content = $development['development_content'];
				$development_pages = $development['development_pages']; ?>
                <div class="core-engineering-box">
                    <?php if(!empty($development_title)): ?>
                    	<h2 class="h3 core-engineering-box-title"><?php echo $development_title; ?></h2>
                    <?php endif;
                    if(!empty($development_content)): ?>
                    <p class="core-engineering-box-data"><?php echo $development_content; ?></p>
                    <?php endif;
                    if(!empty($development_pages)): ?>
                    <ul>
                        <?php
                        $i = 1; 
            			foreach($development_pages as $development_page):
                            $title = $development_page['technology_page']['title'] ? $development_page['technology_page']['title'] : "";
                            $url = $development_page['technology_page']['url'] ? $development_page['technology_page']['url'] : "";
                            $target = $development_page['technology_page']['target'] ? $development_page['technology_page']['target'] : "";
                            if(!empty($title) && !empty($url)): ?>
                                <li class="core-engineering-box-list">
                                    <a href="<?php echo $url; ?>" target="<?php echo $target; ?>" class="h6 core-engineering-box-list-link">
                                        <span class="core-engineering-box-list-number"><?php echo sprintf('%02d', $i++); ?></span>
                                        <?php echo $title; ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                         <?php endforeach; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- App Development Section End -->
<?php endif; ?>
