<?php
$about_service_block = get_fields(); // get all fields in array
$service_title = $about_service_block['service_title'];
$service_content = $about_service_block['service_content'];
$service_details = $about_service_block['service_details'];
$selected_services = $about_service_block['select_services']; ?>
<!-- Service-inner Crafting Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="service-inner-crafting">
            <div class="service-inner-crafting-top">
                <div class="service-inner-crafting-left">
                    <?php if(!empty($service_title)): ?>
                        <h2 class="h3"><?php echo $service_title; ?></h2>
                    <?php endif;
                    if(!empty($service_content)): ?>
                        <p><?php echo $service_content; ?></p>
                    <?php endif; ?>
                </div>
                <?php if(!empty($selected_services)): ?>
                <div class="service-inner-crafting-right">
                    <ul>
                        <?php
                        $i = 1;
                        foreach($selected_services as $service):
                            $service_name = $service['service_name'];
                            if(!empty($service_name)): ?>
                                <li class="service-inner-crafting-list">
                                    <span class="h6 service-inner-crafting-list-link">
                                        <span class="service-inner-crafting-list-number"><?php echo sprintf('%02d', $i++); ?></span>
                                        <?php echo $service_name; ?>
                            </span>
                                </li>
                        <?php
                            endif;
                        endforeach; ?>
                    </ul>
                </div>
                <?php endif; ?>
            </div>
            <?php if(!empty($service_details)): ?>
            <div class="service-inner-crafting-bottom">
                <div class="service-inner-crafting-bottom-boxes">
                    <?php
                    foreach($service_details as $service):
                        $detail = $service['add_detail'];
                        if(!empty($detail)): ?>
                        <div class="service-inner-crafting-bottom-box service-inner-crafting-box-bg1">
                            <p class="h7"><?php echo $detail; ?></p>
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
<!-- Service-inner Crafting Section End -->
