<?php
$service_framework_block = get_fields(); // get all fields in array
$service_framework_title = $service_framework_block['service_framework_title'];
$service_framework_content = $service_framework_block['service_framework_content'];
$framework_page = $service_framework_block['select_framework_page'];
$framework_page_label = $framework_page['button_label'];
$framework_page_link = button_group($framework_page);
$framework_details = $service_framework_block['framework_details']; ?>
<!-- Service-inner Framework Section Start -->
<section class="section-spacing-bg service-inner-framework-bg">
    <div class="container">
        <div class="service-inner-framework">
            <div class="service-inner-framework-top">
                <?php if(!empty($service_framework_title)): ?>
                    <h2 class="h3"><?php echo $service_framework_title; ?></h2>
                <?php endif;
                if(!empty($service_framework_content)): ?>
                    <p><?php echo $service_framework_content; ?></p>
                <?php endif;
                if(!empty($framework_page_label) && !empty($framework_page_link)): ?>
                    <a <?php echo $framework_page_link; ?> class="btn dark transparent x-small" aria-label="Take me There"><?php echo $framework_page_label; ?></a>
                <?php endif; ?>
            </div>
            <?php if(!empty($framework_details)): ?>
            <div class="service-inner-framework-bottom">
                <div class="service-inner-framework-boxes">
                    <?php
                    foreach($framework_details as $detail):
                        $framework_logo = $detail['framework_logo'];
                        $framework_title = $detail['framework_title'];
                        if(!empty($framework_logo) && !empty($framework_title)): ?>
                            <div class="service-inner-framework-box">
                                <img src="<?php echo $framework_logo['url']; ?>" alt="<?php echo $framework_logo['alt']; ?>" height="136" width="136" />
                                <h3 class="h6"><?php echo $framework_title; ?></h3>
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
<!-- Service-inner Framework Section End -->
