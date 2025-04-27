<?php
$service_development_block = get_fields(); // get all fields in array
$service_technology_title = $service_development_block['service_technology_title'];
$service_technology_content = $service_development_block['service_technology_content'];
$technology_page = $service_development_block['technology_page_link'];
$technology_page_label = $technology_page['button_label'];
$technology_page_link = button_group($technology_page);
$technology_details = $service_development_block['technology_details']; 
$selected_services = $service_development_block['selected_services']; ?>
<!-- Service-inner Development Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="service-inner-development">
            <div class="service-inner-development-top">
               <?php if(!empty($service_technology_title)): ?>
                    <h2 class="h3"><?php echo $service_technology_title; ?></h2>
                <?php endif;
                if(!empty($service_technology_content)): ?>
                    <p><?php echo $service_technology_content; ?></p>
                <?php endif;
                if(!empty($technology_page_label) && !empty($technology_page_link)): ?>
                    <a <?php echo $technology_page_link; ?> class="btn dark transparent x-small" aria-label="Take me There"><?php echo $technology_page_label; ?></a>
                <?php endif; ?>
            </div>
            <?php if(!empty($selected_services) || !empty($technology_details)): ?>
            <div class="service-inner-development-bottom">
                <?php if(!empty($technology_details)): ?>
                <div class="service-inner-development-bottom-left">
                    <div class="service-inner-development-boxes">
                        <?php
                        foreach($technology_details as $detail):
                            $technology_logo = $detail['technology_logo'];
                            $technology_title = $detail['technology_title'];
                            if(!empty($technology_logo) && !empty($technology_title)): ?>
                                <div class="service-inner-development-box">
                                    <img src="<?php echo $technology_logo['url']; ?>" alt="<?php echo $technology_logo['alt']; ?>" height="102" width="102" />
                                    <h3 class="h6"><?php echo $technology_title; ?></h3>
                                </div>
                        <?php
                            endif;
                        endforeach; ?>
                    </div>
                </div>
                <?php endif;
                if(!empty($selected_services)): ?>
                <div class="service-inner-development-bottom-right">
                    <?php
                        foreach($selected_services as $services):
                            $service_title = $services['service_title'];
                            $service_lists = $services['service_list'];
                            if(!empty($service_title) && !empty($service_lists)): ?>
                                <div class="service-inner-development-bottom-right-listing">
                                    <h3 class="h7"><?php echo $service_title; ?></h3>
                                    <ul class="service-inner-development-bottom-right-ul">
                                        <?php
                                        foreach($service_lists as $service):
                                            $service_name = $service['service_name'];
                                            if(!empty($service_name)): ?>
                                                <li class="service-inner-development-bottom-right-list">
                                                    <span class="h7"><?php echo $service_name; ?></span>
                                                </li>
                                            <?php
                                            endif;
                                        endforeach; ?>
                                    </ul>
                                </div>
                    <?php 
                            endif;
                        endforeach; ?>
                </div>
                <?php endif; ?>
            </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- Service-inner Development Section End -->
