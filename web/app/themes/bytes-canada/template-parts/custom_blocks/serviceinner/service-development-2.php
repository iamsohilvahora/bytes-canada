<?php
$service_development_block = get_fields(); // get all fields in array
// Service Development Section
$service_technology_title = $service_development_block['service_technology_title'];
$service_technology_content = $service_development_block['service_technology_content'];
$technology_page = $service_development_block['technology_page_link'];
$technology_page_label = $technology_page['button_label'];
$technology_page_link = button_group($technology_page);
$technology_details = $service_development_block['technology_details']; 
$selected_services = $service_development_block['selected_services']; 
// Why choose us section
$why_choose_technology_title = $service_development_block['why_choose_technology_title'];
$why_choose_technology_details = $service_development_block['why_choose_technology_details']; ?>
<!-- Service-inner Why Choose Section Start -->
<section class="section-spacing">
    <div class="container">
        <div class="service-inner-why-choose">
            <div class="service-inner-why-choose-top">
                <div class="service-inner-why-choose-left">
                    <?php if(!empty($service_technology_title)): ?>
                        <h2 class="h3"><?php echo $service_technology_title; ?></h2>
                    <?php endif;
                    if(!empty($service_technology_content)): ?>
                        <p><?php echo $service_technology_content; ?></p>
                    <?php endif;
                    if(!empty($technology_page_label) && !empty($technology_page_link)): ?>
                        <a <?php echo $technology_page_link; ?> class="btn dark transparent x-small" aria-label="Take me There"><?php echo $technology_page_label; ?></a>
                    <?php endif;
                    if(!empty($technology_details)): ?>
                    <div class="service-inner-why-choose-boxes">
                        <?php
                        foreach($technology_details as $detail):
                            $technology_logo = $detail['technology_logo'];
                            $technology_title = $detail['technology_title'];
                            if(!empty($technology_logo) && !empty($technology_title)): ?>
                                <div class="service-inner-why-choose-box">
                                    <img src="<?php echo $technology_logo['url']; ?>" alt="<?php echo $technology_logo['alt']; ?>" height="94" width="94" />
                                    <h3 class="h7"><?php echo $technology_title; ?></h3>
                                </div>
                        <?php
                            endif;
                        endforeach; ?>
                    </div>
                    <?php endif; ?>
                </div>
                <?php if(!empty($selected_services)): ?>
                <div class="service-inner-why-choose-right">
                    <?php
                    foreach($selected_services as $services):
                        $service_title = $services['service_title'];
                        $service_lists = $services['service_list'];
                        if(!empty($service_title) && !empty($service_lists)): ?>
                        <div class="service-inner-why-choose-right-listing">
                            <h3 class="h7"><?php echo $service_title; ?></h3>
                            <ul class="service-inner-why-choose-right-ul">
                            <?php
                            foreach($service_lists as $service):
                                $service_name = $service['service_name'];
                                if(!empty($service_name)): ?>
                                    <li class="service-inner-why-choose-right-list">
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
            <?php if(!empty($why_choose_technology_details)): ?>
            <div class="service-inner-why-choose-bottom">
                <?php if(!empty($why_choose_technology_title)): ?>
                    <h3 class="h5"><?php echo $why_choose_technology_title; ?></h3>
                <?php endif; ?>
                <div class="service-inner-why-choose-bottom-boxes">
                    <?php
                    foreach($why_choose_technology_details as $technology_detail):
                        $why_choose_title = $technology_detail['why_choose_title'];
                        $why_choose_content = $technology_detail['why_choose_content'];
                        if(!empty($why_choose_title) && !empty($why_choose_content)): ?>
                            <div class="service-inner-why-choose-bottom-box">
                                <h4 class="h6"><?php echo $why_choose_title; ?></h4>
                                <p><?php echo $why_choose_content; ?></p>
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
<!-- Service-inner Why Choose Section End -->
