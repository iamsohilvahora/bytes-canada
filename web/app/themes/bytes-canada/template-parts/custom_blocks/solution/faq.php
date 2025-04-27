<?php 
$faq_blocks = get_fields(); // get all fields in array
// left group
$faq_title = $faq_blocks['faqs']['left_group']['faq_title'];
$faq_link_title = $faq_blocks['faqs']['left_group']['faq_link_title'];
$faq_page_link = $faq_blocks['faqs']['left_group']['faq_page_link'];
// right group
$choose_faqs = $faq_blocks['faqs']['right_group']['choose_faqs'];
if(!empty($choose_faqs)): ?>
<!-- FAQ Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="FAQ-Section">
            <div class="FAQ-Section-title">
            	<?php if(!empty($faq_title)): ?>
                	<h2 class="h3"><?php echo $faq_title; ?></h2>
        		<?php endif;
        		if(!empty($faq_link_title) && !empty($faq_page_link)): ?>
                	<!-- <a href="<?php echo $faq_page_link; ?>" class="btn dark transparent"><?php echo $faq_link_title; ?></a> -->
        		<?php endif; ?>
            </div>
            <div class="FAQ-Section-data">
            	<?php 
            		foreach ($choose_faqs as $faq): 
	            		$faq_title = $faq->post_title;	
	            		$faq_content = $faq->post_content;	
	            		if(!empty($faq_title) && !empty($faq_content)): ?>
			                <div class="FAQ-Section-data-list">
			                    <h3><?php echo $faq_title; ?><span></span></h3>
			                    <p><?php echo $faq_content; ?></p>
			                </div>
					<?php 
						endif;
					endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- FAQ Section End -->
<?php endif; ?>
