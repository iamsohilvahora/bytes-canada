<?php
$technology_service_block = get_fields(); // get all fields in array
$technology_service_title = $technology_service_block['technology_service_title'];
$technology_services = $technology_service_block['technology_services']; 
if(!empty($technology_service_title) && !empty($technology_services)): ?>
<!-- Technology-inner Service Section Start -->
<section class="section-spacing-bg technology-inner-service-bg">
    <div class="container">
        <div class="technology-inner-service">
            <div class="technology-inner-service-title">
                <h2 class="h3"><?php echo $technology_service_title; ?></h2>
            </div>
            <div class="technology-inner-service-boxes">
                <?php
                foreach($technology_services as $service): 
                    $service_title = $service['technology_service_title'];
                    $service_content = $service['technology_service_content'];
                    if(!empty($service_title) && !empty($service_content)): ?>
                        <div class="technology-inner-service-box">
                            <h3 class="h6"><?php echo $service_title; ?></h3>
                            <p><?php echo $service_content; ?></p>
                        </div>
                <?php
                    endif;
                endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- Technology-inner Service Section End -->
<?php endif; ?>
