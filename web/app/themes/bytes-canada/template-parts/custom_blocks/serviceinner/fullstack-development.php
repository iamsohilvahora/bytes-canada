<?php
$fullstack_development_block = get_fields(); // get all fields in array
$technology_details = $fullstack_development_block['technology_details'];
if(!empty($technology_details)): ?>
<!-- Service-inner Front-Back Section Start -->
<section class="section-spacing-bg service-inner-front-back-bg">
    <div class="container">
        <div class="service-inner-front-back">
            <div class="service-inner-front-back-top">
                <?php
                foreach($technology_details as $detail):
                    $technology_title = $detail['technology_title'];
                    $technology_content = $detail['technology_content'];
                    $technology_logos = $detail['technology_logo'];
                    $technology_page = $detail['select_technology_page'];
                    $technology_page_label = $technology_page['button_label'];
                    $technology_page_link = button_group($technology_page); ?>
                    <div class="service-inner-front-back-left">
                        <?php if(!empty($technology_title)): ?>
                            <h2 class="h3"><?php echo $technology_title; ?></h2>
                        <?php endif;
                        if(!empty($technology_content)): ?>
                            <p><?php echo $technology_content; ?></p>
                        <?php endif;
                        if(!empty($technology_page_label) && !empty($technology_page_link)): ?>
                            <a <?php echo $technology_page_link; ?> class="btn dark transparent x-small" aria-label="Take me There"><?php echo $technology_page_label; ?></a>
                        <?php endif; 
                        if(!empty($technology_logos)): ?>
                        <div class="service-inner-front-back-bottom">
                            <div class="service-inner-front-back-boxes">
                                <?php
                                foreach($technology_logos as $technology_logo):
                                    $logo = $technology_logo['logo'];
                                    $title = $technology_logo['title']; 
                                    if(!empty($logo) && !empty($title)): ?>
                                        <div class="service-inner-front-back-box">
                                            <img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>" height="94" width="94" />
                                            <h3 class="h7"><?php echo $title; ?></h3>
                                        </div>
                                <?php
                                    endif;
                                endforeach; ?>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                <?php
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
