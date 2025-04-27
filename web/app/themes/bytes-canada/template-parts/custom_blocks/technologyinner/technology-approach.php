<?php
$technology_approach_block = get_fields(); // get all fields in array
$technology_approach_title = $technology_approach_block['technology_approach_title'];
$technology_approach_content = $technology_approach_block['technology_approach_content'];
$approach_details = $technology_approach_block['approach_details']; ?>
<!-- Technology-inner Stack Development Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="technology-inner-stack-development">
            <div class="technology-inner-stack-development-top">
                <?php if(!empty($technology_approach_title)): ?>
                    <h2 class="h3"><?php echo $technology_approach_title; ?></h2>
                <?php endif;
                if(!empty($technology_approach_content)): ?>
                    <p><?php echo $technology_approach_content; ?></p>
                <?php endif; ?>
            </div>
            <?php if(!empty($approach_details)): ?>
            <div class="technology-inner-stack-development-bottom">
                <div class="technology-inner-stack-development-boxes">
                    <?php
                    foreach($approach_details as $detail):
                        $approach_logo = $detail['approach_logo'];
                        $approach_title = $detail['approach_title'];
                        $approach_content = $detail['approach_content'];
                        if(!empty($approach_logo) && !empty($approach_title) && !empty($approach_content)): ?>
                        <div class="technology-inner-stack-development-box">
                            <div class="technology-inner-stack-development-box-left">
                                <img src="<?php echo $approach_logo['url']; ?>" alt="<?php echo $approach_logo['alt']; ?>" height="108" width="108" />
                            </div>
                            <div class="technology-inner-stack-development-box-right">
                                <h3 class="h5"><?php echo $approach_title; ?></h3>
                                <p><?php echo $approach_content; ?></p>
                            </div>
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
<!-- Technology-inner Stack Development Section End -->
