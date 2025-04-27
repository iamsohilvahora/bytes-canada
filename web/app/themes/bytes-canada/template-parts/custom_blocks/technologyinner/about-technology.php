<?php
$about_technology_block = get_fields(); // get all fields in array
$technology_title = $about_technology_block['about_technology_title'];
$technology_content = $about_technology_block['about_technology_content'];
$technology_details = $about_technology_block['technology_details']; ?>
<!-- Technology-inner Title Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="technology-inner-title">
            <div class="technology-inner-title-top">
                <?php if(!empty($technology_title)): ?>
                    <h2 class="h3"><?php echo $technology_title; ?></h2>
                <?php endif;
                if(!empty($technology_content)): ?>
                    <p><?php echo $technology_content; ?></p>
                <?php endif; ?>
            </div>
            <?php if(!empty($technology_details)): ?>
            <div class="technology-inner-title-bottom">
                <div class="technology-inner-title-bottom-boxes">
                    <?php
                    foreach($technology_details as $detail):
                        $technology_logo = $detail['technology_logo'];
                        $technology_title = $detail['technology_title'];
                        $technology_content = $detail['technology_content'];
                        if(!empty($technology_logo) && !empty($technology_title) && !empty($technology_content)): ?>
                        <div class="technology-inner-title-bottom-box">
                            <img src="<?php echo $technology_logo['url']; ?>" alt="<?php echo $technology_logo['alt']; ?>" height="72" width="72" />
                            <h3 class="h5"><?php echo $technology_title; ?></h3>
                            <p><?php echo $technology_content; ?></p>
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
<!-- Technology-inner Title Section End -->
