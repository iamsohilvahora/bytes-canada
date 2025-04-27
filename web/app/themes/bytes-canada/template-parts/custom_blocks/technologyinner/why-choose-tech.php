<?php
$technology_why_block = get_fields(); // get all fields in array
$why_choose_technology_title = $technology_why_block['why_choose_technology_title'];
$why_choose_technology_details = $technology_why_block['why_choose_technology_details'];
if(!empty($why_choose_technology_title) && !empty($why_choose_technology_details)): ?> ?>
<!-- Technology-inner Why Choose Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="technology-inner-why-choose">
            <div class="technology-inner-why-choose-top">
                <h2 class="h3"><?php echo $why_choose_technology_title; ?></h2>
            </div>
            <div class="technology-inner-why-choose-bottom">
                <div class="technology-inner-why-choose-bottom-boxes">
                    <?php
                    foreach($why_choose_technology_details as $tech_detail):
                        $why_choose_logo = $tech_detail['why_choose_logo'];
                        $why_choose_title = $tech_detail['why_choose_title'];
                        $why_choose_content = $tech_detail['why_choose_content'];
                        if(!empty($why_choose_logo) && !empty($why_choose_title) && !empty($why_choose_content)): ?>
                        <div class="technology-inner-why-choose-bottom-box">
                            <img src="<?php echo $why_choose_logo['url']; ?>" alt="<?php echo $why_choose_logo['alt']; ?>" height="80" width="80" />
                            <h3 class="h6"><?php echo $why_choose_title; ?></h3>
                            <p><?php echo $why_choose_content; ?></p>
                        </div>
                    <?php
                        endif;
                    endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Technology-inner Why Choose Section End -->
<?php endif; ?>
