<?php
$about_blocks = get_fields(); // get all fields in array
$company_description = $about_blocks['company_description'];
$about_companies = $about_blocks['about_companies']; ?>
<!-- About Company Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="about-company">
            <?php if(!empty($company_description)): ?>
            	<div class="about-company-top">
                	<?php echo $company_description; ?>
            	</div>
            <?php endif;
            if(!empty($about_companies)): ?>
            <div class="about-company-bottom">
                <div class="about-company-bottom-boxes">
                    <?php 
                    foreach($about_companies as $about): 
                    	$title = $about['title'];
						$content = $about['content'];
						if(!empty($title) && !empty($content)): ?>
	                    	<div class="about-company-bottom-box">
	                        	<h3><?php echo $title; ?></h3>
	                        	<p><?php echo $content; ?></p>
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
<!-- About Company Section End -->
